<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @return Response
     * @Route("/admin", name="admin")
     */
    public function index() {
        return $this->render('admin/admin.html.twig');
    }
}