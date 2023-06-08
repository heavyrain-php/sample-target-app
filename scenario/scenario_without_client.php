<?php

/**
 * @license MIT
 */

declare(strict_types=1);

use Heavyrain\Contracts\ClientInterface;

return static function (ClientInterface $cl): void {
    $cl->get('/')
        ->assertHeaderHas('Content-Length', 27)
        ->assertBodyContains('Hello world.');

    $cl->postJson('/json', ['a' => 'is b'])
        ->assertIsJson();

    $cl->requestWithOptions(
        method: 'GET',
        path: '/users/{userId}',
        pathArgs: ['userId' => 1],
    );

    $cl->getJson('/posts/', ['postId' => 2]);
};
