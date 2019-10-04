<?php

$inputText = "one two two three go go go big small big how sample test text to do it default
returns string string is is in seconds since what is the end end \n";
echo "input text is :" . $inputText;
$tokenArray = explode(" ",$inputText);
$start = 0;
$end = 1;
$res = "";
$isSqeuent = false;
while($end < count($tokenArray)){
    if($tokenArray[$end]==$tokenArray[$start]){
        $end++;
        $isSqeuent = true;
    }else{
        if($isSqeuent){
            $res =  $res . $tokenArray[$start];
            for($i = $start+1; $i < $end; $i++){
                $res = $res . " " . $tokenArray[$i];
            }
            $res .= ",";
            $isSqeuent = false;
            $start = $end;
            $end++;
        }else{
            $start = $end;
            $end++;
        }
    }
}
if(!empty($res)){
    $res = substr($res,0,-1);

}
echo $res;
?>