<!DOCTYPE html>
<html>
<head>
	<title>Postingan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
	<h2>Post Dari <?=$users['username'];?></h2>
    <a href="<?= base_url('post/');?>">Kembali ke beranda</a><br><br>
	 <?php foreach($posts as $post):?>
            
            <h5><?=$post['email'];?></h5>
            <h5><?=$post['content'];?></h5>
            <?php
                if($this->session->userdata('name')==$users['name']){
                    ?>
                    <a href="<?= base_url('post/update_post/').$post['id'];?>" class="btn btn-primary">Edit</a>
                    <a href="<?= base_url('post/delete/').$post['id'];?>" class="btn btn-danger">Delete</a>
                <?php }?>
            
            
            <hr>  
     <?php endforeach;?>
</div>
</body>
</html>