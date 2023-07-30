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

/**
 * @psalm-template T
 */
interface QueryBuilder
{
    /**
     * Add a filter for the subject column.
     *
     * @param string|int $sub
     *
     * @return static
     */
    public function whereSub($sub);

    /**
     * Add a filter for the token column.
     *
     * @param string|int $token
     *
     * @return static
     */
    public function whereToken(string $token);

    /**
     * Generic where query method.
     *
     * @param string|array $column
     * @param mixed        $operator
     * @param mixed        $value
     *
     * @return static
     */
    public function where($column, $operator = null, $value = null);

    /**
     * Return an array of all values matching query.
     *
     * @return array<T>|array<HashedTokenInterface>
     */
    public function all(ConnectionInterface $connection = null);

    /**
     * Return an iterable of all values matching query.
     *
     * @return \Traversable<T>|Traversable<HashedTokenInterface>
     */
    public function cursor(ConnectionInterface $connection = null);

    /**
     * Returns the first element matching the constructed criteria.
     *
     * @return T|HashedTokenInterface
     */
    public function first(ConnectionInterface $connection = null);
}
