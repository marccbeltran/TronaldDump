<?php

declare(strict_types=1);

namespace LaSalle\maga\Application;

use LaSalle\maga\Domain\TronaldDumpRepository;
use LaSalle\maga\Domain\Exceptions\PhraseNotFoundException;

final class TronaldPhrase
{

    private $phraseRepository;

    public function __construct(TronaldDumpRepository $phraseRepository)
    {
        $this->phraseRepository = $phraseRepository;
    }

    public function __invoke(): string
    {
        $phrase = $this->phraseRepository->phrases();

        if (empty($phrase)) {
            throw new PhraseNotFoundException();
        } else {
            return $phrase[array_rand($phrase)];
        }
    }
}
