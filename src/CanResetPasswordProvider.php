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

interface CanResetPasswordProvider
{
    /**
     * Returns password reset identity instance or null if the subject is not found.
     */
    public function retrieveForPasswordReset(string $sub): ?CanResetPassword;
}
