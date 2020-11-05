<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Test
 *
 * @package App\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="test")
 */
class Test {

  /**
   * @var int
   *
   * @ORM\Id()
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Column(name="id", type="integer")
   */
  private int $id;

  /**
   * @var string
   *
   * @ORM\Column(name="test", type="string")
   */
  private string $test;

  /**
   * @return int
   */
  public function getId(): int {
    return $this->id;
  }

  /**
   * @param int $id
   *
   * @return Test
   */
  public function setId(int $id): self {
    $this->id = $id;
    return $this;
  }

  /**
   * @return string
   */
  public function getTest(): string {
    return $this->test;
  }

  /**
   * @param string $test
   *
   * @return Test
   */
  public function setTest(string $test): self {
    $this->test = $test;
    return $this;
  }

}
