<?php

namespace MyApp\FilmothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\FilmothequeBundle\Entity\Film;
use MyApp\FilmothequeBundle\Form\FilmForm;

class FilmController extends ContainerAware
{
    
	public function listerAction()
	{        
		$em = $this->container->get('doctrine')->getEntityManager();

		$films= $em->getRepository('MyAppFilmothequeBundle:Film')->findAll();

		return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Film:lister.html.twig', 
		array(
		'films' => $films
		));
	}

	
public function editerAction($id = null)
{
	$message='';
	$em = $this->container->get('doctrine')->getEntityManager();

	if (isset($id)) 
	{
		// modification d'un acteur existant : on recherche ses données
		$film = $em->find('MyAppFilmothequeBundle:Film', $id);

		if (!$film)
		{
			$message='Aucun film trouvé';
		}
	}
	else 
	{
		// ajout d'un nouveau film
		$film = new Film();
	}

	$form = $this->container->get('form.factory')->create(new FilmForm(), $film);

	$request = $this->container->get('request');

	if ($request->getMethod() == 'POST') 
	{
    	 // 	$form->bindRequest($request);$this->form->bind($this->request);
			$form->bind($request);
	if ($form->isValid()) 
	{
		$em->persist($film);
		$em->flush();
		if (isset($id)) 
		{
			$message='Film modifié avec succès !';
		}
		else 
		{
			$message='Film ajouté avec succès !';
		}
	}
	}

	return $this->container->get('templating')->renderResponse(
'MyAppFilmothequeBundle:Film:editer.html.twig',
	array(
	'form' => $form->createView(),
	'message' => $message,
	));
}
    
	public function supprimerAction($id)
	{
	  $em = $this->container->get('doctrine')->getEntityManager();
	  $film = $em->find('MyAppFilmothequeBundle:Film', $id);
			
	  if (!$film) 
	  {
		throw new NotFoundHttpException("Film non trouvé");
	  }
			
	  $em->remove($film);
	  $em->flush();        


	  return new RedirectResponse($this->container->get('router')->generate('myapp_film_lister'));
	}
	
	public function topAction($max = 5)
	{
		$em = $this->container->get('doctrine')->getEntityManager();

		$qb = $em->createQueryBuilder();
		$qb->select('a')
		  ->from('MyAppFilmothequeBundle:Film', 'a')
		  ->orderBy('a.titre', 'DESC')
		  ->setMaxResults($max);

		$query = $qb->getQuery();
		$films = $query->getResult();

		return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Film:liste.html.twig', array(
			'films' => $films,
		));
	}
}
