<div class="sku">
<?php 
  $css = 'sign.css';
  require_once 'header.php';
?>
 
    <div class="connexion container-fluid ">
    <form class="form">
        <div class="form-group">
          <h2 class="mx-auto">Sign in</h2>
          <input type="username" placeholder="Username" class="user  mx-auto" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="pw mx-auto " id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <input type="submit" class="sbm" value="Submit">
      </form>
    </div>
  </div>


    
<?php require 'footer.php'; ?>