<?php

require_once "../utils/Template.php";
require_once "../utils/Menu.php";

$template = new Template(
    function () {
        $menu = new Menu();
        $menu->run();
        echo "Crie o código da lista de filmes";
    },
    "Lista de filmes"
);

echo $template->run();
