<?php
//把user註冊的新帳號,存到資料庫

$dsn = "mysql:host=localhost;dbname:member;charset=utf8";
$pdo = new PDO($dsn,'root','');

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$birthday=$_POST['birthday'];
$addr=$_POST['addr'];
$education=$_POST['education'];

//寫入登入資料表
$insert_to_login = "insert into `login`(`acc`,`pw`,`email`) values('$acc','$pw','$email')";
$pdo->exce($insert_to_login);
  
  //定義member資料表login_id的值
  $select_login_user = "select * from `login` where `acc`='$acc',`pw`='$pw'";
  $login_user = $pdo->query($select_login_user);
  $login_id = $login_user['id'];
  echo "<br>註冊使用者ID";
  echo $login_id;

//寫入使用者資料表
$insert_to_member = "insert into `member`(`name`,`birthday`,`addr`,`aducation`,`login_id`) values('$name','$birthday','$addr','$education','$login_id')";
$result = $pdo->exce($insert_to_member);

if($result){
    header("location:index.php?meg=新增成功");
} else {
    header("location:index.php?meg=新增失敗");
}


?>