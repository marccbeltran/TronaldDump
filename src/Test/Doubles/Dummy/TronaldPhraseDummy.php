<?php
namespace LaSalle\maga\Test\Doubles\Dummy;

use LaSalle\maga\Domain\TronaldDumpRepository;

final class TronaldPhraseDummy implements TronaldDumpRepository{

    public function phrases(): array{
        
        return [
            'Make American Great Again!',
        ];
    }

    public function checkIfPhraseExistsInRepository(string $phraseToCheck): bool
    {
        return true;
    }
}