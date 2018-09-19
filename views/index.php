<?php 
require_once(ROOT.'/views/layouts/header.php'); 
?>

 
</br>
<section>
  <div class="container">
 
    
    <div class="row">
     <div class="col-sm-12">
       <a href = "/image/create" class = "btn btn-success btn-sm">Добавить изображение</a></br></br> 
     </div>

     <div class="col-sm-12">
       <div>
        <table class = "table-borderd table-hover table-striped table">
          <caption>Список изображений</caption>
          
          <thead>
           <tr>
             <th>ID изображения</th>
             <th>Описание</th>
             <th>Изображение</th>
 
             <th>Действие</th>
           </tr>
         </thead>
         <tbody>
          
           <?php foreach($itemList as $item): ?>
           <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['descr']; ?></td>
            <td><img src="/images/<?php echo $item['id'];?>.jpg" alt="" /></td>
            <td> <a href = "/image/delete/<?php echo $item['id'];?>"><i class="far fa-trash-alt"></i> В корзину</a>  </td>
           </tr>
         <?php endforeach; ?>

      </tbody>
    </table>

  </div>

</div>
</div>
</section>

  

</div>
</div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
