<?php

declare(strict_types=1);

namespace zzt\Http;

/**
* Http status codes.
*/
interface Status
{
	public const HTTP_100_CONTINUE = 100;
	public const HTTP_101_SWITCHING_PROTOCOLS = 101;
	public const HTTP_102_PROCESSING = 102;
	public const HTTP_103_EARLY_HINTS = 103;
	public const HTTP_200_OK = 200;
	public const HTTP_201_CREATED = 201;
	public const HTTP_202_ACCEPTED = 202;
	public const HTTP_203_NON_AUTHORITATIVE_INFORMATION = 203;
	public const HTTP_204_NO_CONTENT = 204;
	public const HTTP_205_RESET_CONTENT = 205;
	public const HTTP_206_PARTIAL_CONTENT = 206;
	public const HTTP_207_MULTI_STATUS = 207;          // RFC4918
	public const HTTP_208_ALREADY_REPORTED = 208;      // RFC5842
	public const HTTP_226_IM_USED = 226;

	public const HTTP_300_MULTIPLE_CHOICES = 300;
	public const HTTP_301_MOVED_PERMANENTLY = 301;
	public const HTTP_302_FOUND = 302;
	public const HTTP_303_SEE_OTHER = 303;
	public const HTTP_304_NOT_MODIFIED = 304;
	public const HTTP_305_USE_PROXY = 305;
	public const HTTP_306_RESERVED = 306;
	public const HTTP_307_TEMPORARY_REDIRECT = 307;
	public const HTTP_308_PERMANENTLY_REDIRECT = 308;  // RFC7238

	public const HTTP_400_BAD_REQUEST = 400;
	public const HTTP_401_UNAUTHORIZED = 401;
	public const HTTP_402_PAYMENT_REQUIRED = 402;
	public const HTTP_403_FORBIDDEN = 403;
	public const HTTP_404_NOT_FOUND = 404;
	public const HTTP_405_METHOD_NOT_ALLOWED = 405;
	public const HTTP_406_NOT_ACCEPTABLE = 406;
	public const HTTP_407_PROXY_AUTHENTICATION_REQUIRED = 407;
	public const HTTP_408_REQUEST_TIMEOUT = 408;
	public const HTTP_409_CONFLICT = 409;
	public const HTTP_410_GONE = 410;
	public const HTTP_411_LENGTH_REQUIRED = 411;
	public const HTTP_412_PRECONDITION_FAILED = 412;
	public const HTTP_413_REQUEST_ENTITY_TOO_LARGE = 413;
	public const HTTP_414_REQUEST_URI_TOO_LONG = 414;
	public const HTTP_415_UNSUPPORTED_MEDIA_TYPE = 415;
	public const HTTP_416_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
	public const HTTP_417_EXPECTATION_FAILED = 417;
	public const HTTP_421_MISDIRECTED_REQUEST = 421;                                         // RFC7540
	public const HTTP_422_UNPROCESSABLE_ENTITY = 422;                                        // RFC4918
	public const HTTP_423_LOCKED = 423;                                                      // RFC4918
	public const HTTP_424_FAILED_DEPENDENCY = 424;                                           // RFC4918
	public const HTTP_425_TOO_EARLY = 425;                                                   // RFC-ietf-httpbis-replay-04
	public const HTTP_426_UPGRADE_REQUIRED = 426;                                            // RFC2817
	public const HTTP_428_PRECONDITION_REQUIRED = 428;                                       // RFC6585
	public const HTTP_429_TOO_MANY_REQUESTS = 429;                                           // RFC6585
	public const HTTP_431_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;                             // RFC6585
	public const HTTP_451_UNAVAILABLE_FOR_LEGAL_REASONS = 451;                               // RFC7725

	public const HTTP_500_INTERNAL_SERVER_ERROR = 500;
	public const HTTP_501_NOT_IMPLEMENTED = 501;
	public const HTTP_502_BAD_GATEWAY = 502;
	public const HTTP_503_SERVICE_UNAVAILABLE = 503;
	public const HTTP_504_GATEWAY_TIMEOUT = 504;
	public const HTTP_505_VERSION_NOT_SUPPORTED = 505;
	public const HTTP_506_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;                        // RFC2295
	public const HTTP_507_INSUFFICIENT_STORAGE = 507;                                        // RFC4918
	public const HTTP_508_LOOP_DETECTED = 508;                                               // RFC5842
	public const HTTP_510_NOT_EXTENDED = 510;                                                // RFC2774
	public const HTTP_511_NETWORK_AUTHENTICATION_REQUIRED = 511;                             // RFC6585

}
