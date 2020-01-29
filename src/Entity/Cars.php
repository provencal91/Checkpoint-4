<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarsRepository")
 */
class Cars
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $power;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $elevations;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $years;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pictures;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="cars")
     */
    private $cars;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Circuits", inversedBy="cars")
     */
    private $circuits;

    public function __construct()
    {
        $this->cars = new ArrayCollection();
        $this->circuits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(?int $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getElevations(): ?int
    {
        return $this->elevations;
    }

    public function setElevations(?int $elevations): self
    {
        $this->elevations = $elevations;

        return $this;
    }

    public function getYears(): ?\DateTimeInterface
    {
        return $this->years;
    }

    public function setYears(?\DateTimeInterface $years): self
    {
        $this->years = $years;

        return $this;
    }

    public function getPictures(): ?string
    {
        return $this->pictures;
    }

    public function setPictures(string $pictures): self
    {
        $this->pictures = $pictures;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getCars(): Collection
    {
        return $this->cars;
    }

    public function addCars(User $cars): self
    {
        if (!$this->cars->contains($cars)) {
            $this->cars[] = $cars;
            $cars->setCars($this);
        }

        return $this;
    }

    public function removeCars(User $cars): self
    {
        if ($this->cars->contains($cars)) {
            $this->cars->removeElement($cars);
            // set the owning side to null (unless already changed)
            if ($cars->getCars() === $this) {
                $cars->setCars(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Circuits[]
     */
    public function getCircuits(): Collection
    {
        return $this->circuits;
    }

    public function addCircuit(Circuits $circuit): self
    {
        if (!$this->circuits->contains($circuit)) {
            $this->circuits[] = $circuit;
        }

        return $this;
    }

    public function removeCircuit(Circuits $circuit): self
    {
        if ($this->circuits->contains($circuit)) {
            $this->circuits->removeElement($circuit);
        }

        return $this;
    }
}
