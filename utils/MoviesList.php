<?php

require_once __DIR__ . "/AbstractRun.php";
require_once __DIR__ . "/MovieCard.php";
require_once __DIR__ . "/ModelMovies.php";

class MoviesList extends AbstractRun
{
    public function run()
    {
?>
        <style>
            .listCards {
                padding: 20px;
                display: flex;
                flex-direction: row;
                gap: 20px;
                flex-wrap: wrap;
            }
        </style>
        <div class="listCards">
            <?php
            $dbMovies = new ModelMovies();
            $list = $dbMovies->list();
            foreach ($list as $movie) {
                $movie = new MovieCard($movie['image'], $movie['filme'], $movie['point']);
                $movie->run();
            }
            ?>
        </div>
<?php
    }
}
