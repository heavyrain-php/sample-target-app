<?php

/**
 * @license MIT
 */

declare(strict_types=1);

use Heavyrain\Contracts\ClientInterface;

return static function (ClientInterface $cl): void {
    $client = new ScenarioClient($cl);

    $client->getIndex()
        ->assertHeaderHas('Content-Length', 27)
        ->assertBodyContains('Hello world.');

    $cl->waitSec(0.1);

    $client->postJson(['a' => 'is b'])
        ->assertJsonHasKey('hello');

    $client->getUsers(1);

    $client->getPosts(2);
};
