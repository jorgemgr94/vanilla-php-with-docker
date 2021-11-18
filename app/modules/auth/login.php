<html>

<head>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwOnodbOc28t1oPJbzpWbPUGnbSpLUwmQ&v=3.exp&libraries=places">
    </script>

    <script crossorigin src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js?version=1.1"></script>

    <link rel="icon" type="image/x-icon" hreflang="es" href="/assets/img/icono.png" />
    <link rel="shortcut icon" type="image/x-icon" hreflang="es" href="/assets/img/icono.png" />
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <link href="/assets/css/simple-sidebar.css" rel="stylesheet" />
    <link href="/assets/css/styles.css" rel="stylesheet" />
</head>

<body id="body-login">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <img src="/assets/img/logo.png" width="100px" />
                                    </div>
                                    <form id="form-login">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email"
                                                required placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="pin" required
                                                placeholder="PIN" autocomplete="off">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Entrar
                                        </button>
                                        <!-- <hr>
                                        <div class="text-center">
                                            <a href="javascript:0" id="open-modal-pincode" class="small pointer">Envíar
                                                un
                                                nuevo PIN
                                                a mi correo</a>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="form-pincode">
        <div class="modal fade" id="modal-pincode" tabindex="-1" role="dialog" aria-labelledby="modal-pincodeLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-pincodeLabel">Envíar un nuevo PIN a mi correo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email-pincode" required placeholder="Email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Envíar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="/assets/js/modules/auth/login.js" type="module"></script>
</body>

</html>