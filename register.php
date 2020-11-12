<?php
include_once "header.php";
$title="註冊新帳號";
?>

<div class="container mt-5 d-flex justify-content-center">
  
  <form action="add_user.php" method="POST">
  <h4 class="font-weight-bold">註冊新帳號</h4>
    <div class="form-row border p-3">
       <div class="form-group col-sm-6">
       <label>帳號</label>
       <input type="text" name="acc" class="form-control">
       </div>
       <div class="form-group col-sm-6">
       <label>密碼</label>
       <input type="text" name="pw" class="form-control">
       </div>
       <div class="form-group col-sm-6">
       <label>姓名</label>
       <input type="text" name="name" class="form-control">
       </div>
       <div class="form-group col-sm-6">
       <label>E-mail</label>
       <input type="text" name="email" class="form-control">
       </div>
       <div class="form-group col-sm-6">
       <label>出生日</label>
       <input type="date" name="birthday" class="form-control">
       </div>
       <div class="form-group col-sm-6">
       <label>居住地</label>
       <input type="text" name="location" class="form-control">
       </div>
       <div class="form-group col-sm-6">
       <label>學歷</label>
       <select name="education" class="form-control">
           <option value="">國中</option>
           <option value="">高中</option>
           <option value="">大學/專科</option>
           <option value="">碩士</option>
           <option value="">博士</option>
       </select>
       </div>
       <div class="col-10"></div>
       <button type="submit" class="btn btn-primary">Submit</button>
    </div>  

  </form>
</div>





<?php
include_once "footer.php";
?>