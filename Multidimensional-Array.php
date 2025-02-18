<?php
echo "<h1>Multidimensional Array</h1>";

$users=[
    [ 1,"swapnil","nagar"],
    [2,"shubham","pune"],
    [3,"pratik","mumbai"],
    [4,"saurabh","delhi"],
    [5,"rahul","banglore"],
];

 echo "<pre>";
// print_r($users);


for($i=0; $i<count($users);$i++){
    // echo "User ID:".$users[$i][0]."\n";
    // echo "User Name:".$users[$i][1]."\n";
    // echo "User Location:".$users[$i][2]."\n";
    // echo "------------------------\n";
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j] ."<br>";
    }
    
}

?>