<?php

namespace LaSalle\maga\Test;

use PHPUnit\Framework\TestCase;
use LaSalle\maga\Application\TronaldPhrase;
use LaSalle\maga\Test\Doubles\Dummy\TronaldPhraseDummy;
use LaSalle\maga\Test\Doubles\Stub\TronaldPhraseStubValid;
use LaSalle\maga\Test\Doubles\Stub\TronaldPhraseStubinValid;





final class TronaldPhraseTestWithStubs extends TestCase{

    /**
     * @test
     */

    public function shouldCreateNewPhraseWhenPhraseIsInArray(){

        $tronaldPhraseRepository = new TronaldPhraseStubValid();
        $phrasePicked = new TronaldPhrase($tronaldPhraseRepository);
        $phrase = $phrasePicked();
        $this->assertTrue(in_array($phrase, $tronaldPhraseRepository->phrases()));
    }

    /**
     * @test
     */

    
    public function shouldCreateNewPhraseWhenPhraseIsInRepository(){

        $tronaldPhraseRepository = new TronaldPhraseDummy();
        $phrasePicked = new TronaldPhrase($tronaldPhraseRepository);
        $phrase = $phrasePicked();
        $this->assertTrue(in_array($phrase, $tronaldPhraseRepository->phrases()));
    }

    /**
     * @test
     */


    public function shouldThrwonExceptionWhenArrayIsEmpty(){

        $this->expectException(\Exception::class);        
        $tronaldPhraseRepository = new TronaldPhraseStubinvalid();
        $phrasePicked = new TronaldPhrase($tronaldPhraseRepository);
        $phrase = $phrasePicked();
    }

    
}