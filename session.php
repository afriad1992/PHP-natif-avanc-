<?php 
require "verifsession.php";
require "head.php";?>


 
        <form class="form" id="form" action="#" method="POST">
      <div class="form-group row">
 <label class='col-form-label lab' for='log'>login</label>
 <input type='text' class='form-control col-12 inp' id='log' name='login' >
 <label class='col-form-label lab' for='passew'>passeword</label>
 <input type='text' class='form-control col-12 inp' id='passew' name='password' >

         
    <button type="submit" class="btn btn-success  " id="valider" name="con"  >se connecter</button>
</form>
 <?php 
 echo((isset($error))? $error:"");
require "footer.php";?>   