<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pagina web sobre refuerzos de ciencias naturalese</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-15">
                <img src="img/aniversario (1).png"> 
                <a class="navbar-brand" href="#!">Ciencias Naturales </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-4 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="acceso.html">Ingresa</a></li>
                        <li class="nav-item"><a class="nav-link" href="niveles-de-aprendizaje.html">Niveles de aprendizaje</a></li>
                        <li class="nav-item"><a class="nav-link" href="contactos.html">Contactanos</a></li>
                        <li class="nav-item"><a class="nav-link" href="integrantes.html">integrantes </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-6"><img class="img-fluid rounded mb-4 mb-lg-0" src="img/imagen registros 1.png" alt="Registros Ciencias Naturales" /></div>
                <div class="col-lg-5">
                  <head>
                    <title>Formulario de registro - Mi webCOLCOMFENALQUISTA</title>
                    </head>
                    <body>
                    <h2>Formulario de registro</h2>
                    <form action="procesar.php" method="post">
                        <!-- Campo para el Nombre -->
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required><br><br>
                    
                        <!-- Campo para el Apellido -->
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" required><br><br>
                    
                        <!-- Campo para el Grado -->
                        <label for="grado">Grado:</label>
                        <select id="grado" name="grado" required>
                            <option value="" disabled selected>Seleccione su grado</option>
                            <option value="primero">Primero</option>
                            <option value="segundo">Segundo</option>
                            <option value="tercero">Tercero</option>
                            <!-- Añade más opciones según sea necesario -->
                        </select><br><br>
                    
                        <!-- Campo para el Tipo de Tarjeta de Identidad -->
                        <label for="tipo-tarjeta">Tipo de Tarjeta de Identidad:</label>
                        <select id="tipo-tarjeta" name="tipo-tarjeta" required>
                            <option value="" disabled selected>Seleccione el tipo de documento</option>
                            <option value="tarje de identidad">Tarjeta de Identidad</option>
                            <option value="Cedula de ciudadania">Cédula de Ciudadanía</option>
                            <option value="Cedula extranjera">Cédula Extranjera</option>
                            <!-- Añade más opciones según sea necesario -->
                        </select><br><br>
                    
                        <!-- Campo para el Número de Tarjeta de Identidad -->
                        <label for="numero-tarjeta">Número de Tarjeta de Identidad:</label>
                        <input type="text" id="numero-tarjeta" name="numero-tarjeta" required><br><br>
                    
                        <!-- Campo para el Correo Electrónico -->
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" required><br><br>
                    
                        <!-- Campo para la Contraseña -->
                        <label for="contraseña">Contraseña:</label>
                        <br>
                        <div class="password-container">
                            <input type="password" id="password" name="password" placeholder="Password" required>
                            <span class="toggle-password" id="togglePassword">
                                <img src="https://img.icons8.com/ios-glyphs/30/null/hide.png" alt="toggle password visibility" id="eyeIcon">
                            </span>
                        </div>
                        <br><br>
                    
                        <!-- Botón de Enviar -->
                        <input type="submit" value="Enviar">
                    </form>
                    </body>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">"Antes que cualquier otra cosa, preparacion es la llave del exito"</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-3 gx-lg-4">
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">REGISTRATE</h2>
                            <p class="card-text">Esta pagina te va ayudara a registrarte para que comiences tus clases</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success" href="registrate.php">Ver mas...</a></div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">NIVELES DE APRENDIZAJE</h2>
                            <p class="card-text">Esta pagina te va ayudara a saber en que nivel de aprendizaje estas</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success" href="niveles-de-aprendizaje.html">Ver mas...</a></div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">CONTACTANOS</h2>
                            <p class="card-text">Esta pagina te ayudara a contactarnos con nuestros asesores para que te ayuden</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success" href="contactos.html">Ver mas...</a></div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">INTEGRANTES</h2>
                            <p class="card-text">Esta pagina te va ayudara a saber maber quienes somos</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success" href="integrantes.html">Ver mas...</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <center>
        <footer>
            Intitucion Educativa "AGUSTO E. MEDINA" De Comfenalco
        </footer>
          <a href="https://www.colegiocomfenalcoibague.edu.co/index.php/10-plan-de-accion-asopadres/17-plataforma-virtual#.com" target="_blank">sitio web institucional</a>
          <br>
          <a href="https://aulavirtual.comfenalco.com.co/colegioibague/moodle/login/index.php" target="_blank">aula virtual</a>
          <br>
          <a href="https://educacion.comfenalco.com.co:8082/Agora/#/login" target="_blank">portal educativo</a>
        </br>
        <footer id="g-footer">
            <div class="g-container">                                <div class="g-grid">   
            <br>    
            <footer class="py-5 bg-dark">
                <div class="g-container">                                <div class="g-grid">                        
                    <center>
                     <div class="g-block size-100">
                        <div id="custom-1690-particle" class="g-content g-particle">            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1294.187897940357!2d-75.15823702399304!3d4.409002938810054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe96b934c15dd50e8!2sColegio+Comfenalco+Ibague!5e0!3m2!1ses-419!2sco!4v1505169320959" width="1200" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <br>
                            <br>  
                           <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Copyright © 2017 Colegio Comfenalco Tolima, Todos los Derechos Reservados</p></div>
                </div>
        </div>
      </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
