<?php
Namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @orm\Entity
 * @orm\Table(name="Users")
 */
class Users
{
    /**
     * @ORM\Id
     * @orm\Column(type="integer")
     * @orm\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @orm\Column(type="string")
     */
    protected $username;
     /**
     * @orm\Column(type="string")
     */
    protected $password;
     /**
     * @orm\Column(type="string")
     */
    protected $ctime;
     /**
     * @orm\Column(type="datetime")
     */
    protected $karma;
     /**
     * @orm\Column(type="string")
     */
    protected $email;//
     /**
     * @orm\Column(type="string")
     */
    protected $auth;//authentication token
     /**
     * @orm\Column(type="string")
     */
    protected $apisecret;//api POST requests secrete code to prevent CSRF attacks
     /**
     * @orm\Column(type="string")
     */
    protected $flags;//user flags "a" enables administrative privillage
     /**
     * @orm\Column(type="datetime")
     */
    protected $karma_incr_time;
     /**
     * @orm\Column(type="datetime")
     */
    protected $pwd_reset;
     /**
     * @orm\Column(type="integer")
     */
    protected $replies;//number of unread replies
    
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        return $this->username  = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        return $this->password = $password;
    }

    public function getCtime()
    {
        return $this->ctime;
    }
    public function setCtime($ctime)
    {
        return $this->ctime;
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set karma
     *
     * @param \DateTime $karma
     * @return Users
     */
    public function setKarma($karma)
    {
        $this->karma = $karma;

        return $this;
    }

    /**
     * Get karma
     *
     * @return \DateTime 
     */
    public function getKarma()
    {
        return $this->karma;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set auth
     *
     * @param string $auth
     * @return Users
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;

        return $this;
    }

    /**
     * Get auth
     *
     * @return string 
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * Set apisecret
     *
     * @param string $apisecret
     * @return Users
     */
    public function setApisecret($apisecret)
    {
        $this->apisecret = $apisecret;

        return $this;
    }

    /**
     * Get apisecret
     *
     * @return string 
     */
    public function getApisecret()
    {
        return $this->apisecret;
    }

    /**
     * Set flags
     *
     * @param string $flags
     * @return Users
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return string 
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set karma_incr_time
     *
     * @param \DateTime $karmaIncrTime
     * @return Users
     */
    public function setKarmaIncrTime($karmaIncrTime)
    {
        $this->karma_incr_time = $karmaIncrTime;

        return $this;
    }

    /**
     * Get karma_incr_time
     *
     * @return \DateTime 
     */
    public function getKarmaIncrTime()
    {
        return $this->karma_incr_time;
    }

    /**
     * Set pwd_reset
     *
     * @param \DateTime $pwdReset
     * @return Users
     */
    public function setPwdReset($pwdReset)
    {
        $this->pwd_reset = $pwdReset;

        return $this;
    }

    /**
     * Get pwd_reset
     *
     * @return \DateTime 
     */
    public function getPwdReset()
    {
        return $this->pwd_reset;
    }

    /**
     * Set replies
     *
     * @param integer $replies
     * @return Users
     */
    public function setReplies($replies)
    {
        $this->replies = $replies;

        return $this;
    }

    /**
     * Get replies
     *
     * @return integer 
     */
    public function getReplies()
    {
        return $this->replies;
    }
}
