<?php

/**
 * @license MIT
 */

declare(strict_types=1);

use Heavyrain\Contracts\ClientInterface;

return static function (ClientInterface $cl): void {
    $cl->get('/')
        ->assertHeaderHas('Content-Length', '27')
        ->assertBodyContains('Hello world.');

    $cl->postJson('/json', ['a' => 'is b'])
        ->assertIsJson();

    $cl->get('/undefinedpath')
        ->assertStatusCode(404);

    $cl->get('/users/1');

    $cl->get('/posts/?postId=2');
};
