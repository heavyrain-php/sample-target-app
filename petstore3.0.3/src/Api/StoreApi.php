<?php declare(strict_types=1);

namespace OpenAPIServer\Api;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Factory\StreamFactory;

final class StoreApi extends AbstractStoreApi
{
    private function waitMillisec(int $milliSec, int $blur = 5_000): void
    {
        \usleep(\mt_rand(max($milliSec - $blur, 1_000), min($milliSec + $blur, 100_000)));
    }

    private function respondJson(ResponseInterface $response, array $data): ResponseInterface
    {
        return $response->withBody((new StreamFactory())->createStream(json_encode($data)))
            ->withHeader('content-type', 'application/json')
            ->withHeader('content-length', \strlen(json_encode($data)));
    }

    public function deleteOrder(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $orderId
    ): ResponseInterface {
        $this->waitMillisec(100_000);
        return $this->respondJson($response, [
            'id' => 10,
            'petId' => 198772,
            'quantity' => 1,
            'shipData' => '2021-09-01T00:00:00+09:00',
            'status' => 'placed',
            'complete' => false,
        ]);
    }

    public function getInventory(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $this->waitMillisec(10_000);

        return $this->respondJson($response, [
            'pending' => 10,
            'available' => 198,
            'sold' => 1,
        ]);
    }

    public function getOrderById(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $orderId
    ): ResponseInterface {
        $this->waitMillisec(20_000);
        return $this->respondJson($response, [
            'id' => 10,
            'petId' => 198772,
            'quantity' => 1,
            'shipData' => '2021-09-01T00:00:00+09:00',
            'status' => 'placed',
            'complete' => false,
        ]);
    }

    public function placeOrder(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $body = $request->getParsedBody();
        $this->waitMillisec(200_000);

        return $this->respondJson($response, $body);
    }
}
