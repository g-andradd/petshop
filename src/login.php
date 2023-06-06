<?php

use App\Controller\LoginController;

require_once "./controller/LoginController.php";

$loginController = new LoginController();

$loginController->verificarLogin();
