<?php 

require_once '../vendor/autoload.php';

use LaSalle\maga\Application\TronaldPhrase;
use LaSalle\maga\Infrastructure\InMemoryTronaldPhraseRepository;


$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
$template = $twig->loadTemplate('donald.twig');

$phrasepicker  = new TronaldPhrase(new InMemoryTronaldPhraseRepository());

echo $twig->render('donald.twig', ['phrase' => $phrasepicker()]);
