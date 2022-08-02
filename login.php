<?php
session_start();
include "../conf/connection.php";
include "../conf.baseurl.php";
if(isset($_SESSION['login'])){
if(!empty($_SESSION['login']) OR $_SESSION['login']!=""){
    header('locaton.index.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4C7FF0">
    <title>Login Page</title>
</head>
<body>
  <div class="app no-padding no-footer layout-static">
      <div class="session-panel">
          <div class="session">
              <div class="session-content">
                  <div class="card card-block form-layout">
                      <form method="post" action="logincontrol.php">
                          <div class="text-xs-center m-b-3">
                              <img src="<?php base_url();?>style_admin/images/logo-icon.png" height="80" alt="" class="m-b-1">
                            <h5>
                                selamat datang
                            </h5>
                            <p class="text-muted">
                                silahkan login untuk masuk ke halaman admin
                            </p>
                            </div>
                            <fieldset class="form-group">
                                <label for="username">
                                    username
                                </label>
                                <input type="text" name="udrn_post" class="form-control formcontrol-lg" id="username" placeholder="username">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="" class="form-control" id="password">
                                    password
                                </label>
                                <input type="password" name="pass_post" class="form-control-lg" id="password" placeholder="********"
                                required/>
                            </fieldset>

                            <button class="btn-btn-primarybtnblockbtn-lg" type="submit">
                                login
                            </button>
                            <div class="divider">
                                <span>
                                </span>
                            </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
