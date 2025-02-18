<?php
$userdeatils=[
    'name'=>'anil',
    'age'=>29,
    'city'=>'delhi',
    'state'=>'mp',
    'email'=>'swapnilbankar'
];

//echo $userdeatils['name'];

foreach($userdeatils as $key=> $data){
    echo $key.' is '.$data.'<br>';
}

?>