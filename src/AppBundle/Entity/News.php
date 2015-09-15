<?php
Namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @orm\Entity
 * @orm\Table(name="News")
 */
class News
{
    /**
     * @orm\Id
     * @orm\Column(type="integer")
     * @orm\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @orm\Column(type="string") 
     */
    protected $title;
    /**
     * @orm\Column(type="string") 
     */
    protected $url;
    /**
     * @orm\Column(type="integer") 
     */
    protected $user_id;
    /**
     * @orm\Column(type="string") 
     */
    protected $ctime;
    /**
     * @orm\Column(type="integer") 
     */
    protected $score;
    /**
     * @orm\Column(type="integer") 
     */
    protected $rank;//rank = score / age ^ alpha
    /**
     * @orm\Column(type="integer") 
     */
    protected $up;
    /**
     * @orm\Column(type="integer") 
     */
    protected $down;
    /**
     * @orm\Column(type="integer") 
     */
    protected $comments;//number of comments
}