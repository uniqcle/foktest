<?php include(ROOT.'/views/layouts/header.php'); ?>

<section>
  <div class="container">

    <div class="col-sm-5 col-sm-offset-3 form-login">
 
<!--Блок вывода ошибок при неправильном входе -->
 <?php 
if(isset($errors) && is_array($errors)){
    foreach($errors as $error):
        echo '- '.$error.'<br>'; 
    endforeach; 
}
 ?>
  <!-- Форма входа --> 
      <form action = "user/login" method = "POST" class="form-signin">
        <h2 class="form-signin-heading">Вход в админ.панель</h2>

        
        <input type="email" name = "email"  class="form-control" placeholder="demo@demo.ru" >

        
        <input type="password" name = "password"  class="form-control" placeholder="demo"  >
 
        <button class="btn btn-lg btn-primary btn-block" name = "submit" type="submit">Sign in</button>
      </form>
 

  </div>

</div>
</section>


<?php include(ROOT.'/views/layouts/footer.php'); ?>