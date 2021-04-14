<?php
$s = readline();
$length=strlen($s);
$s_line=str_split($s);

for($i=0;$i<$length;$i++){
    if($s_line[$i]=="a"||$s_line[$i]=="e"||$s_line[$i]=="i"||$s_line[$i]=="o"||$s_line[$i]=="u"||$s_line[$i]=="y"||
        $s_line[$i]=="A"||$s_line[$i]=="E"||$s_line[$i]=="I"||$s_line[$i]=="O"||$s_line[$i]=="U"||$s_line[$i]=="Y"){
        unset($s_line[$i]);
    }
    else{
        if(ord($s_line[$i])>=65 && ord($s_line[$i])<=90){
            $ascii=ord($s_line[$i]);
            $n=$ascii+32;
            echo ".";
            echo chr($n);
        }
        else{
            echo ".";
            echo $s_line[$i];
        }

    }
}
