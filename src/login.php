<?php

use App\controller\LoginController;

require_once "./controller/LoginController.php";

$loginController = new LoginController();

$loginController->verificarLogin();
