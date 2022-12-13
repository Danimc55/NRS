<?php
    function prvaNaloga($x) {
        if($x == 1){
            return 1;
        }else{
            return $x + prvaNaloga($x-1);
        }
    }

    echo prvaNaloga(10);

    function fibonnaci($x){
        if($x == 1 || $x == 2){
            return 1;
        }else{
            return fibonnaci($x - 1) + fibonnaci($x - 2);
        }
    }

    echo fibonnaci(9);

    $x = "dowiandwa";

    function aliJePalindrom($s) {
        if($s[0] != $s[-1]){
            return false;
        }
        if($s[0] == $s[-1] && strlen($s) == 1 || strlen($s) == 2){
            return true;
        }else{
            return aliJePalindrom(substr($s, 1, -1));
        }
    }

    echo aliJePalindrom("avto");

    function prvi10Vec($x, $i){
        if($i==11){
            return;
        }else{
            echo $x * $i;
            echo '<br>';
            return prvi10Vec($x, $i+=1);
        }
    }

    prvi10Vec(10, 1);

    echo "<br>";

    function triKot($x, $s, $ss){
        if(strlen($ss) == $x+1){
            return;
        }else{
            echo $s . $ss;
            $ss .= "*";
            echo '<br>';
            return triKot($x,$s,$ss); 
        }
    }

    triKot(5, 'avto', '');


?>
