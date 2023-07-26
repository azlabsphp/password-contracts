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

interface TokenInterface
{
    /**
     * Returns the identity subject for whom or which token is generated.
     *
     * @return mixed
     */
    public function getSubject();

    /**
     * Returns the token string value.
     */
    public function getToken(): string;

    /**
     * Returns the date time at which the token was created.
     */
    public function getCreatedAt(): \DateTimeInterface;
}
