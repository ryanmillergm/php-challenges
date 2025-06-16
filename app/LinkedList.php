<?php 

namespace App;

class LinkedList {

    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function append($data) {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
            return;
        }

        $current = $this->head;
        while ($current->next !== null) {
            $current = $current->next;
        }
        $current->next = $newNode;
    }

    // Traverse List
    public function printList() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "NULL\n";
    }

    public function toArray(): array {
        $array = [];
        $current = $this->head;

        while ($current !== null) {
            $array[] = $current->data;
            $current = $current->next;
        }

        return $array;
    }
}
?>