<?php

use Ghosty\Component\Bag\Bag;

require_once './vendor/autoload.php';

echo count((new Bag(['1', '2', '3'])));
