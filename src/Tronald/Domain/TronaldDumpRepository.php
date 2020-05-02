<?php

declare(strict_types=1);

namespace LaSalle\maga\Domain;

interface TronaldDumpRepository{
    
    public function phrases(): array;
    public function checkIfPhraseExistsInRepository(string $phraseToCheck): bool;
}
