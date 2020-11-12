<?php
include_once "header.php";
?>


<div class="container w-50 border p-5 mt-5 bg-dark text-light rounded-lg">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
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