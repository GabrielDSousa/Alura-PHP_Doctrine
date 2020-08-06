<?php


namespace GabsDSousa\Doctrine\Entity;

/**
 * Class Student
 * @package GabsDSousa\Doctrine\Entity
 * @Entity
 */

class Student
{
    /**
     * @var int
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Student
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }
}