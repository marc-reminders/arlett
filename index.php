<?php
include('header.php');

$page = 'index';

if (isset($_GET['page'])) {
    if (file_exists('pages/' . $_GET['page'] . '.php'))
        $page = $_GET['page'];
}


include 'pages/' . $page . '.php';

include("footer.php");