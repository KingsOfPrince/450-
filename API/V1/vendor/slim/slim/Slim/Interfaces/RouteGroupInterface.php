<?php

/**
 * Slim Framework (https://slimframework.com)
 *
 * @license https://github.com/slimphp/Slim/blob/4.x/LICENSE.md (MIT License)
 */

declare(strict_types=1);

namespace Slim\Interfaces;

use Psr\Http\Server\MiddlewareInterface;
use Slim\MiddlewareDispatcher;

interface RouteGroupInterface
{
    /**
     * @return RouteGroupInterface
     */
    public function collectRoutes(): RouteGroupInterface;

    /**
     * Add middleware to the route group
     *
     * @param MiddlewareInterface|string|callable $middleware
     * @return RouteGroupInterface
     */
    public function add($middleware): RouteGroupInterface;

    /**
     * Add middleware to the route group
     *
     * @param MiddlewareInterface $middleware
     * @return RouteGroupInterface
     */
    public function addMiddleware(MiddlewareInterface $middleware): RouteGroupInterface;

    /**
     * Append the group's middleware to the MiddlewareDispatcher
     *
     * @param MiddlewareDispatcher $dispatcher
     * @return RouteGroupInterface
     */
    public function appendMiddlewareToDispatcher(MiddlewareDispatcher $dispatcher): RouteGroupInterface;

    /**
     * Get the RouteGroup's pattern
     *
     * @return string
     */
    public function getPattern(): string;
}
