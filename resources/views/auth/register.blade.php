<!DOCTYPE html>
<html>
<head>
  <title>Daylogs || Log-In </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style type="text/css">
    /* Made with love by Mutiullah Samim*/
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('https://getwallpapers.com/wallpaper/full/3/e/f/63216.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 455px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #12ffbdb3;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #12ffbdb3;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
height: 20px;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #12ffbdb3;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>

<body>
  <div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign Up</h3>
        <div class="d-flex justify-content-end social_icon">
          <span></span>
          <!-- <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span> -->
        </div>
      </div>
      <div class="card-body">
         <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input id="name" type="text" name="name" class="form-control" placeholder="Name" required autocomplete="username" autofocus>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autocomplete="email" autofocus>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <select id="role" type="number" class="form-control" name="role" required autocomplete="role">
                <option value="">Select Role</option>
                <option value="1">SUPERADMIN</option>
                <option value="2">ADMIN</option>
                <option value="3">USPOC</option>
                <option value="4">SPOC</option>
                <option value="5">USER</option>
            </select>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" id="password" name="password" class="form-control" required autocomplete="new-password" placeholder="Password">
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password-confirm" id="password-confirm" name="password_confirmation" class="form-control" required autocomplete="new-password" placeholder="Confirm Password">
          </div>
          <div class="remember"></div>
         <!--  <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div> -->
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="{{route('login')}}">Sign In</a>
        </div>
        <!-- <div class="d-flex justify-content-center">
          <a href="#">Forgot your password?</a>
        </div> -->
      </div>
    </div>
  </div>
  </div>
</body>
</html>