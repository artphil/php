<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

class LogoutController implements Controller
{
    public function __construct()
    {
    }

    public function processaRequisicao(): void
    {
            $_SESSION['login'] = false;
            header('Location: /login');
            return;
    }
}
