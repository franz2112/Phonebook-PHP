<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>login</title>
  

<?php

  include('Connect.php');
?>

</head>
<style>
  body{
    width: 100%;
      height: calc(100%);
      /*background: #007bff;*/
  }
  main#main{
    width:100%;
    height: calc(100%);
    background:white;
  }
  #login-right{
    position: absolute;
    right:0;
    width:50%;
    height: calc(100%);
    background:#FFFFE1;
    display: flex;
    align-items: center;
  }
  #login-left{
    position: absolute;
    left:0;
    width:55%;
    height: calc(100%);
    background:#00000061;
    display: flex;
    align-items: center;

  }
  #login-right .card{
    margin: auto
  }
  .logo {
    margin: auto;
    background-image: url(Logo.png);
    background-repeat: no-repeat;
    width: 500px;
    height: 500px;
    position: relative;
    left: 90px;
    bottom: -70px;
   }
  .panel-footer {
    padding: 10px 15px;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    text-align: right;
   }
   .login-text{
    font-style: consolas;
    position: absolute;
    left: 75px;
    bottom: 250px;
   }

</style>

<body>


  <main id="main" class=" alert-info">
    <div class= login-text>
          <h1><b> ASEAN PHONEBOOK </b><h1>
      </div> 
      <div id="login-left">
        <div class="logo">
        </div>
      </div>
      <div id="login-right">
        <div class="card col-md-8">
          <div class="card-body">
            <form id="login-form" >
              <div class="form-group">
                <h1><b><center>ASEAN PHONEBOOK</center></b></h1>
                <p><center>Input your Credentials</center></p>
                <label for="username" class="control-label">Username</label>
                <input type="text" id="username" name="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
              </div>
              <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
              <div class="panel-footer text-right">
                <small>&copy; Fritz Tuazon</small>
              </div>
            </form>
          </div>
        </div>
      </div>
  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
  $('#login-form').submit(function(e){
    e.preventDefault()
    $('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
    if($(this).find('.alert-danger').length > 0 )
      $(this).find('.alert-danger').remove();
    $.ajax({
      url:'ajax.php?action=login',
      method:'POST',
      data:$(this).serialize(),
      error:err=>{
        console.log(err)
    $('#login-form button[type="button"]').removeAttr('disabled').html('Login');

      },
      success:function(resp){
        if(resp == 1){
          location.href ='index.php?page=home';
        }else if(resp == 2){
          location.href ='voting.php';
        }else{
          $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
          $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
        }
      }
    })
  })
</script> 
</html>