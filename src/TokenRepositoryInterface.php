<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Passwords\Contracts;

interface TokenRepositoryInterface
{
    /**
     * Add a new token to the tokens collection.
     *
     * @return void
     */
    public function addToken(TokenInterface $token);

    /**
     * Returns the token for the subject instance.
     *
     * **Note** Returns null if the token does not exists
     */
    public function getToken(string $sub): ?HashedTokenInterface;

    /**
     * Checks if token exist in the tokens collection.
     */
    public function hasToken(string $sub, string $token): bool;

    /**
     * Remove a token from tokens the collection.
     */
    public function deleteToken(string $sub): bool;

    /**
     * Query hashed token from password reset token string
     * 
     * @param string $token
     * 
     * @return HashedTokenInterface|null 
     */
    public function getByToken(string $token): ?HashedTokenInterface;
}
