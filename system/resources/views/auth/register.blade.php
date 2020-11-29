<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
@include('section-admin.assets')
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Register</title>

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>


                  <form action="{{url('register')}}" method="post">
                      @csrf
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" name="nama">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" name="username">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address" name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> <b>Register</b></button>
                    </div>
                    <hr>
                    <a href="{{url('login')}}" class="btn btn-google btn-block">
                      <i class="fa fa-lock"></i> <b>Login</b>
                    </a>
                  </form>



                  <hr>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
@include('section-admin.js');
</body>

</html>