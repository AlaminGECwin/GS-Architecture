<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data[0]['id'];?>">
    <div id="emailHelp" class="form-text">We'll never share your Id with anyone else.</div>
    
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data[0]['name'];?>">
    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>

    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data[0]['email'];?>">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    
    <label for="exampleInputEmail1" class="form-label">Role</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data[0]['role'];?>">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $data[0]['password'];?>">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>