<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponser
{
	public function successResponse($data = [], ?string $message = null, int $code = Response::HTTP_OK): JsonResponse
	{
		$response = $data;

		if (isset($message)) {
			$response = [
				'messages' => [$message]
			];

			$response = array_merge($response, $data);
		}

		return response()->json($response, $code);
	}

	public function errorResponse(string $message, int $code = Response::HTTP_INTERNAL_SERVER_ERROR): JsonResponse
	{
		return response()->json([
			'errors' => ['messages' => $message]
		], $code);
	}

	public function errorValidation(array $data, int $code)
	{
		return response()->json([
			'errors' => $data
		], $code);
	}
}
