<?php
include($_SERVER["DOCUMENT_ROOT"] . "/../services/Autoload.php");

use App\services\Db;
use App\services\Autoload;
use App\models\Good;

spl_autoload_register([new Autoload(), "loadClass"]);

$good = new Good();
//$good2 = new Good();

//var_dump($good->getOne(3));
var_dump($good->getAll());

//$good->address = "img/product-like4.jpg";
//$good->name = "Mango People T-shirt";
//$good->price = 222;
//$good->update(24);

//$good->delete(24);


