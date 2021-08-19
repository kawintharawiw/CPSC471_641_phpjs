<?php ?>
<meta http-equiv="Content-Type" content="text/html; cherset-utf-8" />
<TABLE align="center" width="624" hight="800" border="1">

<Center><h1> ตารางข้อมูล </h1></Center>

<?php
 ini_set('display_errors', 1);
 error_reporting(0); //(~0)

 $serverName = "127.0.0.1";
 $userName = "root";
 $userPassword = "";
 $dbName = "test";

 $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

 $sql1 = "SELECT * FORM member";
 mysqli_set_charset($conn,$sql1);

 $query1 = mysqli_query($conn,$sql1);

?>

<table width="650" align="center" border="3">
<Center><h1> Table1 Member </h1></Center>
 <tr>
  <th width="15"> <div align="center">ID</div></th>
  <th width="200"> <div align="center">ชื่อ-สกุล</div></th>
  <th width="150"> <div align="center">เบอร์โทรศัพท์</div></th>
  <th width="150"> <div align="center">อีเมล์</div></th>

</tr>

<?php
while($result=mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
?>
 <tr>
  <td><div align="center"><?php echo$result["id"];?></div></td>
  <td align="right"><?php echo$result["fname"];?></td>
  <td align="right"><?php echo$result["phone"];?></td>
  <td align="right"><?php echo$result["email"];?></td>

	<?php echo $result1["id"];?>
 </tr>

<?php
}