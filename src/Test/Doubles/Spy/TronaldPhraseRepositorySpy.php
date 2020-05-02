<?php
namespace LaSalle\maga\Test\Doubles\Spy;

use LaSalle\maga\Domain\TronaldDumpRepository;

final class TronaldPhraseRepositorySpy implements TronaldDumpRepository
{

    private $phrasesWasCalled = false;

    CONST PHRASES_LIST = [
        'Make American Great Again!',
        'Crooked Hillary Clintons foreign interventions unleashed ISIS in Syria, Iraq and Libya. She is reckless and dangerous!',
        'I hope people are looking at the disgraceful behavior of Hillary Clinton as exposed by WikiLeaks. She is unfit to run',
        'President Obama should have gone to Louisiana days ago, instead of golfing. Too little, too late!',
        "Even though Bernie Sanders has lost his energy and his strength, I don't believe that his supporters will let Crooked Hillary off the hook!",
        'As the days and weeks go by,  we see what a total mess our country (and world) is in - Crooked Hillary Clinton led Obama into bad decisions!',
        'Ted Cruz does not have the right \"temperment\" to be President. Look at the way he totally panicked in firing his director of comm. BAD!'
    ];

    public function phrases(): array
    {
        $this->phrasesWasCalled = true;
        return self::PHRASES_LIST;
    }

    public function phrasesWasCalled(): bool
    {
        return $this->phrasesWasCalled;
    }

    public function checkIfPhraseExistsInRepository(string $phraseToCheck): bool
    {
        return in_array($phraseToCheck, self::PHRASES_LIST);
    }
}