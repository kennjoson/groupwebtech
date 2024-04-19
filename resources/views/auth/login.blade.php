<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BiteCare Login</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<style>
    body {
      background-color: #F1F5F9;
    }
    .nav-link-black {
      color: black !important;
    }

    .navbar-brand .bite {
      color: blue;
    }
    .navbar-brand .care {
      color: #33b34d;
    }
    .form-group {
        position: relative; 
    }

    .form-control-user {
        border-radius: 20px; 
    }

    .input-group-text {
        border-radius: 20px; 
    }

  </style>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <img src="{{ asset('image/bc_icon.png') }}" alt="BiteCare Icon" class="sidebar-brand-icon img-fluid" style="max-width: 50px; height: auto;">
        <a class="navbar-brand" href="#"><span class="bite">Bite</span><span class="care">Care</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
          </ul>
        </div>
      </div>
    </nav>
  <div class="container mt-5 ">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-12 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 20px;">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            @php
            $imageURL = asset('image/bc_icon.png');
             @endphp
        <div class="col-sm-6 d-none d-md-block p-5" style="background-size: cover; justify-content: center; align-items: center; margin-top: 70px;">
            <div class="d-flex align-items-center mb-1">
                <img src="{{ asset('image/bc_icon.png') }}" alt="BiteCare Icon" style="max-width: 140px; height: auto; margin-left: 70px;  ">
                    <a class="navbar-brand" style="font-size: 50px;" href="#">
                        <span class="bite">Bite</span><span class="care">Care</span>
                    </a>          
            </div>
        </div>



              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 mb-4" style="color: black;">Welcome Back!</h1>
                  </div>
                  <form action="{{ route('login.action') }}" method="POST" class="user">
                    @csrf
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div>
                    @endif
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                    <div class="input-group">
                        <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-eye" id="togglePassword"></i> <!-- Eye icon for show/hide password -->
                            </span>
                        </div>
                    </div>
                </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-user">Login</button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Add this script before the closing </body> tag -->


  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
  <!-- Add this script before the closing </body> tag -->
  <script>
      document.getElementById('togglePassword').addEventListener('click', function () {
          var passwordInput = document.getElementById('exampleInputPassword');
          if (passwordInput.type === 'password') {
              passwordInput.type = 'text'; // Show password
              this.classList.remove('fa-eye');
              this.classList.add('fa-eye-slash'); // Change eye icon to slash when showing password
          } else {
              passwordInput.type = 'password'; // Hide password
              this.classList.remove('fa-eye-slash');
              this.classList.add('fa-eye'); // Change slash icon back to eye
          }
      });
  </script>

</body>
</html>