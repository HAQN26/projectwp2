<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>umkmjabar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" />
    <style>
        body {
            background-image: linear-gradient(rgba(47, 23, 15, 0.65),
                    rgba(47, 23, 15, 0.65)),
                url("<?php echo base_url(); ?>assets/img/bg.jpg");
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-white mb-3"> UMKM JAWA BARAT </span>
            <span class="site-heading-lower">NOLSTALGIA COFFE</span>
        </h1>
    </header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?php echo base_url() . 'Umkm' ?>">Home</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?php echo base_url() . 'About' ?>">About</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?php echo base_url() . 'Products' ?>">Products</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?php echo base_url() . 'Store' ?>">Store</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?php echo base_url() . 'Form' ?>">Suggestions</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <title>Kritik Dan Saran</title>
    </head>

    <body>

        <div class="container" style="margin-top: 30px">
            <form class="form-horizontal" action="<?php echo base_url() . 'Form/simpan' ?>" method="post">
                <div class="row">
                    <div class="col-md-5 offset-md-3">
                        <div class="card">
                            <div class="card-body">
                                <label>
                                    <h3>
                                        <strong>Beri Penilaian Tentang Kami</strong>
                                    </h3>
                                </label>
                                <hr>

                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="xnama" class="form-control" id="nama" required placeholder="Contoh : Masukan nama kamu">
                                </div>

                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" name="xinstagram" class="form-control" id="nama" required placeholder="@instagram">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="xemail" class="form-control" id="email" required placeholder="hannaalisa@gmail.com">
                                </div>

                                <div class="form-group">
                                    <label>Kritik dan Saran</label>
                                    <textarea rows="10" name="xpesanan" class="form-control" id="kritik_saran" required placeholder="Kritik dan Saran"></textarea>
                                </div>

                                <input type="submit" value="Kirim Pesan" class="btn btn-register btn-block btn-success" />

                                <div id="toggle" style="display:none">Pesan kamu telah berhasil kami terima</div>

                            </div>
                        </div>

                    </div>
                </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

        <script>
            $(document).ready(function() {

                $(".btn-register").click(function() {

                    var nama = $("#nama").val();
                    var instagram = $("#instagram").val();
                    var email = $("email").val();
                    var kritik_saran = $("kritik_saran").val();

                    if (nama.length == "") {

                        Swal.fire({
                            type: 'warning',
                            title: 'Oops...',
                            text: 'Nama Lengkap Wajib Diisi !'
                        });

                    } else if (instagram.length == "") {

                        Swal.fire({
                            type: 'warning',
                            title: 'Oops...',
                            text: 'instagram Wajib Diisi !'
                        });

                    } else if (email.length == "") {

                        Swal.fire({
                            type: 'warning',
                            title: 'Oops...',
                            text: 'email Wajib Diisi !'
                        });

                    } else if (kritik_saran.length == "") {

                        Swal.fire({
                            type: 'warning',
                            title: 'Oops...',
                            text: 'kritik_saran Wajib Diisi !'
                        });



                    } else {

                        //ajax
                        $.ajax({

                            url: "<?php echo base_url() ?>index.php/form/simpan",
                            type: "POST",
                            data: {
                                "nama": nama,
                                "instagram": instagram,
                                "email": email,
                                "kritik_saran": kritik_saran
                            },

                            success: function(response) {

                                if (response == "success") {

                                    Swal.fire({
                                        type: 'success',
                                        title: 'Kirim Berhasil!',
                                        text: 'Terimakasih!'
                                    });

                                    $("#nama").val('');
                                    $("#instagram").val('');
                                    $("#email").val('');
                                    $("#kritik_saran").val('');

                                } else {

                                    Swal.fire({
                                        type: 'error',
                                        title: 'Kirim Gagal!',
                                        text: 'silahkan coba lagi!'
                                    });

                                }

                                console.log(response);

                            },

                            error: function(response) {
                                Swal.fire({
                                    type: 'error',
                                    title: 'Opps!',
                                    text: 'server error!'
                                });
                            }

                        })

                    }

                });

            });
        </script>
        </section>
        <footer class="footer text-faded text-center py-5" style="margin-top : 30px">
            <div class="container">
                <p class="m-0 small">Copyright &copy; NOLSTALGIA COFFEE 2021 </p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    </body>

    </html>

</html>