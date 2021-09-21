<?php

namespace App\Controller;

use App\Entity\Skill;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

	public function indexAction() {

		// aller récupérer 3 skills au piff
		$skills = $this->getDoctrine()->getRepository(Skill::class)->findAll();
		// je randomise ma liste de compétences
		shuffle($skills);
		// je cut le tableau pour garder les 3 premiers
		$skills = array_slice($skills, 0,3);
		

		return $this->render('home.html.twig', 
		['skills' => $skills]);
	}
}