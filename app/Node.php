<?php 

namespace App;

class Node {

    public $data = null;
    public $next = null;

    public function __construct($data = null) {
        $this->data = $data;
        $this->next = null;
    }
}

?>