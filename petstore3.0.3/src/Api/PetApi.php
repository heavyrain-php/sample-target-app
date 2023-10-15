<?php declare(strict_types=1);

namespace OpenAPIServer\Api;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Factory\StreamFactory;

final class PetApi extends AbstractPetApi
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

    public function addPet(
        ServerRequestInterface $request,
        ResponseInterface $response,
    ): ResponseInterface {
        $body = $request->getParsedBody();
        $this->waitMillisec(10_000);

        return $this->respondJson($response, $body);
    }

    public function deletePet(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $petId
    ): ResponseInterface {
        $this->waitMillisec(20_000);

        return $response->withStatus(200, 'OK');
    }

    public function findPetsByStatus(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $this->waitMillisec(10_000);

        return $this->respondJson($response, [
            [
                'name' => 'a',
                'photoUrls' => 'https://example.com/example.jpg',
            ],
            [
                'name' => 'b',
                'photoUrls' => 'https://example.com/example.jpg',
            ],
            [
                'name' => 'c',
                'photoUrls' => 'https://example.com/example.jpg',
            ],
        ]);
    }

    public function findPetsByTags(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $this->waitMillisec(10_000);

        return $this->respondJson($response, [
            [
                'name' => 'a',
                'photoUrls' => 'https://example.com/example.jpg',
            ],
            [
                'name' => 'b',
                'photoUrls' => 'https://example.com/example.jpg',
            ],
            [
                'name' => 'c',
                'photoUrls' => 'https://example.com/example.jpg',
            ],
        ]);
    }

    public function getPetById(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $petId
    ): ResponseInterface {
        $this->waitMillisec(10_000);

        return $this->respondJson($response, [
            'name' => 'a',
            'photoUrls' => 'https://example.com/example.jpg',
        ]);
    }

    public function updatePet(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $body = $request->getParsedBody();
        $this->waitMillisec(10_000);

        return $this->respondJson($response, $body);
    }

    public function updatePetWithForm(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $petId
    ): ResponseInterface {
        $queryParams = $request->getQueryParams();
        $name = (key_exists('name', $queryParams)) ? $queryParams['name'] : null;
        $status = (key_exists('status', $queryParams)) ? $queryParams['status'] : null;
        $this->waitMillisec(10_000);

        return $this->respondJson($response, [
            'name' => 'a',
            'photoUrls' => 'https://example.com/example.jpg',
        ]);
    }

    public function uploadFile(
        ServerRequestInterface $request,
        ResponseInterface $response,
        int $petId
    ): ResponseInterface {
        $this->waitMillisec(1_000_000);

        return $this->respondJson($response, [
            'code' => 200,
            'type' => 'unknown',
            'message' => 'OK',
        ]);
    }
}
