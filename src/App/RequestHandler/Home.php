<?php

namespace VividLamp\PipeSkeleton\App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use VividLamp\PipeSkeleton\Helper\ApiResponse;

class Home
{
    public function index(ServerRequestInterface $request): ResponseInterface
    {
        return ApiResponse::success('this message is from home.');
    }
}