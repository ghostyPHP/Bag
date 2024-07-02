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

    public function add(string $key, mixed $value): static
    {
        $this->items[$key] = $value;

        return $this;
    }

    public function replace(array $items): static
    {
        $this->items = $items;

        return $this;
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->items);
    }

    public function remove(string $key): static
    {
        unset($this->items[$key]);

        return $this;
    }

    public function count(): int
    {
        return count($this->items);
    }
}
