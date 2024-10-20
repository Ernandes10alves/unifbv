<?php



class ModelMovies
{
    public static $db = NULL;

    public function __construct()
    {
        if (self::$db === NULL) {
            self::$db = new PDO('sqlite:myDb.db');
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        $this->createTable();
    }

    private function createTable()
    {
        self::$db->exec("CREATE TABLE IF NOT EXISTS movies (
            id INTEGER PRIMARY KEY AUTOINCREMENT, 
            filme TEXT, 
            image TEXT,
            point INTEGER
        )");
        // $this->dataTest();
    }

    private function dataTest()
    {
        $this->insert("Home de ferro", "imgs/homemdeferro.jpg", 4);
        $this->insert("Homem aranha", "imgs/homemaranha.jpg", 5);
        $this->insert("Super man", "imgs/superman.jpg", 4);
        $this->insert("Capitão américa", "imgs/captaoameria.jpg", 4);
        $this->insert("Dead Pool", "imgs/deadpool.jpg", 4);
    }

    function insert(string $filme, string $image, int $point)
    {
        $smtp = self::$db->prepare("INSERT into movies (filme, image, point) values (:filme, :image, :point)");
        return $smtp->execute(["filme" => $filme, "image" => $image, "point" => $point]);
    }

    function list()
    {
        return self::$db->query("SELECT * FROM movies ORDER BY filme");
    }
}
