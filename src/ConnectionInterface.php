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

use Closure;

interface ConnectionInterface
{
    /**
     * Select a value matching the conditions variables.
     *
     * @param string|int|\Closure(QueryBuilder $builder): QueryBuilder $query
     *
     * @return mixed
     */
    public function select($query);

    /**
     * Update value matching the `$conditions` with the `$values` parameter.
     *
     * @param int|string $sub
     *
     * @return int|void
     */
    public function update($sub, array $values = []);

    /**
     * Delete/Remove values matching the provided condition.
     *
     * @return bool
     */
    public function delete($sub);

    /**
     * Add a value with the `$value` attributes.
     *
     * @return void
     */
    public function create(array $values);

    /**
     * Exceute a statement in a transaction.
     *
     * @param mixed $args
     *
     * @return mixed
     */
    public function transaction(callable $callback, ...$args);
}
