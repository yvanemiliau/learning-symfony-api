<?php 

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\ApiService;

/**
 * @Route("/api")
 */
class ApiController {

	/**
	 * @Route("/test", name="api_test", methods={"GET"})
	 */
	public function test(ApiService $apiService)
	{
		$json = $apiService->getData();
		
		return new JsonResponse($json, 200, [], true);
	}
}

?>