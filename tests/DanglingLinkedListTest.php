<?php 

use App\Node;
use App\DanglingLinkedList;
use PHPUnit\Framework\TestCase;

class DanglingLinkedListTest extends TestCase {

    public function testFixed() {
    $dangling_linked_list = new DanglingLinkedList;
    $this->assertSame(1, $dangling_linked_list->loop_size(Node::createChain(0, 1)));
    $this->assertSame(23, $dangling_linked_list->loop_size(Node::createChain(8778, 23)));
    $this->assertSame(8778, $dangling_linked_list->loop_size(Node::createChain(23, 8778)));
  } 
}

// You are given a node that is the beginning of a linked list. This list contains a dangling piece and a loop. Your objective is to determine the length of the loop.

// For example in the following picture the size of the dangling piece is 3 and the loop size is 12:


// # Use the `next' method to get the following node.
// node.next
// Use the Node::getNext() instance method to get the following node.

// $node->getNext();
// Notes:

// do NOT mutate the nodes!
// in some cases there may be only a loop, with no dangling piece
?>