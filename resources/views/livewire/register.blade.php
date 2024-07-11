<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RRI Jember-Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/css/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><strong>Create an Account</strong></h1>
                            </div>
                            <form class="user" method="POST" action="proses-registrasi.php">
                                <!-- Nama dan Nomor Telepon -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="exampleFirstName"><strong>Nama Lengkap</strong></label>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="exampleLastName"><strong>No. Tlp/Hp</strong></label>
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="No. Tlp/Hp">
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="exampleInputEmail"><strong>Email</strong></label>
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                                </div>
                                <!-- Password dan Konfirmasi Password -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="exampleInputPassword"><strong>Password</strong></label>
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="exampleRepeatPassword"><strong>Konfirmasi Password</strong></label>
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                                <!-- Alamat -->
                                <div class="form-group">
                                    <label for="exampleInputAddress"><strong>Alamat</strong></label>
                                    <input type="text" class="form-control form-control-user" id="exampleInputAddress" placeholder="Alamat">
                                </div>
                                <!-- Tempat dan Tanggal Lahir -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="exampleInputPlaceOfBirth"><strong>Tempat Lahir</strong></label>
                                        <input type="text" class="form-control form-control-user" id="exampleInputPlaceOfBirth" placeholder="Tempat Lahir">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="exampleInputDateOfBirth"><strong>Tanggal Lahir</strong></label>
                                        <input type="date" class="form-control form-control-user" id="exampleInputDateOfBirth" placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                                <!-- Tombol Registrasi -->
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{route('logins')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>