<?php

namespace Phpolar\HttpCodes;

final class ResponseCode
{
    // INFORMATIONAL

    /**
     * The serve has received the request and is expecting the client to send the request body.
     */
    public const CONTINUE = 100;

    /**
     * The requester has asked the server to switch protocols and the server has agreed to do so.
     */
    public const SWITCHING_PROTOCOLS = 101;

    /**
     * Server has receivd WebDAV request and is processing it.
     */
    public const PROCESSING = 102;

    /**
     * Return some headers before final HTTP message.
     */
    public const EARLY_HINTS = 103;

    // SUCCESS

    /**
     * HTTP request successful.
     */
    public const OK = 200;

    /**
     * Resource created.
     */
    public const CREATED = 201;

    /**
     * Request accepted for processing.
     */
    public const ACCEPTED = 202;

    /**
     * Non-Authoritative Information. Original response modified by proxy server.
     */
    public const NON_AUTH = 203;

    /**
     * Request successful but no content to return.
     */
    public const NO_CONTENT = 204;

    /**
     * Request processed successfully. No content to return. Client must reset its document view.
     */
    public const RESET_CONTENT = 205;

    /**
     * Partial response due to range header sent by the client.
     *
     * The range header is used by clients to enable resuming of interrupted downloads,
     * or split a download into multiple simulatneous streams.
     */
    public const PARTIAL_CONTENT = 206;

    public const MULTI_STATUS = 207;

    public const ALREADY_REPORTED = 208;

    public const IM_USED = 226;

    // REDIRECTIONS

    public const MULTIPLE_CHOICES = 300;

    public const MOVED = 301;

    public const MOVED_PERMANENTLY = 301;

    public const FOUND = 302;

    public const SEE_OTHER = 303;

    public const NOT_MODIFIED = 304;

    public const USE_PROXY = 305;

    public const SWITCH_PROXY = 306;

    public const TEMPORARY_REDIRECT = 307;

    public const PERMANENT_REDIRECT = 308;

    // CLIENT ERRORS

    public const BAD_REQUEST = 400;

    /**
     * Authentication failed.
     */
    public const UNAUTHORIZED = 401;

    public const PAYMENT_REQUIRED = 402;

    /**
     * Request contains valid data but server refuses action.
     */
    public const FORBIDDEN = 403;

    public const NOT_FOUND = 404;

    public const METHOD_NOT_ALLLOWED = 405;

    public const NOT_ACCEPTABLE = 406;

    public const PROXY_AUTHENTICATION_REQUIRED = 407;

    public const REQUEST_TIMEOUT = 408;

    public const CONFLICT = 409;

    public const GONE = 410;

    public const LENGTH_REQUIRED = 411;

    public const PRECONDITION_FAILED = 412;

    public const PAYLOAD_TOO_LARGE = 413;

    public const URI_TOO_LONG = 414;

    public const UNSUPPORTED_MEDIA_TYPE = 415;

    public const RANGE_NOT_SATISFIABLE = 416;

    public const EXPECTATION_FAILED = 417;

    public const IM_A_TEAPOT = 418;

    public const MISDIRECTED_REQUEST = 421;

    public const UNPROCESSABLE_ENTITY = 422;

    public const LOCKED = 423;

    public const FAILED_DEPENDENCY = 424;

    public const TOO_EARLY = 425;

    public const UPGRADE_REQUIRED = 426;

    public const PRECONDITION_REQUIRED = 428;

    public const TOO_MANY_REQUESTS = 429;

    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    // SERVER ERRORS

    public const INTERNAL_SERVER_ERROR = 500;

    public const NOT_IMPLEMENTED = 501;

    public const BAD_GATEWAY = 502;

    public const SERVICE_UNAVAILABLE = 503;

    public const GATEWAY_TIMEOUT = 504;

    public const HTTP_VERSION_NOT_SUPPORTED = 505;

    public const VARIANT_ALSO_NEGOTIATES = 506;

    public const INSUFFICIENT_STORAGE = 507;

    public const LOOP_DETECTED = 508;

    public const NOT_EXTENDED = 510;

    public const NETWORK_AUTHENTICATION_REQUIRED = 511;

    // UNOFFICIAL

    public const CHECKPOINT = 103;

    public const THIS_IS_FINE = 218;

    public const PAGE_EXPIRED = 419;

    public const METHOD_FAILURE = 420;

    public const ENHANCE_YOUR_CALM = 420;

    public const SHOPIFY_REQUEST_HEADER_FIELDS_TOO_LARGE = 430;

    public const BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    public const INVALID_TOKEN = 498;

    public const TOKEN_REQUIRED = 499;
}
