<?php 

use App\DeadFishLanguage;
use PHPUnit\Framework\TestCase;

class DeadFishLanguageTest extends TestCase{

    public function testSampleTests() {
        $language = new DeadFishLanguage;
        $this->assertSame([ 8, 64 ], $language->parse("iiisdoso"));
        $this->assertSame([ 8, 64 ], $language->parse("iiisxxxdoso"));
        $this->assertSame([ 8, 64, 3600 ], $language->parse("iiisdosodddddiso"));
    }
}

// Create a parser to interpret and execute the Deadfish language.

// Deadfish operates on a single value in memory, which is initially set to 0.

// It uses four single-character commands:

// i: Increment the value
// d: Decrement the value
// s: Square the value
// o: Output the value to a result array
// All other instructions are no-ops and have no effect.

// Examples
// Program "iiisdoso" should return numbers [8, 64].
// Program "iiisdosodddddiso" should return numbers [8, 64, 3600].

?>