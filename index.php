<?php

//require_once 'vendor\autoload.php';

require_once "datos.php";

use App\Models\Blog;

require_once "app/models/Blog.php";

/* 
$blg = Blog::getInstancia();
$blg->set($blogs,$comments); */

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
    <link rel="stylesheet" href="./css/screen.css">
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="./css/web.css">
    <link rel="stylesheet" href="./css/sidebar.css">


</head>

<body>
    <section id="wrapper">
        <header id="header">
            <div class="top">
                <nav>
                    <ul class="navigation">
                        <li><a href="index_sb.php">Home</a></li>
                        <li><a href="about_sb.php">About</a></li>
                        <li><a href="contact_sb.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <hgroup>
                <h2><a href="index_sb.php/">symblog</a></h2>
                <h3><a href="index_sb.php/">creating a blog in Symfony2</a></h3>
            </hgroup>
        </header>
        <div class="dis">
            <section class="main-col">

                <?php
                foreach ($blogs as $key => $value) {
                    echo "<article class='blog'>
                <div class='date'>
                    <time datetime=''>" . $value->getCreated() . "</time>
                </div>
                <header>
                    <h2><a href='show_sb.php?id=n'>" . $value->getTitle() . "</a></h2>
                </header>
                <img src='./img/" . $value->getImage() . "'/>
                <div class='snippet'>
                    <p>" . $value->getBlog() . "</p>
                    <p class='continue'><a href='#'>Continue reading...</a></p>
                </div>
                <footer class='meta'>
                    <p>Comments: <a href='#'>" . $value->getNComment() . " </a></p>
                    <p>Posted by <span class='highlight'>" . $value->getAuthor() . "</span> at " . $value->getHora() . "</p>
                    <p>Tags: <span class='highlight'>" . $value->getTags() . "</span></p>
                </footer>
            </article>";
                }

                ?>

                <!-- <article class="blog">
                <div class="date">'
                    <time datetime=" "> </time>
                </div>
                <header>
                    <h2><a href="show_sb.php?id=n"> Titulo blog </a></h2>
                </header>'
                <img src="./img/imagen.png" />
                <div class="snippet">
                    <p> blog </p>'
                    <p class="continue"><a href="#">Continue reading...</a></p>
                </div>'
                <footer class="meta">'
                    <p>Comments: <a href="#"> Numero comentarios </a></p>
                    <p>Posted by <span class="highlight">dsyph3r</span> at 07:06PM</p>
                    <p>Tags: <span class="highlight">symfony2, php, paradise, symblog</span></p>
                </footer>
            </article> -->
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