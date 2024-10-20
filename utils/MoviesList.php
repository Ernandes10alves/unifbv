<?php

require_once __DIR__ . "/AbstractRun.php";
require_once __DIR__ . "/MovieCard.php";

class MoviesList extends AbstractRun
{
    public function run()
    {
?>
        <style>
            .listCards {
                columns: 200px;
                padding: 10px;
            }
        </style>
        <div class="listCards">
            <?php
            for ($i = 0; $i < 20; $i++) {
                $movie = new MovieCard("/imgs/acabana.jpg", "A Cabana", 3);
                $movie->run();
            }
            ?>
        </div>
<?php
    }
}
