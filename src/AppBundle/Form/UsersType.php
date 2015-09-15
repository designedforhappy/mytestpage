<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options) {
        $builder->add('username')->add('password');
    }

    public function getName() {
        return 'appbundle_userstype';
    }

}
