<?php

namespace App\Controller;

use App\Entity\Techno;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TechnoController extends AbstractController
{

	public function showAction($id) {

		// je récupère le techno que je veux afficher
		$techno = $this->getDoctrine()->getRepository(Techno::class)->find($id);
		
		// je retourne le techno au template
		return $this->render('techno/show.html.twig', ['techno'=>$techno]);
	}
}