<?php
class Primes {

    public function print() {
        $a_arr= $this->setGroup(3); 
        $b_arr = $this->setGroup(2);
        $c_arr = $this->setGroup(4); 
        

        $a_count = count($a_arr);
        $b_count = count($b_arr);
        $c_count = count($c_arr);
        $row = 1;
        //for($c = 0; $c < $c_count;  $c++) echo $c_arr[$c] . " | "; 
        for($a = 0; $a < $a_count;  $a++) {
            for($b = 0; $b < $b_count;  $b++) {
                for($c = 0; $c < $c_count;  $c++) {
                    $ssn_val = $a_arr[$a] . $b_arr[$b] . $c_arr[$c];
                    
                    if($this->testNum(intval($ssn_val))) {
                        //echo "SSN Prime Number $row: $ssn_val\n";
                        echo "Prime SSN Number $row: " . $a_arr[$a] . "-" . $b_arr[$b] . "-" . $c_arr[$c] . "\n";
                        $row++;
                        sleep(2);                        
                    }

                }            
            }            
        }
    }

    private function setGroup($num_chars) {
        $boundary = intval(str_pad(9, $num_chars, 9, STR_PAD_LEFT)); 
        $numbers = array(); 
        $x = 0;
        for($i = 1; $i < $boundary; $i++) {
            if($this->testNum($i)) {
                $numbers[$x] = str_pad($i, $num_chars, 0, STR_PAD_LEFT ); 
                $x++;
            } else continue;
        }
        return $numbers;
         
    }    

    private function testNum($num) {
        for($j=2; $j < $num; $j++) {
            if(($num % $j) === 0) return false;
            else continue;
        }
        return true;
    }
    
}

$ssn = new Primes();
$ssn->print();