<?php

declare(strict_types=1);

namespace zzt\Http;

/**
 * Http Request.
 *
 * @author Cristian Cornea <contact@corneascorner.dev>
 */
readonly class Request
{
	/**
	* @param string $uri
	* @param string $host
	* @param array<string, string> $headers
	* @param string $body
	* @param array<string, string> $params
	* @param string $method
	*/
	private function __construct(
		public string $uri = '',
		public string $host = '',
		public array $headers = [],
		public string $body = '',
		public array $params = [],
		public string $method = '',
	) {
	}

	/** @return Request */
	public static function fromGlobals(): self
	{
		$uri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
		$host = $_SERVER['HTTP_HOST'];
		$method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'get');

		$params = array_merge($_GET, $_POST);
		$body = '';
		$headers = [];

		return new self($uri, $host, $headers, $body, $params, $method);
	}
}
