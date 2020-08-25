<?php


namespace GabsDSousa\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Class Course
 * @package GabsDSousa\Doctrine\Entity
 * @Entity
 */
class Course
{
    /**
     * @var int
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string")
     */
    private $name;

    /**
     * @var ArrayCollection
     * @ManyToMany(targetEntity="Student", inversedBy="courses")
     */
    private $students;

    public function __construct()
    {
        $this->students = new ArrayCollection();
    }

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
     * @return Course
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param Student $student
     * @return $this
     */
    public function addStudent(Student $student): self
    {
        if ($this->students->contains($student)) {
            return $this;
        }

        $this->students->add($student);
        $student->addCourse($this);
        return $this;
    }

    /**
     * @return Collection
     */
    public function getStudent(): Collection
    {
        return $this->students;
    }
}