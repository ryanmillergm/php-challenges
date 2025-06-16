<?php 

use App\LinkedList;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase {

    public function testPrintListOutput()
    {
        $list = new LinkedList();
        $list->append(10);
        $list->append(20);
        $list->append(30);

        // Start output buffering
        ob_start();
        $list->printList();
        $output = ob_get_clean();

        $this->assertEquals("10 -> 20 -> 30 -> NULL\n", $output);
    }


    public function testAppendAndToArray() 
    {
        $list = new LinkedList();
        $list->append(10);
        $list->append(20);
        $list->append(30);
        
        $this->assertEquals([10,20,30], $list->toArray());
    }

    public function testEmptyList()
    {
        $list = new LinkedList();
        $this->assertEquals([], $list->toArray());
    }

    public function testSingleNode()
    {
        $list = new LinkedList();
        $list->append(99);
        $this->assertEquals([99], $list->toArray());
    }
}

?>