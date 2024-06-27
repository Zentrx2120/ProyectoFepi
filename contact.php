<?php $titulo="Contact";?>
<?php include "./server/registro.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include './assets/head.php'?>
</head>
<body>
    <!--Menú-->
    <?php include './assets/menu.php'; ?>
    <!-- Encabezado de Página-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Registro</h1>
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
                    <p>¿Quieres tener un progreso de tu consumo de calorías? Regístrate para que puedas tener un conteo de tus calorías.</p>
                    <div class="my-5">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="fcontact" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="boleta" name="boleta" type="number" placeholder="Ingresa tu boleta" required />
                                <label for="boleta">Boleta</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Ingresa tu nombre" required />
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Ingresa tu email" required />
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="edad" name="edad" type="number" placeholder="Ingresa tu edad" required />
                                <label for="edad">Edad</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="peso" name="peso" type="number" placeholder="Ingresa tu peso (kg)" required />
                                <label for="peso">Peso</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="estatura" name="estatura" type="number" placeholder="Ingresa tu estatura (cm)" required />
                                <label for="estatura">Estatura</label>
                            </div>
                            <button class="btn btn-primary" style="border-radius: 0px;" type="submit">Guardar</button>
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