<?php

require_once __DIR__ . "/AbstractRun.php";

class Template extends AbstractRun
{
    private $children;
    private string $title;

    public function __construct(callable $children, string $title)
    {
        $this->children = $children;
        $this->title = $title;
    }

    public function run()
    {
?>
        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>
                <?php echo $this->title; ?>
            </title>
            <style>
                html,
                body {
                    margin: 0;
                    padding: 0;
                }

                body {
                    font-family: Arial, Helvetica, sans-serif;
                    display: flex;
                    justify-content: center;
                    background-color: #111;
                    color: rgba(255, 255, 255, 0.8);
                }

                .centerContainer {
                    width: 1100px;
                    max-width: 100%;
                    min-height: 100vh;
                    background-color: #000;
                }
            </style>
        </head>

        <body>
            <div class="centerContainer">
                <?php ($this->children)(); ?>
            </div>
        </body>

        </html>
<?php
    }
}

?>