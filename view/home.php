<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="assets/logo/gs.png">
    <style>
      .ring
        {
          position:absolute;
          top:70%;
          left:50%;
          transform:translate(-50%, -50%);
          width:70px;
          height:70px;
          border:3px solid #3d3d3d;
          border-radius:50%;
          text-align:center;
          line-height:50px;
          letter-spacing:4px;
          text-transform:uppercase;
          color:#fff000;
          text-shadow:0 0 15px #fff000;
          box-shadow:0 0 20px rgba(0,0,0,.5);
        }
        .ring:before
        {
          content:'';
          display:block;
          position:absolute;
          top:-3px;
          left:-3px;
          width:100%;
          height:100%;
          border:3px solid transparent;
          border-top:3px solid #fff000;
          border-left:3px solid transparent;
          border-right:3px solid #fff000;
          border-radius:50%;
          animation:ani-cyle  2s linear infinite;
        }
        span
        {
          position:absolute;
          width:50%;
          height:4px;
          display:block;
          top:calc(50% - 2px);
          left:50%;
          background:none;
          animation:animate 2s linear infinite;
          transform-origin:left;
        }
        span:after
        {
          content:'';
          width:16px;
          height:16px;
          background:#fff000;
          border-radius:50%;
          box-shadow: 0 0 20px #fff000;
          position:absolute;
          right:-8px;
          top:calc(50% - 8px);
        }

        @keyframes ani-cyle
        {
          0%{
            transform:rotate(0deg);
          }
          100%{
            transform:rotate(360deg);
          }
          
        }

        @keyframes animate
        {
          0%{
            transform:rotate(45deg);
          }
          100%{
            transform:rotate(405deg);
          }
          
        }
      </style>
    <title>Hello, Developer!</title>
  </head>
  <body style="background-color:#f2f2f2">
  
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
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>