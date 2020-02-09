<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('user/login');?>">Login</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url('post/');?>">Feed</a>
        </li>
      </ul>     
  </nav>

  <div class="container">
    <br><br><br><br><br>
    <div class="jumbotron">
      <h1>Selamat Datang di X00TD Unofficial Forum </h1>
      <h4>Silahkan login terlebih dahulu, #NggakBootloopNggakGanteng</h4>
      <h5><a href="<?= base_url('user/login');?>">Klik Disini</a></h5>
    </div>
</div>
</body>
</html>