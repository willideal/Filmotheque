<?php

namespace MyApp\FilmothequeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ActeurForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
       $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance', 'birthday')
            ->add('sexe', 'choice', array('choices' => array('F'=>'Féminin','M'=>'Masculin')))
        ;
	/*	$builder->add('nom', 'text', array('label' => 'Nom de famille'))
		->add('prenom', 'text', array('label' => 'Prénom'))
		->add('dateNaissance', 'birthday', array('label' => 'Date de naissance'));
*/
    }
    
    public function getName()
    {
        return 'acteur';
    }    
}

