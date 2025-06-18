<?php 

namespace App;

class DanglingLinkedList {

    function loop_size(Node $node): int {
        $array_list = [];
        while (!in_array($node, $array_list, true)) {
            array_push($array_list, $node);
            $node = $node->getNext();
        }
        return count($array_list) - array_search($node, $array_list, true);
    }

    // public function loop_size($list)
    // {
    //     $slow = $list;
    //     $fast = $list;

    //     while ($fast !== null && $fast->getNext() !== null) {
    //         $slow = $slow->getNext();
    //         $fast = $fast->getNext()->getNext();

    //         if ($slow === $fast) {
    //             $count = 1;
    //             $current = $slow->getNext();
    //             while ($current !== $slow) {
    //                 $count++;
    //                 $current = $current->getNext();
    //             }
    //             return $count;
    //         }
    //     }
    // }
}
?>