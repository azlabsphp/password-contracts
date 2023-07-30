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

interface CanResetPassword
{
    /**
     * return the email, phone number or address for password reset link is sent.
     */
    public function getSubForPasswordResetLink(): ?string;

    /**
     * Return email, phone number or generic addres for otp password reset.
     */
    public function getSubForPasswordResetOtp(): ?string;

    /**
     * Change the password to the provided `$password` string.
     *
     * @return void
     */
    public function resetPassword(string $password);
}
