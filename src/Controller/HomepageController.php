<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController {

	/**
	 * @Route("/", name="homepage")
	 */
	public function index()
	{
		return new Response("This is my homepage");
	}
}

?>