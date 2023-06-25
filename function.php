<? 
function AddTwoNumbersAndColor($num1,$num2,$color="blue"){
//echo "<div style='color:$color'>".$num1 +$num2."</div>";
return $num1+$num2;
}

function incValueRef(&$rum){
    $rum+=55;
}

function colorCaption($color){
    global $title;
    echo "<div style='color:$color'>".$title."</div>";
}


function getCounter(){
    static  $count=0;
    $count++;
    echo "<div>$count</div>";
}
