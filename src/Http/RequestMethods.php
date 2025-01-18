<?php

namespace Rfc\Request\Http;

interface RequestMethods
{
    public const HEAD = ['HEAD'];
    public const GET = ['GET'];
    public const POST = ['POST'];
    public const PUT = ['PUT'];
    public const PATCH = ['PATCH'];
    public const DELETE = ['DELETE'];
    public const PURGE = ['PURGE'];
    public const OPTIONS = ['OPTIONS'];
    public const TRACE = ['TRACE'];
    public const CONNECT = ['CONNECT'];

}
