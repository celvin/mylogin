<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * Description of SecurityController
 *
 * @author celvin
 */
class SecurityController extends Controller {
    protected $oauthDataKey = 'oAuthData';

    protected function renderLogin(array $data) {
        
        if (false === $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_ANONYMOUSLY')) {
            return new RedirectResponse('/', 403);
        }

        $template = sprintf('FOSUserBundle:Security:login.html.%s', $this->container->getParameter('fos_user.template.engine'));

        return $this->container->get('templating')->renderResponse($template, $data);
    }

    public function oauthTargetAction() {
        $user = $this->getUser();
        $this->get('session')->getFlashBag()->set($this->oauthDataKey, $user->getData());
        return $this->redirect($this->generateUrl('oauth_register'));
    }

    public function oauthRegisterAction() {
        $oAuthData = $this->get('session')->getFlashBag()->get($this->oauthDataKey);

        if (!$oAuthData || !is_array($oAuthData) || !isset($oAuthData['provider']) || !isset($oAuthData['providerId']))
            return $this->redirect($this->generateUrl('hwi_oauth_connect'));

        // Search for userOauth
        $userOauth = $this->getDoctrine()->getRepository('AcmeBundle:UserOauth')->findOneBy(array(
            'provider'=>$oAuthData['provider'],
            'providerId'=>$oAuthData['providerId'],
        ));
        if ($userOauth) {
            // We found it, update user oauth data
            $this->setUserOauthData($userOauth, $oAuthData);
            $this->getDoctrine()->getManager()->flush();

            // Log the user
            $user = $userOauth->getUser();
            $this->logUser($user);
        } else {
            $user = $this->getUser();
            if ($user && is_object($user)) {
                // User is already connected, just add the UserOauth
                $userOauth = $this->getNewUserOauth($user, $oAuthData);
                $this->getDoctrine()->getManager()->flush();
            } else {
                // Not logged and not existing, redirect to register page
                $this->get('session')->getFlashBag()->set($this->oauthDataKey, $oAuthData);
                return $this->redirect($this->generateUrl('register'));
            }
        }
        return $this->redirect($this->generateUrl('_homepage'));
    }

    /**
     * Get a new UserOauth entity with persisting it
     *
     * @param Entity\User $user
     * @param array $oAuthData
     * @return Entity\UserOauth
     */
    protected function getNewUserOauth($user, $oAuthData) {
        $userOauth = new Entity\UserOauth();
        $userOauth->setUser($user);
        $this->setUserOauthData($userOauth, $oAuthData);
        $this->getDoctrine()->getManager()->persist($userOauth);
        return $userOauth;
    }

    protected function setUserOauthData($userOauth, $oAuthData) {
        foreach($oAuthData as $k=>$v) {
            $fct = 'set'.ucfirst($k);
            $userOauth->$fct($v);
        }
    }

    public function logUser(Entity\User $user) {
        // Here, "main" is the name of the firewall in your security.yml
        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        $this->get('security.context')->setToken($token);

        // Fire the login event
        $this->get('event_dispatcher')->dispatch(AuthenticationEvents::AUTHENTICATION_SUCCESS, new AuthenticationEvent($token));
    }

    public function registerAction() {
        $user = new Entity\User();

        $oAuthData = $this->get('session')->getFlashBag()->get($this->oauthDataKey);
        if ($oAuthData && is_array($oAuthData)) {
            if (isset($oAuthData['email']) && $oAuthData['email'])
                $user->setEmail($oAuthData['email']);
            if (isset($oAuthData['nickname']) && $oAuthData['nickname'])
                $user->setUsername($oAuthData['nickname']);
        } else {
            $oAuthData = false;
        }

        $form = $this->createFormBuilder($user)
                    // Create your form normally
                    ->getForm();

        $form->handleRequest($this->getRequest());
        if ($form->isValid()) {
            // Handle the user normally, preparing for persistence
            $this->getDoctrine()->getManager()->persist($user);

            if ($oAuthData && is_array($oAuthData))
                $userOauth = $this->getNewUserOauth($user, $oAuthData);

            $this->getDoctrine()->getManager()->flush();
            $this->logUser($user);
            return $this->redirect($this->generateUrl('_homepage'));
        }

        // Keep oAuthData in flashbag
        if ($oAuthData)
            $this->get('session')->getFlashBag()->set($this->oauthDataKey, $oAuthData);
        //ToDo Create user Here
        return [];
    }
}