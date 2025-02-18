<?php
echo "<h1>array</h1>";
//simplae way
$user = ["anil", "pune", "anil@gmail.com"];

for ($i = 0; $i < count($user); $i++) {
    echo $user[$i] . "<br>";
}

echo "<h1>using foreach</h1>";

//using foreach


$users = ["swapnil", "nagar","gaurav", "swapnilbanakr090", "shubham"];



foreach ($users as $user) {

    if($user=="gaurav"){
        continue;
    }
    echo "<br>" . $user . "<br>";
    // if ($user == "nagar") {
    //     break;
    // }
}

foreach ($users as $x):
    echo $x . "<br>";
endforeach;


?>