<?php
require("php/conexion.php");
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8 />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style_index.css">
</head>

<body>

    <header class="logo">
        <a>huerta</a>

    </header>
    <header class="menu">
        <ul>
            <li><a href="#" class="active">Inicio</a></li>
            <li><a href="Inicio_sesion.php">Inicio Sesion</a></li>
            <li><a href="form_registro.php">Registro</a></li>
        </ul>
    </header>


    <section>
        <h2 id="text">¡Bienvenidos!</h2>
        <a href="#sec" id="btn">¿Que es la huerta?</a>
    </section>


    <div class="sec" id="sec">
        <h2>Naturaleza con esperanza</h2>
        <p>Reactivar el aula verde como instrumento generador de experiencias interdisciplinarias que ayuden al desarrollo personal como
            proyección hacia el cuidado y aprovechamiento de los recursos naturales para su beneficio y el de su comunidad. <br>
            <center>
                <img src="IMG/Naturaleza.png" alt="" class="img">
            </center>
        </p><br><br>
        <h2>Antecedentes</h2>
        <p>Toda obra es tangible cuando se comienza con un espacio real, el cual lo pudimos obtener a partir del año 2006, porque era un empeño
            de los profesores integrantes del Área de Ciencias Naturales, desde hace 4 años atrás, se fue perfilando esta idea como algo quijotesco
            e irrealizable, solo en la memoria caliente de algunos, pero el que persevera alcanza, como dirá nuestro compañero Fernando González.
            Hoy nuestra aula verde es una realidad de la cual nos podemos enorgullecernos, pero necesita cuidado, perseverancia y dedicación como
            no lo ha demostrado el profesor Nilson Ariza, quién en años anteriores logro poner en funcionamiento con la colaboración de los
            estudiantes del colegio, el proceso de cultivar en un terreno que otrora, era un espacio baldío. Vean ustedes algunos cambios que se
            han dado en este espacio y juzguen si ha valido la pena. <br><br>
            <center>
                <img src="IMG/Antesedentes.png" alt="" class="img">
            </center>
        </p><br><br>
        <h2>!Algo más que un Aula viva¡</h2>
        <p>
            Se comenzó el proceso de adaptar el terreno desde el día 1 de marzo de 2006, la construcción del invernadero y durante el resto del
            año se cultivó: maíz, fríjol, lechuga, repollo, tomate, papa, arveja, brócoli, coliflor, tallos, acelga, ajo, cebolla, etc.

            El proyecto busca involucrar también a las madres-padres de familia, para que lo desarrollen en sus casas como parte fundamental en el cultivo a bajo
            costo, con abono orgánico y productos de calidad en lo que se denomina Agricultura Urbana.
            <br>
            <br><br>
            <center>
                <img src="IMG/huerta.jpg" class="img">
            </center>
        </p><br><br>
        <h2>Fase de consolidación 2011</h2>
        <p>"Formación de Lideres Agroecológicos en el sur de Bogotá y su área metropolitana”</p><br>
        <h2>Componentes</h2>
        <p>1.Convocatoria e inscripción <br> 2.Capacitación <br> 3.Aula Verde (estructuración) <br> 4.Proyectos productivos </p><br>
        <h2>Capacitación</h2>
        <p>Objetivo: que los estudiantes del CEDID, logren adquirir la capacidad y destreza necesaria para responder a las necesidades de la
            localidad de Ciudad Bolívar, permitiendo la construcción de una visión positiva de sus propias capacidades, una orientación a sus
            perspectivas personales, desarrollo de sus proyectos productivos y/o preparase para el mercado laboral. <br>
            <center>
                <img src="#" alt="">
            </center>
        </p><br><br>
        <h2>Proyectos productivos</h2>
        <p>Proyectos Productivos enfocados a Seguridad alimentaría: Con el objeto de garantizar como resultado del proceso de formación una mejora en
            la calidad de vida de los egresados, los líderes formados desarrollarán proyectos productivos de agricultura urbana o pecuarios en su
            entorno, contribuyendo así a la seguridad alimentaria de la región.
        </p><br>
        <h2>Proyección</h2>
        <p>1.Se busca implementar en proyectos dando así continuidad a el aula, permitiendo un espacio activo de investigación y consolidación del
            conocimiento. <br> 2. Proyecto de Lombri-cultivo. <br> 3.Compostaje. <br> 4. Agro Cedid. <br> 5. Mariposario.
        </p><br>

        <h2>Invitacion</h2>

        <p><a href="form_registro.php" class="registrate">Registrate</a> para saber mas de la huerta</p>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        let toggle = document.querySelector('.toggle');
        let menu = document.querySelector('.menu2');

        toggle.onclick = function() {
            menu.classList.toggle('active')
        }
    </script>

</body>

</html>