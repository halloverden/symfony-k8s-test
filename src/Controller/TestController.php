<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 *
 * @package App\Controller
 *
 * @Route(path="/test", methods={"GET"}, name="testlol")
 */
class TestController extends AbstractController {

  public function __invoke(): Response {
    return new Response("hei");
  }

}
