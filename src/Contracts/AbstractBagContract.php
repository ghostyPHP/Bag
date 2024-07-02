<?php

namespace Ghosty\Component\Bag\Contracts;

interface AbstractBagContract extends \Countable
{
    public function all(): array;

    public function get(string $key): mixed;

    public function add(string $key, mixed $value): static;

    public function replace(array $items): static;

    public function has(string $key): bool;

    public function remove(string $key): static;
}
