<?php 

namespace App;

class DanglingLinkedList {



    public function loop_size($list)
    {
    $slow = $list;
    $fast = $list;

    while ($fast !== null && $fast->getNext() !== null) {
        $slow = $slow->getNext();
        $fast = $fast->getNext()->getNext();

        if ($slow === $fast) {
            $count = 1;
            $current = $slow->getNext();
            while ($current !== $slow) {
                $count++;
                $current = $current->getNext();
            }
            return $count;
        }
    }
    }
}
?>