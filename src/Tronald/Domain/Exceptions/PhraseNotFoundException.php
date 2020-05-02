<?php

declare(strict_types=1);

namespace LaSalle\maga\Domain\Exceptions;

use RuntimeException;

final class PhraseNotFoundException extends RuntimeException
{
    protected $message = "Any phrase was found :(";
}
