<?php

namespace AppBundle\Entity;

 
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

 
/**
 * ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 * @ORM\Entity()
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
 
    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", nullable=true)
     */
    private $facebookID;
 
    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", nullable=true)
     */
    private $fullName;
 
    /**
     * @var string
     *
     * @ORM\Column(name="last_login_client_ip", type="string", nullable=true)
     */
    private $loginIp;
 
    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", nullable=true)
     */
    private $phoneNumber;
 
    /**
     * @var DateTime
     *
     * @ORM\Column(name="create_datetime", type="datetime", nullable=true)
     */
    private $createDatetime;
 
    /**
     * @var DateTime
     *
     * @ORM\Column(name="update_datetime", type="datetime", nullable=true)
     */
    private $updateDatetime;
 
    /**
     * @var DateTime
     *
     * @ORM\Column(name="last_login_datetime", type="datetime", nullable=true)
     */
    private $lastLoginDatetime;
 
    /**
     * @var boolean
     *
     * @ORM\Column(name="fully_filled", type="boolean", nullable=false, options={"default":0})
     */
    private $fullyFilled=0;
 
    /**
     * Set facebookID
     *
     * @param string $facebookID
     * @return User
     */
    public function setFacebookID($facebookID)
    {
        $this->facebookID = $facebookID;

        return $this;
    }

    /**
     * Get facebookID
     *
     * @return string 
     */
    public function getFacebookID()
    {
        return $this->facebookID;
    }

    /**
     * Set fullyFilled
     *
     * @param boolean $fullyFilled
     * @return User
     */
    public function setFullyFilled($fullyFilled)
    {
        $this->fullyFilled = $fullyFilled;

        return $this;
    }

    /**
     * Get fullyFilled
     *
     * @return boolean 
     */
    public function getFullyFilled()
    {
        return $this->fullyFilled;
    }
    
    /**
     * @var string
     *
     * @ORM\Column(name="profile_picture", type="string", length=250, nullable=true)
     *
     */
    protected $profilePicture;


    /**
     * Set profilePicture
     *
     * @param string $profilePicture
     * @return User
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    /**
     * Get profilePicture
     *
     * @return string 
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set createDatetime
     *
     * @param \DateTime $createDatetime
     * @return User
     */
    public function setCreateDatetime($createDatetime)
    {
        $this->createDatetime = $createDatetime;

        return $this;
    }

    /**
     * Get createDatetime
     *
     * @return \DateTime 
     */
    public function getCreateDatetime()
    {
        return $this->createDatetime;
    }

    /**
     * Set updateDatetime
     *
     * @param \DateTime $updateDatetime
     * @return User
     */
    public function setUpdateDatetime($updateDatetime)
    {
        $this->updateDatetime = $updateDatetime;

        return $this;
    }

    /**
     * Get updateDatetime
     *
     * @return \DateTime 
     */
    public function getUpdateDatetime()
    {
        return $this->updateDatetime;
    }

    /**
     * Set lastLoginDatetime
     *
     * @param \DateTime $lastLoginDatetime
     * @return User
     */
    public function setLastLoginDatetime($lastLoginDatetime)
    {
        $this->lastLoginDatetime = $lastLoginDatetime;

        return $this;
    }

    /**
     * Get lastLoginDatetime
     *
     * @return \DateTime 
     */
    public function getLastLoginDatetime()
    {
        return $this->lastLoginDatetime;
    }

    /**
     * Set loginIp
     *
     * @param string $loginIp
     * @return User
     */
    public function setLoginIp($loginIp)
    {
        $this->loginIp = $loginIp;

        return $this;
    }

    /**
     * Get loginIp
     *
     * @return string 
     */
    public function getLoginIp()
    {
        return $this->loginIp;
    }
}
