<?php

namespace Rfc\Request;

interface RequestMethod
{
    public const HEAD    = 'HEAD';
    public const GET     = 'GET';
    public const POST    = 'POST';
    public const PUT     = 'PUT';
    public const PATCH   = 'PATCH';
    public const DELETE  = 'DELETE';
    public const PURGE   = 'PURGE';
    public const OPTIONS = 'OPTIONS';
    public const TRACE   = 'TRACE';
    public const CONNECT = 'CONNECT';

}
