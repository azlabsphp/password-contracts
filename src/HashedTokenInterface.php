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

interface HashedTokenInterface
{
    /**
     * Returns the hashed string value.
     *
     * @return string
     */
    public function __toString();

    /**
     * returns the subject for which the hashed token is generated.
     */
    public function getSubject(): string;

    /**
     * Return the hashed token string value.
     */
    public function getToken(): string;

    /**
     * Checks if the hashed token has expired.
     */
    public function hasExpired(): bool;

    /**
     * returns the time at which the token has been created.
     */
    public function getCreatedAt(): \DateTimeInterface;
}
