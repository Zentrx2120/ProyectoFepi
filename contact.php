<?php $titulo="Contact";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './assets/head.php'?>
    </head>
    <body>
        <!--Menu-->
        <?php include './assets/menu.php'; ?>
        <!--..................................................................................................-->
        <!-- Page Header-->
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
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>¿Quieres tener un progreso de tu consumo de calorias? Registrate para que puedas tener un conteo de tus calorias</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" id="boleta" type="number" placeholder="Ingresa tu boleta" data-sb-validations="required" />
                                    <label for="boletas">Boleta</label>
                                    <div class="invalid-feedback" data-sb-feedback="boleta:required">Boleta requerida.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Nombre</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Nombre requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Correo requerido.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Correo Invalido.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="edad" type="number" placeholder="Ingresa tu edad" data-sb-validations="required" />
                                    <label for="edad">Edad</label>
                                    <div class="invalid-feedback" data-sb-feedback="edad:required">Edad requerida.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="peso" type="number" placeholder="Ingresa tu peso (kg)" data-sb-validations="required" />
                                    <label for="peso">Peso</label>
                                    <div class="invalid-feedback" data-sb-feedback="peso:required">Peso requerido requerida.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="estatura" type="number" placeholder="Ingresa tu estatura (cm)" data-sb-validations="required" />
                                    <label for="estatura">Estatura</label>
                                    <div class="invalid-feedback" data-sb-feedback="estatura:required">Estatura requerida.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--.................................................................................................-->
        <!-- Footer-->
        <?php include './assets/footer.php'; ?>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
