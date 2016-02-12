<?php

namespace MyApp\FilmothequeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FilmForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
       $builder
            ->add('titre')
            ->add('description')
            ->add('categorie')
             ;
	$builder->add('acteurs', 'entity', array(
'class' => 'MyApp\FilmothequeBundle\Entity\Acteur',
      'property' => 'PrenomNom',
      'expanded' => false,
      'multiple' => true,
      'required' => false
));



	/*	$builder->add('nom', 'text', array('label' => 'Nom de famille'))
		->add('prenom', 'text', array('label' => 'Prénom'))
		->add('dateNaissance', 'birthday', array('label' => 'Date de naissance'));
*/
    }
    
    public function getName()
    {
        return 'film';
    }    
}





