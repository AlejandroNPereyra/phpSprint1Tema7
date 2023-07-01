<?php

/* - Exercici 2

Practiquem una mica de TDD. 
Recorda l’exercici 5 del nivell de PHP Bàsics i pensa tests que podries realitzar 
per provar el seu correcte funcionament. 
Programa’ls i després ves realitzant el programa a testejar pas a pas 
segons valides els tests prèviament creats. */

namespace Sprint1Tema7\Sprint1Tema7Nivell1;

use PHPUnit\Framework\TestCase;

require_once 'classifyGrade.php';

class classifyGradeTest extends TestCase {

    public function GradeTesting () {

        $this->assertEquals("First Class Grade", classifyGrade(70));
        $this->assertEquals("Second Class Grade", classifyGrade(50));
        $this->assertEquals("Third Class Grade", classifyGrade(40)); 
        $this->assertEquals("Must repeat grades", classifyGrade(10));

    }

}

?>