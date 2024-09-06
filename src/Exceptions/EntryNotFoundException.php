<?php

namespace Ghosty\Component\Bag\Exceptions;

class EntryNotFoundException extends \Exception
{
    public function __construct(string $key)
    {
        parent::__construct("Entry $key not found");
    }
}
