<?php

use App\Controller\LoginController;

require_once "./Controller/LoginController.php";

$loginController = new LoginController();

$loginController->verificarLogin();
