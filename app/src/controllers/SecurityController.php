<?php

    namespace App\controllers;

    use App\controllers\BaseController;
    use App\models\UserManager;
    use App\config\PDOFactory;

    class SecurityController extends BaseController
    {
        public function executeLogin()
        {
            $manager = new UserManager(PDOFactory::getMysqlConnection());
            $data = $manager->getAllUsers();

            /* echo($data); */

            return $this->render('Connexion', ['users' => $data], 'login');
        }

        public function executeBdd()
        {
            $manager = new UserManager(PDOFactory::getMysqlConnection());
            $manager->setBdd();
            header('Location: localhost:5555/post-list');
        }
    }

?>