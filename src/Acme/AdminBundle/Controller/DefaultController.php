<?php

namespace App\Acme\AdminBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'Mon premier controller',
        ]);
    }
}