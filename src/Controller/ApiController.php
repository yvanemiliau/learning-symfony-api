<?php 

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api")
 */
class ApiController {

	/**
	 * @Route("/test", name="api_test", methods={"GET"})
	 */
	public function test(SerializerInterface $serializer)
	{
		$data = [
			'status' => true,
			'message' => 'This is a test for your api',
		];

		$json = $serializer->serialize($data, 'json');

		return new JsonResponse($json, 200, [], true);
	}
}

?>