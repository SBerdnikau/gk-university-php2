<?php


namespace App\controllers;

use App\models\Good;

class GoodController extends Controller
{
    protected $defaultAction = "goods";

    public function goodAction()
    {
        $id = (int)$_GET["id"];
        $params = [
            "good" => Good::getOne($id),
        ];

        echo $this->render("good", $params);
    }

    public function goodsAction()
    {
        $params = [
            "goods" => Good::getAll(),
        ];

        echo $this->render("goods", $params);
    }

    public function deleteAction()
    {
        $id = (int)$_GET['id'];
        $good = Good::getOne($id);
        $good->delete();
        header('Location: ?c=good&a=goods');
    }

    public function insertAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $good = new Good();
            $good->name = $_POST['name'];
            $good->price = $_POST['price'];
            $good->address= $_POST['address'];
            $good->save();
            header('Location: ?c=good&a=goods');
            exit;
        }
        echo $this->render('goodInsert', []);
    }

}