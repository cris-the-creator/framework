<?php

declare(strict_types=1);

namespace zzt\Http;

/**
 * Http Response.
 *
 * @author Cristian Cornea <contact@corneascorner.dev>
 */
class Response
{
	/**
	 * @param string $body
	 * @param int $status
	 * @param array<string, string> $headers
	 */
	private function __construct(
		public readonly string $body,
		public readonly int $status,
		public readonly array $headers,
	) {}

	/**
	 * Creates a new http response.
	 *
	 * @param string $body  Response body content
	 * @param string[] $headers  Response headers
	 * @param int status  Response status code
	 * @return Response
	 */
	public static function new(string $body, array $headers = [], int $status = Status::HTTP_200_OK): self
	{
		return new self($body, $status, $headers);
	}
}
