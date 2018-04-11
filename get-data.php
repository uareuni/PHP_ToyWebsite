<?php
define('HOST','localhost');
define('USER','root');
define('PASS','111111');
define('DB','portfolio');

$con = mysqli_connect(HOST,USER,PASS,DB);

$sql = "SELECT * FROM content";

$res = mysqli_query($con,$sql);

$result = array();

while($row = mysqli_fetch_array($res)){
  array_push($result,
  array('id'=>$row[0],
        'title'=>$row[1],
        'description'=>$row[2]
        ));
}

echo json_encode(array("result"=>$result));

mysqli_close($con);

?>
