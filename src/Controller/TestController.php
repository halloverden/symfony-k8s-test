<?php


namespace App\Controller;

use App\Entity\Test;
use Doctrine\ORM\EntityManagerInterface;
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
   * @var EntityManagerInterface
   */
  private EntityManagerInterface $em;

  /**
   * TestController constructor.
   *
   * @param EntityManagerInterface $em
   */
  public function __construct(EntityManagerInterface $em) {
    $this->em = $em;
  }


  /**
   * @Route("/test", name="testxd")
   */
  public function testing() {
    $test = new Test();
    $test->setTest('hei');
    $this->em->persist($test);
    $this->em->flush();

    $tests = $this->em->getRepository(Test::class)->findAll();

    $out = [];
    /** @var Test $test */
    foreach ($tests as $test) {
      $out[] = $test->getId();
    }

    return new Response('ok version 1 - ' . join(',', $out));
  }

}
