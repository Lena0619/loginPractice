<?php
include_once "header.php";
?>

<h5><?php if(isset($_GET['meg'])){echo $_GET['meg'];}?></h5>
<div class="container w-50 border p-5 mt-5 bg-dark text-light rounded-lg">
<h4 class="pb-5 my-0">Login</h4>
<form action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Account</label>
    <input type="email" class="form-control" name="acc">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pw">
  </div>
  <div class="form-group d-flex justify-content-end">
     <a href="forget.php" class="pr-3">忘記密碼?</a>
     <a href="register.php" class="">註冊新帳號.</a>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<?php
include_once "footer.php";
?>