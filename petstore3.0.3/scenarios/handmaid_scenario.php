<?php

/**
 * @license MIT
 */

declare(strict_types=1);

use Heavyrain\Contracts\ClientInterface;

return static function (ClientInterface $cl): void {
    $cl->getJson('/api/v3/store/inventory')
        ->assertOk()
        ->assertIsJson();
};
