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
<h1>Edit</h1>
<?php echo form_open()?>
    <form method="post" name="createUser" action="<?php echo base_url().'/user/edit',$user['idUser'];?>">
     <div class="row">
        <div class="col-md-4">
             <div class="form-group">
                 <label >Name</label>
                 <input type="text" name="name" value="<?php echo set_value('name',$user['name']); ?>"  class="form-control">
                 <?php echo form_error('name')?>
             </div>
            <div class="form-group">
                  <label >Email</label>
                  <input type="text" name="email" value="<?php echo set_value('email',$user['email']); ?>"  class="form-control">
                  <?php echo form_error('email')?>
            </div>
            <div class="form-group">
                <button class=" btn btn-primary" type="submit" value="submit" >Update</button>
                <a href="<?php echo base_url().'/user';?>" class="btn-secondary btn"> Cancel</a>
            </div>
        </div>        
        </form >     
            
     </div>
</body>

