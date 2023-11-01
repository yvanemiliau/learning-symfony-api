<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ChoirController {

	public function index()
	{
		return new Response("This is the choir homepage");
	}
}

?>