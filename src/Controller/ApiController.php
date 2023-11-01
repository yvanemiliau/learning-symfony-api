<?php 

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/api")
 */
class ApiController {

	/**
	 * @Route("/test", name="api_test")
	 */
	public function test()
	{
		$data = new JsonResponse([
			'status' => true,
			'message' => 'This is a test for your api',
		]);

		return $data;
	}
}

?>