<?php 

namespace App\Controller;

use App\Entity\User;
use App\Service\ApiService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
/**
 * @Route("/api")
 */
class ApiController {

	private $em;

	public function __construct(EntityManagerInterface $em)
	{
		$this->em = $em;
	}

	/**
	 * @Route("/test", name="api_test", methods={"GET"})
	 */
	public function test(ApiService $apiService)
	{
		$json = $apiService->getData();
		
		return new JsonResponse($json, 200, [], true);
	}

	/**
	 * @Route("/register", name="api_register", methods={"POST"})
	 */
	public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher)
	{
		$user = new User();


		$data = json_decode($request->getContent(), true);

		$email = $data['email'];
		$plainPassword = $data['password'];
		$password = $userPasswordHasher->hashPassword($user, $plainPassword);

		$user->setEmail($email);
		$user->setPassword($password);

		$this->em->persist($user);
		$this->em->flush();

		return new JsonResponse([
			'status' => true,
			'message' => 'Succeeded',
		]);
	}
}

?>