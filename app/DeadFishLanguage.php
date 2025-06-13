<?php 

namespace App;

class DeadFishLanguage {

    public function parse($data) {
        $result = [];
        $memory = 0;

        $commands = str_split($data);

        foreach ($commands as $command) {
            switch ($command) {
                case "i":
                    ++$memory;
                    break;
                case "d":
                    --$memory;
                    break;
                case "s":
                    $memory *= $memory;
                    break;
                case "o":
                    array_push($result, $memory);
                    break;
                default:
                    break;
            }
        }
        return $result;
    }


    // function parse($data) {
    //     $commands = str_split($data);
    //     $result = [];
    //     $counter = 0;
        
    //     foreach($commands as $command) {
    //         switch($command) {
    //         case 'i': $counter++; break;
    //         case 'd': $counter--; break;
    //         case 's': $counter = pow($counter, 2); break;
    //         case 'o': $result[] = $counter;
    //         } 
    //     }
        
    //     return $result;
    // }

    
}

?>