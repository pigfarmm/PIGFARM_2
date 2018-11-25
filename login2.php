<?php 
 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 
mysqli_set_charset($con,"utf8");
 $username  = $_GET['username'];
 $password  = $_GET['password'];
 
$user = "u447856869_pf";
$pass = "supanut19999";
$host= "localhost";
$dbname="u447856869_pf";

$con = mysqli_connect($host,$user,$pass,$dbname);
 
 $sql = "SELECT * FROM farm WHERE username='".$username."' and password ='".$password."'";
 

 $r = mysqli_query($con,$sql);
 
 $res = mysqli_fetch_array($r);
 
  $result = array();
 
 if(sizeof($res)>0){
	 
    array_push($result,array(
"username"=>$res['username'],
"farm_id"=>$res['farm_id'],
"password"=>$res['password']));
 
 echo json_encode(array("result"=>$result));
 
	 
 }else {
	 
	 array_push($result,array(
     "error"=>'error',
 
 )
 );
 
 echo json_encode(array("result"=>$result));
 }
 
 mysqli_close($con);
 
 }
 
?>