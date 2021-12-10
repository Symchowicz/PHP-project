<?php
    namespace App\controllers;

    use App\controllers\BaseController;

    class ErrorController extends BaseController
    {
        public function executeNoRoute() {
            $this->render(
                "404.php",
                [],
                "404"
            );
        }
    }