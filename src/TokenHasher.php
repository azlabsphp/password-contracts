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

interface TokenHasher
{
    /**
     * Generates a hash string from the token instance.
     */
    public function make(TokenInterface $token): HashedTokenInterface;

    /**
     * Match token against a hashed value of the token.
     *
     * @param TokenInterface $token
     */
    public function check(HashedTokenInterface $token, string $value): bool;
}
