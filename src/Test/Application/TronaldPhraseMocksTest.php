<?php

namespace LaSalle\maga\Test;

use PHPUnit\Framework\TestCase;
use LaSalle\maga\Application\TronaldPhrase;
use LaSalle\maga\Domain\TronaldDumpRepository;

final class TronaldPhraseTestWithMocks extends TestCase{
   
    /**
     * @test
     */

    public function shouldThrwonExceptionWhenArrayIsEmpty(){

        $this->expectException(\Exception::class);

        $tronaldRepository = $this->getMockBuilder(TronaldDumpRepository::class)
                            ->getMock();
        $tronaldRepository->expects($this->any())
                          ->method('phrases')
                          ->willReturn([]);

        $tronaldPhrase = new TronaldPhrase($tronaldRepository);
        $phrase = $tronaldPhrase();
    }

    /**
     * @test
     */


    public function shouldCreateNewPhraseWhenPhraseIsInArray(){

        $tronaldRepository = $this->getMockBuilder(TronaldDumpRepository::class)
                            ->getMock();
        $tronaldRepository->expects($this->any())
                            ->method('phrases')
                            ->willReturn(['phrase1','phrase2']);

        $tronaldPhrase = new TronaldPhrase($tronaldRepository);
        $phrase = $tronaldPhrase();
        $this->assertTrue(in_array($phrase, $tronaldRepository->phrases()));
    }

}