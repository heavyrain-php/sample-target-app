<?php

/**
 * @license MIT
 */

declare(strict_types=1);

use Heavyrain\Contracts\AssertableResponseInterface;
use Heavyrain\Contracts\ClientInterface;

final class ScenarioClient
{
    public function __construct(public readonly ClientInterface $inst)
    {
    }

    /**
     * GET /
     *
     * @return AssertableResponseInterface
     */
    public function getIndex(): AssertableResponseInterface
    {
        return $this->inst->get('/');
    }

    /**
     * POST /json
     *
     * @param array{a: string} $body
     * @return AssertableResponseInterface
     */
    public function postJson(array $body): AssertableResponseInterface
    {
        return $this->inst->postJson(
            path: '/json',
            body: $body,
        );
    }

    /**
     * GET /users/{userId}
     *
     * @param integer $userId
     * @return AssertableResponseInterface
     */
    public function getUsers(int $userId): AssertableResponseInterface
    {
        return $this->inst->getJson(
            path: '/users/' . $userId,
        );
    }

    /**
     * GET /posts/?postId=
     *
     * @param integer $postId
     * @return AssertableResponseInterface
     */
    public function getPosts(int $postId): AssertableResponseInterface
    {
        return $this->inst->getJson(
            path: '/posts/',
            query: \compact('postId'),
        );
    }
}
