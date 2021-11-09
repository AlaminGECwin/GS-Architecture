

  
      <div class="mx-auto w-50">
      <img src="assets/logo/gsl.png" class="img-fluid  " alt="">
      </div>

    
    <h1 class="text-center fs-1">Welcome to <a href="<?php route('gs');?>">
      <div class="ring">
      <img src="assets/logo/gs.png" style="width: 50px;">
        <span></span>
      </div>
        
    </a> &nbsp&nbsp&nbsp&nbsp&nbsp Architectrue</h1>
    <div class=" text-center mt-3">
        
        <?php if(isset($_SESSION['password'])){
        ?>
          
          <button type="button" class="btn btn-secondary">Documentation</button>
          <button type="button" class="btn btn-success">Demos</button>
          <button type="button" class="btn btn-danger">Architecture</button>
          <a href="GS-Architecture.zip"><button type="button" class="btn btn-warning">Download</button></a>
          <button type="button" class="btn btn-info">About</button>
          <button type="button" class="btn btn-light">Bootstrap 5</button>
          <button type="button" class="btn btn-dark">Tailwind css</button>

          <button type="button" class="btn btn-link">API</button>
          <?php
          } ?>

    </div>
    
   