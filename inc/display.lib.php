<?php

//$path = $_SERVER['SERVER_NAME'];

function display_header() {
    include ("header.inc.php");
}

function display_menu() {
    include ("menu.inc.php");
}

function display_slider() {
    include ("slider.inc.php");
}

function box_home() {
    include ("box-home.inc.php");
}

function box_home_accesorios() {
    include ("box-home-accesorios.inc.php");
}

function display_nav_left() {
    include ("nav-left.inc.php");
}

function display_nav_right() {
    include ("nav-right.inc.php");
}

function display_nav_product() {
    include ("menu-product.php");
}

function display_footer_link() {
    include ("footer-link.inc.php");
}

function display_footer() {
    include ("footer.inc.php");
}

function display_breadcrumb() {
    include ("breadcrumb.inc.php");
}

function display_carousel() {
    include ("carousel.inc.php");
}
function display_carousel_sub() {
    include ("carousel_sub.inc.php");
}

?>











<?php

function display_breadcrumb_gallery_vestidos() {
    $index = "/index.php"; //index
    $novias = "/vestido-novias.php";
    echo '<ul class = "breadcrumb">';
    echo '<li><a href = "' . $index . '">Inicio</a> <span class = "divider">/</span></li>';
    echo '<li><a href = "' . $novias . '">Galería Vestidos Novias</a> <span class = "divider">/</span></li>';
    echo '<li class = "active">Vestido Novias</li>';
    echo '</ul>';
}

function display_breadcrumb_gallery_calzado() {
    $index = "/index.php"; //index
    $calzado = "/calzado.php";
    echo '<ul class = "breadcrumb">';
    echo '<li><a href = "' . $index . '">Inicio</a> <span class = "divider">/</span></li>';
    echo '<li><a href = "' . $calzado . '">Galería Calzado</a> <span class = "divider">/</span></li>';
    echo '<li class = "active">Calzado</li>';
    echo '</ul>';
}

function display_breadcrumb_gallery_complementos() {
    $index = "/index.php"; //index
    $complementos = "/complementos.php";
    echo '<ul class = "breadcrumb">';
    echo '<li><a href = "' . $index . '">Inicio</a> <span class = "divider">/</span></li>';
    echo '<li><a href = "' . $complementos . '">Galería Complementos</a> <span class = "divider">/</span></li>';
    echo '<li class = "active">Complementos</li>';
    echo '</ul>';
}

function display_breadcrumb_gallery_tirantes() {
    $index = "/index.php"; //index
    $tirantes = "/tirantes-novias.php";
    echo '<ul class = "breadcrumb">';
    echo '<li><a href = "' . $index . '">Inicio</a> <span class = "divider">/</span></li>';
    echo '<li><a href = "' . $tirantes . '">Galería Tirantes</a> <span class = "divider">/</span></li>';
    echo '<li class = "active">Tirantes</li>';
    echo '</ul>';
}




?>