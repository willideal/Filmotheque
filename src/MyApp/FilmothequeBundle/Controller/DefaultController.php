<?php

//namespace MyApp\FilmothequeBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;


namespace MyApp\FilmothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware,
       Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\FilmothequeBundle\Entity\Categorie;

class DefaultController extends ContainerAware
{  	
	public function indexAction()
	{
		$em = $this->container->get('doctrine')->getEntityManager();
		$categories = $em->getRepository('MyAppFilmothequeBundle:Categorie')->findAll();

		return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Default:index.html.twig',array(
			 'categories' => $categories)
		);
	}
	
	public function choisirLangueAction($langue = null)
	{
		if($langue != null)
		{
			// On enregistre la langue en session
			$this->container->get('session')->setLocale($langue);
		}

		// on tente de rediriger vers la page d'origine
		$url = $this->container->get('request')->headers->get('referer');
		if(empty($url)) {
			$url = $this->container->get('router')->generate('myapp_accueil');
		}
		return new RedirectResponse($url);
	}


}
