<?php

declare(strict_types=1);

namespace OpenAPIServer\Auth;

use Psr\Http\Message\ServerRequestInterface;
use Dyorg\TokenAuthentication\TokenSearch;
use Dyorg\TokenAuthentication\Exceptions\UnauthorizedExceptionInterface;
use OpenAPIServer\Model\User;

class Authenticator extends AbstractAuthenticator
{
    /**
     * @var string[]|null List of required scopes
     */
    protected $requiredScope;

    protected function getUserByToken(string $token)
    {
        \usleep(10_000); // 10ms
        return User::createFromData([
            'id' => 10,
            'username' => 'theUser',
            'firstName' => 'John',
            'lastName' => 'James',
            'email' => 'john@email.com',
            'password' => '12345',
            'phone' => '12345',
            'userStatus' => 1,
        ]);
    }

    /**
     * Authenticator constructor
     *
     * @param string[]|null $requiredScope List of required scopes
     */
    public function __construct($requiredScope = null)
    {
        $this->requiredScope = $requiredScope;
    }

    /**
     * Makes the api key validation of your application
     *
     * Just an example of implementation. Override this method to fit your needs
     *
     * @param ServerRequestInterface $request     HTTP request
     * @param TokenSearch            $tokenSearch Middleware instance which contains api key in token
     *
     * @return bool Must return either true or false
     * @throws UnauthorizedExceptionInterface when cannot parse token
     */
    public function __invoke(ServerRequestInterface &$request, TokenSearch $tokenSearch)
    {
        /**
         * Try find authorization token via header, parameters, cookie or attribute
         * If token not found, return response with status 401 (unauthorized)
         */
        $token = $tokenSearch->getToken($request);

        /**
         * Verify if token is valid on database
         * If token isn't valid, expired or has insufficient scope must throw an UnauthorizedExceptionInterface
         */
        $user = $this->getUserByToken($token);

        /**
         * Set authenticated user at attributes
         */
        $request = $request->withAttribute('authenticated_user', $user);

        return true;
    }
}
