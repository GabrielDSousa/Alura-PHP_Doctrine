<?php


namespace GabsDSousa\Doctrine\Entity;

/**
 * Class Phone
 * @package GabsDSousa\Doctrine\Entity
 * @Entity
 */

class Phone
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
    private $number;

    /**
     * @ManyToOne(targetEntity="Student")
     */
    private $student;

    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Phone
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return Phone
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return Student
     */
    public function getStudent(): Student
    {
        return $this->student;
    }

    /**
     * @param Student $student
     * @return $this
     */
    public function setStudent(Student $student): self
    {
        $this->student = $student;
        return $this;
    }
}