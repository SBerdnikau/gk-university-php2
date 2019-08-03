<?php


namespace App\controllers;

use App\main\App;

class GoodController extends Controller
{
    protected $defaultAction = "goods";

    public function goodAction()
    {
        App::call()->goodRepository->increaseViews($this->getId());

        $params = [
            "good" => App::call()->goodRepository->getOne($this->getId()),
            "reviews" => App::call()->reviewRepository->getGoodReviews($this->getId()),
            "user" => $this->checkUser(),
        ];

        echo $this->render("good", $params);
    }

    public function goodsAction()
    {
        $user = $this->checkUser();
        if ($user["role"] === "isAdmin") {
            $goods = App::call()->goodRepository->getAll();
        } else {
            $sql = App::call()->goodServices->getSql($this->request);
            $goods = App::call()->goodRepository->getAll($sql);
        }

        $params = [
            "goods" => $goods,
            "user" => $user,
        ];

        echo $this->render("goods", $params);
    }

    public function deleteAction()
    {
        $this->isAdmin();

        $data = ["id" => $this->getId(), "stock" => "0"];
        App::call()->goodServices->changeGood($data);

        $this->redirect("/good");
    }

    public function changeAction()
    {
        $this->isAdmin();

        $params = $this->request->getParams("post");
        foreach ($params as $value) {
            if (empty($value)) {
                $this->redirect();
            }
        }

        App::call()->goodServices->changeGood($params);

        $this->redirect();
    }

    public function addAction()
    {
        $this->isAdmin();

        App::call()->goodServices->copyFile();

        $params = $this->request->getParams("post");
        $params["address"] = "img/{$_FILES['userfile']['name']}";
        foreach ($params as $key => $value) {
            if (empty($value)) {
                $this->redirect();
            }
        }

        App::call()->goodServices->changeGood($params);

        $this->redirect();
    }
}