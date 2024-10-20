<?php

require_once "./utils/Template.php";
require_once "./utils/Menu.php";
require_once "./utils/MoviesList.php";

$template = new Template(
    function () {
        $menu = new Menu();
        $menu->run();

        $cardsList = new MoviesList();
        $cardsList->run();
    },
    "Página inicial"
);

echo $template->run();
