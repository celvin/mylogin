<?php
namespace AppBundle\Security\Core\User;

use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class OAuthUserProvider
 * @package AppBundle\Security\Core\User
 */
class OAuthUserProvider extends BaseClass {       
    /**
     * {@inheritdoc}
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response){
        $socialID = $response->getUsername();
        $name=$response->getNickname();
        $user = $this->userManager->findUserBy(array($this->getProperty($response)=>$socialID));
        $email = $response->getEmail();
        //check if the user already has the corresponding social account
        if (null === $user) {
            //check if the user has a normal account
            $user = $this->userManager->findUserByEmail($email);

            if (null === $user || !$user instanceof UserInterface) {
                //if the user does not have a normal account, set it up:
                $user = $this->userManager->createUser();
                
//                $userShort=  explode("@", $email);
                $user->setUsername($email);
                $user->setFullName($name);
                $user->setEmail($email);
                $user->setPlainPassword(md5(uniqid()));
                $user->setEnabled(true);
                $user->setCreateDatetime(new \DateTime());
                
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    $ip = $_SERVER['REMOTE_ADDR'];
                }

                $user->setLoginIp($ip);
                
                $user->setProfilePicture($response->getProfilePicture());
                $user->setFullyfilled(false);
            }
            
                //then set its corresponding social id
                $service = $response->getResourceOwner()->getName();
                switch ($service) {
                    case 'facebook':
                        $user->setFacebookID($socialID);
                        break;
                }
                
                $user->setLastLoginDatetime(new \DateTime());
                
                $this->userManager->updateUser($user);
            
        } else {
            //and then login the user
            $checker = new UserChecker();
            $checker->checkPreAuth($user);
        }

        return $user;
    }
    
    
    protected function updateUserByOAuthUserResponse(User $user, UserResponseInterface $response) {

        $providerName = $response->getResourceOwner()->getName();
        $providerNameSetter = 'set' . ucfirst($providerName) . 'Id';
        $user->$providerNameSetter($response->getUsername());

        $user->setProfilePicture($response->getProfilePicture());

        if (!$user->getPassword()) {
            // generate unique token
            $secret = md5(uniqid(rand(), true));
            $user->setPassword($secret);
        }

        return $user;
    }

}
