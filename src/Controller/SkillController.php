<?php

namespace App\Controller;

use App\Entity\Skill;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SkillController extends AbstractController
{

	public function showAction($id) {

	

		// je récupère le skill que je veux afficher
		$skill = $this->getDoctrine()->getRepository(Skill::class)->find($id);
		
		// je retourne le skill au template
		return $this->render('skill/show.html.twig', ['skill'=>$skill]);
	}
}
