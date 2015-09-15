<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use AppBundle\Form\UsersType;

/**
 * Users Controller.
 */
class UsersController extends Controller
{
    /**
     * @Route("/login")
     */
    public function loginAction(Request $request)
    {
        $form = $this->createFormBuilder()
                ->add('username', 'text')
                ->add('password', 'password')
                ->add('new', 'checkbox', array('label' => 'create new account'))
                ->add('Login', 'submit', array('label' => 'Login'))
                ->getForm();
        
        return $this->render('default/login.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
}