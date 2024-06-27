<?php $titulo="Contact";?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include './assets/head.php'?>
</head>
<body>
    <!--Menú-->
    <?php include './assets/menu.php'; ?>
    <!--..................................................................................................-->
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
    <!--..............................................................................................-->
    <!-- Contenido Principal-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>¿Quieres tener un progreso de tu consumo de calorías? Regístrate para que puedas tener un conteo de tus calorías.</p>
                    <div class="my-5">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- Este formulario está preintegrado con SB Forms.-->
                        <!-- Para que este formulario funcione, regístrate en-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- para obtener un token de API.-->
                        <form action="" name="fcontact" onsubmit="processContactForm(event)">
                            <div class="form-floating">
                                <input class="form-control" id="boleta" name="boleta" type="number" placeholder="Ingresa tu boleta" data-sb-validations="required" />
                                <label for="boleta">Boleta</label>
                                <div class="invalid-feedback" data-sb-feedback="boleta:required">Boleta requerida.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Ingresa tu nombre" data-sb-validations="required" />
                                <label for="nombre">Nombre</label>
                                <div class="invalid-feedback" data-sb-feedback="nombre:required">Nombre requerido.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Ingresa tu email" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Correo requerido.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Correo inválido.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="edad" name="edad" type="number" placeholder="Ingresa tu edad" data-sb-validations="required" />
                                <label for="edad">Edad</label>
                                <div class="invalid-feedback" data-sb-feedback="edad:required">Edad requerida.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="peso" name="peso" type="number" placeholder="Ingresa tu peso (kg)" data-sb-validations="required" />
                                <label for="peso">Peso</label>
                                <div class="invalid-feedback" data-sb-feedback="peso:required">Peso requerido.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="estatura" name="estatura" type="number" placeholder="Ingresa tu estatura (cm)" data-sb-validations="required" />
                                <label for="estatura">Estatura</label>
                                <div class="invalid-feedback" data-sb-feedback="estatura:required">Estatura requerida.</div>
                            </div>
                            <br>
                            <button class="btn btn-primary" style="border-radius:0px" type="submit">Guardar</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--.................................................................................................-->
    <!-- Pie de página-->
    <?php include './assets/footer.php'; ?>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activa tu formulario en https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="./js/contact.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>