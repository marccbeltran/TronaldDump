<?php

namespace LaSalle\maga\Test;

use PHPUnit\Framework\TestCase;
use LaSalle\maga\Infrastructure\InMemoryTronaldPhraseRepository;
use LaSalle\maga\Test\Doubles\Dummy\TronaldPhraseDummy;

final class TronaldRepositoryTestWithStubs extends TestCase{


     /**
     * @test
     */

    public function testIfPhraseExistsInRepo(){

        $tronaldRepository = new InMemoryTronaldPhraseRepository();
        $this->assertTrue($tronaldRepository->checkIfPhraseExistsInRepository('Make American Great Again!'));
        $this->assertFalse($tronaldRepository->checkIfPhraseExistsInRepository('Lorem ipsum'));
    }

    /**
     * @test
     */

    public function testIfPhraseExistsInRepoPhrasesMethod(){

        $tronaldRepository = new InMemoryTronaldPhraseRepository();
        $this->assertContains('Make American Great Again!',$tronaldRepository->phrases());
        
    }

    

}