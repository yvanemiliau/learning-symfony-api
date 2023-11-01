<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChoirController {

	/**
	 * @Route("/choir", name="choir_homepage")
	 */
	public function index()
	{
		return new Response("This is the choir homepage");
	}
}

?>