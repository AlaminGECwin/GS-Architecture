
<div class="mx-auto w-50">

<a href="<?php route('home');?>"><img src="assets/logo/gs.png" style="width: 50px;"></a><br>
  
  <a href="<?php route('log_out');?>">
    <button type="button" class="btn btn-primary">Log Out</button>
</a>


      <H1>Welcome <?php echo $_SESSION['name'];?></H1>
<div class="mt-3">

    <table class="table table-success table-striped table-hover table-bordered border-dark ">
      <thead>
        <tr>
          <th scope="col">#sl</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Role</th>
          <th scope="col" class="text-center" colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data as $row){?>
        <tr>
          <th scope="row"><?php echo $row['id'];?></th>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['password'];?></td>
          <td><?php echo $row['role'];?></td>
          <td><a href="<?php delete($row['id']); ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
          <td><a href="<?php edit($row['id']); ?>"><button type="button" class="btn btn-warning">Edit</button></a></td>

        </tr>
        <?php }?>
      </tbody>
    </table>
