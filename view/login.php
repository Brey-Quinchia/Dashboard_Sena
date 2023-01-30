<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Tracking System</title>
    <!-- Inclusion del Estilo CSS propio del Login -->
    
    <!-- CDN de inclusion de Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <!--CDN de inclusion de los Iconos -->
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css"> -->
    <!-- CDN de inclusion de Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/login.css">
<body translate="no">
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log">
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h3 class="mb-1 pb-3">Tracking System</h3>
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
                                                <div class="form-group">
                                                    <input type="email" name="logemail" class="form-style" placeholder="Usuario" id="logemail" autocomplete="off" required>
                                                    <i class="input-icon bi bi-at"></i><!--Link for Bootstrap -->
                                                    <!-- <i class="input-icon uil uil-at"></i> -->
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpass" class="form-style" placeholder="Password" id="logpass" autocomplete="off" required>
                                                    <i class="input-icon bi bi-person-lock"></i>
                                                    <!-- <i class="input-icon uil uil-lock-alt"></i> -->
                                                </div>
                                                <input class="btn mt-4" type="submit" value="Login" name="login">
                                            </form>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">¿Olvisdaste tu contraseña?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up - Tracking System</h4>
                                            <div class="form-group">
                                                <input type="text" name="logname" class="form-style" placeholder="Nombre Completo" id="logname" autocomplete="off">
                                                <i class="input-icon bi-rocket-takeoff-fill"></i>
                                                <!-- <i class="input-icon uil uil-user"></i> -->
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="email" name="logemail" class="form-style" placeholder="Email" id="logemail" autocomplete="off">
                                                <!-- <i class="input-icon uil uil-at"></i> -->
                                                <i class="input-icon bi bi-at"></i><!--Link for Bootstrap -->
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Contraseña" id="logpass" autocomplete="off">
                                                <i class="input-icon bi bi-person-lock"></i>
                                                <!-- <i class="input-icon uil uil-lock-alt"></i> -->
                                            </div>
                                            <a href="#" class="btn mt-4">Registrarse</a>
                                            <p class="mb-0 mt-4 text-center">¡El Sistema de Registro esta deshabilitado Temporalmente!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>