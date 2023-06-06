<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header.php
include ('header.php');

?>

<!-- Borang Pendaftaran pengguna baru -->
<link rel="stylesheet" href="mystyle.css">
<body>
<div  class='ba'>
<div class="login-box">
  <form class="login-form" action='pembeli-signup-proses.php' method='POST'>
    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>DAFTAR PENGGUNA BARU</h3>
    <div class="form-group">
      <label class="control-label">Full Name</label>
      <input class="form-control" type="text" name='nama' placeholder="Masukkan Nama Penuh" autofocus required>
    </div>
    <div class="form-group">
      <label class="control-label">No Kad Pengenalan</label>
      <input class="form-control" type="text" name='nokp' placeholder="Masukkan No Kad Pengenalan" autofocus required>
    </div>
    <div class="form-group">
      <label class="control-label">Password</label>
      <input class="form-control" type="password" name='katalaluan' placeholder="Masukkan kata laluan pengguna" required>
    </div>
    <div class="form-group btn-container">
      <button class="btn btn-primary btn-block" value='Daftar'><i class="fa fa-user-plus fa-lg fa-fw"></i> DAFTAR</button>
    </div>
  </form>
</div>
</div>
<style>
.ba{
  background-image: url('img/wallpaper-login.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.login-box {
  width: 400px;
  margin: auto;
  max-width: 100%;

}

.login-box .login-form {
  display: block;
  margin-bottom: 10px;
  background-color: #fff;
  border-radius: 3px;
  padding: 30px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
}

.login-box .login-form h3 {
  text-align: center;
  font-size: 22px;
  margin-bottom: 20px;
  font-weight: 500;
  position: relative;
}

.login-box .login-form h3 i {
  display: inline-block;
  font-size: 38px;
  margin-right: 10px;
  top: -5px;
  position: relative;
}

.login-box .login-form .form-group {
  margin-bottom: 20px;
  text-align: center;
}

.login-box .login-form .form-control {
  border: 1px solid #7826ff;
  border-radius: 3px;
  box-shadow: none;
  height: 40px;
  font-size: 15px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  width: 100%;
  max-width: 300px;
  margin: auto;
}


.login-box .login-form .form-control:focus {
  border: 1px solid #7826ff;
  box-shadow: 0 0 5px #7826ff;
}

button {
 --color: #560bad;
 font-family: inherit;
 display: inline-block;
 width: 8em;
 height: 2.6em;
 line-height: 2.5em;
 margin: 20px;
 position: relative;
 overflow: hidden;
 border: 2px solid var(--color);
 transition: color .5s;
 z-index: 1;
 font-size: 17px;
 border-radius: 6px;
 font-weight: 500;
 color: var(--color);
}

button:before {
 content: "";
 position: absolute;
 z-index: -1;
 background: var(--color);
 height: 150px;
 width: 200px;
 border-radius: 50%;
}

button:hover {
 color: #fff;
}

button:before {
 top: 100%;
 left: 100%;
 transition: all .7s;
}

button:hover:before {
 top: -30px;
 left: -30px;
}

button:active:before {
 background: #3a0ca3;
 transition: background 0s;
}
 </style>
 </body>
<?php include ('footer.php'); ?>