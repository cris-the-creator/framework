<?php

declare(strict_types=1);

namespace zzt\globals\router;

use zzt\Core\Router;

/**
 * Request types
 */
enum Type: string
{
  case GET = 'GET';
  case POST = 'POST';
  case DELETE = 'DELETE';
  case PUT = 'PUT';
  case PATCH = 'PATCH';
}

/**
 * Register new route.
 *
 * @param Type $type  Request Type
 * @param string $route  Route identifier
 * @param string $callback  Callback to route handler
 * @param string $function  Explicit function for controllers (optional) 
 * @return void
 */
function register(Type $type, string $route, string $callback, string $function = ''): void
{
  Router::getInstance()->add($type, $route, $callback, $function);
}
