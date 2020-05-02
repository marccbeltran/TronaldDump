<?php

namespace LaSalle\maga\Test;

use LaSalle\maga\Application\TronaldPhrase;
use LaSalle\maga\Test\Doubles\Spy\TronaldPhraseRepositorySpy;
use PHPUnit\Framework\TestCase;

    
final class TronaldPhraseTestWithSpy extends TestCase{

    /**
     * @test
     */

    public function testPhraseMethodIsCalled(){

    	$tronaldRepository = new TronaldPhraseRepositorySpy();
    	$phrasePicked = new TronaldPhrase($tronaldRepository);
        $phrasePicked();
    	$this->assertTrue($tronaldRepository->phrasesWasCalled());
    }

   

}