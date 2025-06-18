<?php 

namespace App;

class Node {

    public $data = null;
    public $next = null;

    public function __construct($data = null) {
        $this->data = $data;
        $this->next = null;
    }

    public static function createChain($dangling_length, $loop_length) {
        $nodes = [];

        for ($i = 0; $i < $dangling_length + $loop_length; $i++) {
            $nodes[] = new Node();
        }

        for ($i = 0; $i < count($nodes) - 1; $i++) {
            $nodes[$i]->next = $nodes[$i + 1];
        }

        $nodes[count($nodes) - 1]->next = $nodes[$dangling_length]; 

        return $nodes[0];
    }

    public function getNext(): ?Node {
        return $this->next;
    }
}

?>