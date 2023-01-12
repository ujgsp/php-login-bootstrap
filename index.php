<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Halaman Login dengan Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" method="post" action="login.php">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Halaman Login dengan Bootstrap CSS</h1>

        <?php 
        // bagian script php ini akan ditampilkan jika url mengirimkan query url msg
        if(isset($_GET['msg']))
        {
            if($_GET['msg'] == 'error'){
                echo '<div class="alert alert-danger" role="alert">
                        Login gagal! periksa username atau password!
                    </div>';
            }
            elseif($_GET['msg'] == 'out'){
                echo '<div class="alert alert-success" role="alert">
                        Logout berhasil!
                    </div>';
            }
        }
        ?>

        <label class="sr-only">Username</label>
        <input type="text" class="form-control" placeholder="Username" required autofocus name="txtusername">

        <label class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="txtpassword">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy;2023</p>
    </form>
</body>

</html>