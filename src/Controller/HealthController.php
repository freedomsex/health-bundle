<?php

namespace FreedomSex\HealthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HealthController extends AbstractController
{
    public function index()
    {
        return $this->json('ok');
    }
}
