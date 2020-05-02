<?php
namespace LaSalle\maga\Test\Doubles\Stub;


use LaSalle\maga\Domain\TronaldDumpRepository;

final class TronaldPhraseStubInvalid implements TronaldDumpRepository
{
    public function phrases(): array
    {
        return [];
    }

    public function checkIfPhraseExistsInRepository(string $phraseToCheck): bool
    {
        return false;
    }
}