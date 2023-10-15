<?php declare(strict_types=1);

namespace OpenAPIServer\Api;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Factory\StreamFactory;

final class UserApi extends AbstractUserApi
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

    public function createUser(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $body = $request->getParsedBody();
        $this->waitMillisec(20_000);
        return $this->respondJson($response, $body);
    }

    public function createUsersWithListInput(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $body = $request->getParsedBody();
        $this->waitMillisec(20_000 * count($body));
        return $this->respondJson($response, $body[0]);
    }

    public function deleteUser(
        ServerRequestInterface $request,
        ResponseInterface $response,
        string $username
    ): ResponseInterface {
        $this->waitMillisec(30_000);
        return $this->respondJson($response, []);
    }

    public function getUserByName(
        ServerRequestInterface $request,
        ResponseInterface $response,
        string $username
    ): ResponseInterface {
        $this->waitMillisec(10_000);

        return $this->respondJson($response, [
            'id' => 10,
            'username' => $username,
            'firstName' => 'Taro',
            'lastName' => 'Yamada',
            'email' => 'john@email.com',
            'password' => 'password',
            'phone' => '090-1234-5678',
            'userStatus' => 1,
        ]);
    }

    public function loginUser(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $queryParams = $request->getQueryParams();
        $username = (key_exists('username', $queryParams)) ? $queryParams['username'] : null;
        $password = (key_exists('password', $queryParams)) ? $queryParams['password'] : null;
        $this->waitMillisec(100_000);

        return $this->respondJson($response, ['hello']);
    }

    public function logoutUser(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $this->waitMillisec(5_000);
        return $this->respondJson($response, []);
    }

    public function updateUser(
        ServerRequestInterface $request,
        ResponseInterface $response,
        string $username
    ): ResponseInterface {
        $this->waitMillisec(20_000);
        return $this->respondJson($response, []);
    }
}
