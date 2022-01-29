<?php
if(isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'];
}else{
    $path = "login/index";
}

$str = $path;
$data	= explode("/",$str);
$i=0;
foreach ($data as $d){
$i++;
echo $d[$i]." ----".$i."<br>";

}
echo count($data)."<br>";

?>
