<?php
namespace Codwelt\HelpersMan\Tests;
use Codwelt\HelpersMan\HelpersMan;
use Codwelt\HelpersMan\Str;

/**
 * Class BasicTest
 * @package Codwelt\HelpersMan\Tests
 * @author Juan Diaz - FuriosoJack <iam@furiosojack.com>
 */
class BasicTest extends TestCase
{


    /**
     * Test para el conteo de palabras
     * @throws \Exception
     */
    public function testWordsCount()
    {
        $text = "este es un un texto de prueba";
        $countWords = HelpersMan::count_words_repeated($text);

        $this->assertTrue($countWords['un'] == 2);
    }

    public function test_numero_a_letra()
    {
        $numero = "400000";
        $resutlado = Str::numberToLetter($numero);
        $numeroEnLentras = "CUATROCIENTOS MIL";
        $this->assertEquals($numeroEnLentras,$resutlado);
    }

}