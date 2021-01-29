
<?php
require_once './vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'bd_symblog',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);


if(!empty($_POST)){
    
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Mario Osuna Ordóñez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mario Osuna Ordóñez</title>
    <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="./img/favicon.png" />
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="./css/screen.css">
    <link rel="stylesheet" href="./css/web.css">
    <link rel="stylesheet" href="./css/sidebar.css">


</head>

<body>
    <section id="wrapper">
        <header id="header">
            <div class="top">
                <nav>
                    <ul class="navigation">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="addBlog.php">Añadir blog</a></li>

                    </ul>
                </nav>
            </div>
            <hgroup>
                <h2><a href="index.php/">symblog</a></h2>
                <h3><a href="index.php/">creating a blog in Symfony2</a></h3>
            </hgroup>
        </header>
        <div class="dis">
            <section class="main-col">
            <h2>Añadir formulario</h2>
                <form id="formulario" action="addBlog.php" method="get">
                    <div>Title:&nbsp;&nbsp;<input type="text"></div><br>
                    <div>Description:&nbsp;&nbsp;<textarea name="" id="" cols="50" rows="10"></textarea></div><br>
                    <div>Tags:&nbsp;&nbsp;<input type="text"></div><br>
                    <div>Author:&nbsp;&nbsp;<input type="text"></div><br>
                    <div><input type="submit" value="Enviar consulta" name="Enviar consulta"></div>

                </form>

            </section>
            <aside class="sidebar">
                <section class="section">
                    <header>
                        <h3>Tag Cloud</h3>
                    </header>
                    <p class="tags">
                        <span class="weight-1">magic</span>
                        <span class="weight-5">symblog</span>
                        <span class="weight-4">movie</span>
                    </p>
                </section>
                <section class="section">
                    <header>
                        <h3>Latest Comments</h3>
                    </header>
                    <article class="comment">
                        <header>
                            <p class="small"><span class="highlight">Carlos Aguilera</span> commented on
                                <a href="#">A day with Symfony2</a>
                            </p>
                        </header>
                        <p>Comentario Usuario</p>
                    </article>
                </section>
            </aside>
        </div>
        <div id="footer">
            dwes symblog - created by <a href="#">dwes</a>
        </div>
    </section>
</body>

</html>