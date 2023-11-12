<?php 
function ucgen($value){
    for($i=0; $i<=$value; $i++){
        $sonuc = 0;
        while($sonuc<$i){
            echo "0";
           $sonuc++;

        }
        echo "<br>";
    }
}

ucgen(15);
?>