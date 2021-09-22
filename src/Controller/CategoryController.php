<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{

	public function showAction($id) {

	
		// je récupère la catégorie que je veux afficher
		$category = $this->getDoctrine()->getRepository(Category::class)->find($id);
		
		// je retourne la catégorie au template
		return $this->render('category/show.html.twig', ['category'=>$category]);
	}
}
