<?php
require_once __DIR__ . "/AbstractRun.php";


class Menu extends AbstractRun
{
    function run()
    {
?>
        <style>
            .menuTop {
                display: flex;
                flex-direction: row;
                position: static;
                font-weight: bold;
                gap: 5px;
            }

            .menuTop>a {
                padding: 15px 20px;
                cursor: pointer;
                color: inherit;
                text-decoration: unset;
                border-bottom: solid 3px #07a;
                transition: .5s;
            }

            .menuTop>a:hover {
                border-bottom-color: #fff;
            }
        </style>

        <div class="menuTop">
            <a href="/">HOME</a>
            <a href="/filmes">FILMES</a>
        </div>
<?php
    }
}
