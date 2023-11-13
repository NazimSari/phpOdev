<?php 
echo "<pre>";
$planets = ["mercury", "venus", "earth","mars","jupiter","saturn","uranus","neptune","","", NULL];


$map_arr = array_map(function($e){ 
    global $planets;
    if($e == ""){
       return NULL;}
    else{
        return $e;}
    }, $planets);


$filter_arr = array_filter($map_arr, function($e){
    return $e != NULL ? $e : false;
});

function randomArr($i){
    global $filter_arr;
    $result = array_flip($filter_arr);
    return array_rand($result, $i);
}



print_r(randomArr(2));
print_r(randomArr(3));
print_r(randomArr(2));
print_r(randomArr(4));
print_r(randomArr(5));




?>