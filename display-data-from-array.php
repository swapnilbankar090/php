<?php
$users=[
    [1,"swapnil","swapnilbankar09@gmail.com"],
    [2,"gaurav","gaurav@gmail.com"],
    [3,"shubham","shubham@gmail.com"],
    [4,"annaa","annaa09@gmail.com"],
    [5,"swapnil","swapnilbankar09@gmail.com"],
    [6,"gaurav","gaurav@gmail.com"],
    [7,"shubham","shubham@gmail.com"],
    [8,"annaa","annaa09@gmail.com"],
];
echo "<table border=1>";
for($i=0;$i<count($users);$i++){
    echo "<tr>";
    for($j=0;$j<count($users[$i]);$j++){
        echo "<td>";
        echo $users[$i][$j] ."<br>";
    }
    echo "</tr>";
}
echo "</table>";
?>