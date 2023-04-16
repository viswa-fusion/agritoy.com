<?php

$value=$_POST['q'];
if(strtolower($value)==strtolower("map")){
    header('Location:http://localhost/new/indiamap/map.html');
}
else{
    header('Location:https://www.google.com/search?q='.$value);
}
?>