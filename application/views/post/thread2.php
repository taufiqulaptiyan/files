
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Postingan</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url('user/');?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('user/login');?>">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="">Feed</a>
        </li>
      </ul>     
  </nav>
    <div class="container">
      <br>
      <!--<div align="center"><font face="freehand521 bt" size="10">Instakilo</font></div>-->
      
      <div class="container">
      <h1>Selamat Datang,<?=$this->session->userdata('name');?></h1><br>
      <div class="row">
          <div class="col-sm-4">
          <div class="jumbotron">
          <h1>Buat Postingan</h1><br>
          <form action="<?= base_url('post/create/').$this->session->userdata('username');?>" method="POST">
          <div class="form-group">
  
            <input type="hidden" class="form-control" name="username" value="<?=$this->session->userdata('username');?>" >
          </div>
          <div class="form-group">
            <label>Posting</label>
            <textarea class="form-control" rows="3" placeholder="Apa yang anda pikirkan ?" name="content"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br>
          <a href="<?= base_url('user/logout');?>">Anda Ingin Logout ?</a>
        </div>
        </div>

        <div class="col-sm-8">
          <div class="jumbotron">
          <h1>Beranda</h1><br>
      <?php foreach($posts as $post):?>
            
            <a href="<?=base_url('post/user_thread/').$post['username'];?>"><h4><?=$post['username'];?></h4></a>
            <h6>[<?=$post['email'];?>]</h6><br>
            <h6><?=$post['content'];?></h6>
            <hr>
            
          <?php endforeach;?>
        </div>
      </div>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>