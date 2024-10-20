<?php

require_once __DIR__ . "/AbstractRun.php";

class MovieCard extends AbstractRun
{
    private string $image;
    private string $title;
    private int $starPoints;

    public function __construct($image, $title, $starPoints)
    {
        $this->image = $image;
        $this->title = $title;
        $this->starPoints = $starPoints;
    }

    public function run()
    {
?>
        <style>
            .cardMovie {
                display: flex;
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .cardMovie img {
                max-width: 200px;
                max-height: 200px;
            }
        </style>
        <div class="cardMovie">
            <div>
                <img alt="<?php echo $this->title; ?>" src="<?php echo $this->image; ?>" />
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
