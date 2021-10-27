<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo $css_framework;?>" rel="stylesheet" >

    <link rel="shortcut icon" href="assets/logo/gs.png">
    <title>Hello, Developer!</title>
  </head>
  <body style="background-color:#f2f2f2">
      <div class="mx-auto w-50">

      <a href="<?php route('home');?>"><img src="assets/logo/gs.png" style="width: 50px;"></a><br>
        <H1>Welcome <?php echo $_SESSION['name'];?></H1>
        <a href="<?php route('log_out');?>">
          <button type="button" class="btn btn-primary">Log Out</button>
      </a>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo $css_framework_js;?>"  crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>