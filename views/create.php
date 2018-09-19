<?php 
require_once(ROOT.'/views/layouts/header.php'); 
?>
<section>
  <div class="container">
 
    <div class="row">
     <div class="col-sm-12">
       <h5>Добавить изображение</h5>
   </div>

    <div class="col-sm-12">
       <div>

        <form action = "#" method = "POST" enctype = "multipart/form-data">
          <div class="form-group">
            <label for="nameProduct">Описание </label>
            <input type="text" name = "descr" class="form-control form-control-sm"  >
          </div>

            <div class="form-group">
              <label for="imageProduct">Изображение товара</label>
              <input type="file" name = "image" class="form-control-file form-control-sm" id="imageProduct">
            </div>
 
          <input type="submit" name="submit" class="btn btn-success" value="Сохранить"></br></br></br></br></br>

        </form>


       </div>
      
    </div>
  </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>
</html>
 