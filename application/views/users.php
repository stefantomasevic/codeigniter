<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <!-- <?php
    foreach($users as $user){
       
        echo $user->name;
        echo "&nbsp";
        echo $user->email;
       
    }  
   ?> -->
   <div class="row">
       <div class="col-md-6">
           <?php 
           $success=$this->session->userdata('success');
           if($success!=""){  
           ?>
           <div class="alert alert-success"> <?php echo $success; ?> </div>
           <?php } ?>
       </div>
   </div>


   
  
   <table class="table col-md-8">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
      <?php foreach($users as $user){?>
    <tr>
      <th scope="row"> <?php echo $user->idUser?> </th>
      <td> <?php echo $user->name?></td>
      <td> <?php echo $user->email?></td>
      <td>
          <a href="<?php echo base_url().'user/edit/'.$user->idUser ?>"  class="btn btn-primary">Edit</a>
      </td>
      <td>
      <a href="<?php echo base_url().'user/delete/'.$user->idUser ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>

<a  href="<?php echo base_url().'user/create' ?>" class="btn btn-primary">Create new</a>

 
</body>
</html>