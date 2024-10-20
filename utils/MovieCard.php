<?php

require_once __DIR__ . "/AbstractRun.php";

class MovieCard extends AbstractRun
{
    private static $cssOk = false;

    private string $image;
    private string $title;
    private int $starPoints;

    public function __construct($image, $title, $starPoints)
    {
        $this->image = $image;
        $this->title = $title;
        $this->starPoints = $starPoints;
    }

    private function css()
    {
        if (!self::$cssOk) {
?>
            <style>
                .cardMovie {
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                    text-align: center;
                    flex: 1;
                    max-width: 300px;
                    min-width: 200px;
                }

                .cardMovie .img {
                    height: 200px;
                    background-size: cover;
                    background-position: center;
                }
            </style>
        <?php
            self::$cssOk = true;
        }
    }

    public function run()
    {
        $this->css();
        ?>
        <div class="cardMovie">
            <div class="img" style="background-image:url(<?php echo $this->image; ?>)">
            </div>
            <div>
                <?php echo $this->title; ?>
            </div>
            <div>
                <?php echo $this->starPoints; ?>
            </div>
        </div>
<?php
    }
}
