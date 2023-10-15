<?php

/**
 * @license MIT
 */

declare(strict_types=1);

use Heavyrain\Contracts\AssertableResponseInterface;
use Heavyrain\Contracts\ClientInterface;

final class ScenarioClient
{
    public function __construct(private readonly ClientInterface $cl)
    {
    }

    /**
     * GET /
     *
     * @return AssertableResponseInterface
     */
    public function getIndex(): AssertableResponseInterface
    {
        return $this->cl->get('/');
    }

    /**
     * POST /json
     *
     * @param array{a: string} $body
     * @return AssertableResponseInterface
     */
    public function postJson(array $body): AssertableResponseInterface
    {
        return $this->cl->postJson(
            path: '/json',
            body: $body,
        );
    }

    /**
     * GET /users/{userId}
     *
     * @param int $userId
     * @return AssertableResponseInterface
     */
    public function getUsers(int $userId): AssertableResponseInterface
    {
        return $this->cl->requestWithOptions(
            method: 'GET',
            path: '/users/{userId}',
            pathArgs: ['userId' => $userId],
        );
    }

    /**
     * GET /posts/?postId=
     *
     * @param int $postId
     * @return AssertableResponseInterface
     */
    public function getPosts(int $postId): AssertableResponseInterface
    {
        return $this->cl->getJson(
            path: '/posts/',
            query: ['postId' => $postId],
        );
    }
}
