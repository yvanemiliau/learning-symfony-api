<?php 

namespace App\Service;

use Symfony\Component\Serializer\SerializerInterface;

class ApiService {

	private $serializer;

	public function __construct(SerializerInterface $serializer)
	{
		$this->serializer = $serializer;
	}

	public function getData()
	{
		$data = [
			'status' => true,
			'message' => 'This is a test for your api service',
		];

		$json = $this->serializer->serialize($data, 'json');

		return $json;
	}
}

?>