<?php


namespace GabsDSousa\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

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
     * @OneToMany(targetEntity="Phone", mappedBy="student", cascade="persist", cascade="remove")
     */
    private $phones;

    public function __construct()
    {
        $this->phones = new ArrayCollection();
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
     * @return Student
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param Phone $phone
     * @return $this
     */
    public function addPhone(Phone $phone): self
    {
        $this->phones->add($phone);
        $phone->setStudent($this);
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPhones(): Collection
    {
        return $this->phones;
    }
}