<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 *
 * @package App\Controller
 */
class TestController extends AbstractController {

  /**
   * @Route("/test", name="testxd")
   */
  public function testing() {
    return new Response('ok');
  }

}
