<?php
   require("dbdata.php");

   $con=mysqli_connect($host, $id, $password, $db) or die("MySQL 접속 실패 !!" . $mysqli->connect_error);
	

   $userID = $_POST["userID"];
     
   $sql ="DELETE FROM usertbl WHERE userID='".$userID."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 회원 삭제 결과 </h1>";
   if($ret) {
	   echo $userID." 회원이 성공적으로 삭제됨..";
   }
   else {
	   echo "데이터 삭제 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br><br> <a href='index.html'> <--초기 화면</a> ";
?>
