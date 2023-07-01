<?php

/*- Exercici 1
Donada la classe NumberChecker programa els tests unitaris que facin falta 
per certificar que el codi font de la classe fa el que ha de fer.*/

namespace Sprint1Tema7\Sprint1Tema7Nivell1;

use PHPUnit\Framework\TestCase;

require_once 'NumberChecker.php';

class NumberCheckerTest extends TestCase {
    
    public function testIsEven () {

        $this->assertTrue(isEven(10));
        $this->assertFalse(isEven(5));
        $this->assertTrue(isEven(-10));
        $this->assertFalse(isEven(-5));

    }

    public function testIsPositive () {

        $this->assertTrue(isPositive(10));
        $this->assertFalse(isPositive(-10));

    }

}

?>