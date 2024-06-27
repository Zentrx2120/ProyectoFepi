<?php $titulo = "LogIn"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include './assets/head.php'; ?>
</head>
<body>
    <!--Menú-->
    <?php include './assets/menu.php'; ?>
    <!-- Encabezado de Página-->
    <header class="masthead" style="background-image: url('assets/img/Home.png')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Iniciar Sesión</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Contenido Principal-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Ingresa tu boleta para iniciar sesión.</p>
                    <div class="my-5">
                        <form action="process_login.php" name="flogin" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="boleta" name="boleta" type="number" placeholder="Ingresa tu boleta" required />
                                <label for="boleta">Boleta</label>
                            </div>
                            <button class="btn btn-primary" style="border-radius: 0px;" type="submit">Iniciar Sesión</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Pie de página-->
    <?php include './assets/footer.php'; ?>
    <!-- Scripts JavaScript -->
    <script src="./js/contact.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>