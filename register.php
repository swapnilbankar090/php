<?php
// print_r($_REQUEST);

foreach($_REQUEST as $key=> $data){
    echo $key ." is ".$data ."<br>";
}
echo "<pre>";
print_r($_SERVER);
?>