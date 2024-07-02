<?php

namespace Ghosty\Component\Bag;

use Ghosty\Component\Bag\Contracts\AbstractBagContract;

abstract class AbstractBag implements AbstractBagContract
{
    protected array $items;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function all(): array
    {
        return $this->items;
    }

    public function get(string $key): mixed
    {
        return $this->items[$key];
    }

    public function add(string $key, mixed $value): void
    {
        $this->items[$key] = $value;
    }

    public function replace(array $items): void
    {
        $this->items = $items;
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->items);
    }

    public function remove(string $key): void
    {
        unset($this->items[$key]);
    }
}
