
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Register</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?=base_url() ?>/assets/images/favicon.ico">

        <link href="<?=base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url() ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="index.html" class="logo logo-admin"><img src="<?=base_url() ?>/assets/images/logo.png" height="24" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <form method="post" class="form-horizontal" action="/mahasiswa/save">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="text" id="email" name="email" placeholder="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="text" id="nama" name="nama" placeholder="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="text" id="id_anggota" name="id_anggota" placeholder="id anggota">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input class="form-control" type="password" id="password" name="password" placeholder="password">
                                </div>
                            </div>

                            

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20 text-center">
                                    <a href="/" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="<?=base_url() ?>/assets/js/jquery.min.js"></script>
        <script src="<?=base_url() ?>/assets/js/popper.min.js"></script>
        <script src="<?=base_url() ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url() ?>/assets/js/modernizr.min.js"></script>
        <script src="<?=base_url() ?>/assets/js/waves.js"></script>
        <script src="<?=base_url() ?>/assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url() ?>/assets/js/jquery.nicescroll.js"></script>
        <script src="<?=base_url() ?>/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?=base_url() ?>/assets/js/app.js"></script>

    </body>
</html>