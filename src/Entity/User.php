<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cars", inversedBy="cars")
     */
    private $cars;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Circuits", mappedBy="circuits")
     */
    private $circuits;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Schedule", mappedBy="user")
     */
    private $user;

    public function __construct()
    {
        $this->circuits = new ArrayCollection();
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCars(): ?Cars
    {
        return $this->cars;
    }

    public function setCars(?Cars $cars): self
    {
        $this->cars = $cars;

        return $this;
    }

    /**
     * @return Collection|Circuits[]
     */
    public function getCircuits(): Collection
    {
        return $this->circuits;
    }

    public function addCircuit(Circuits $circuits): self
    {
        if (!$this->circuits->contains($circuits)) {
            $this->circuits[] = $circuits;
            $circuits->setRelation($this);
        }

        return $this;
    }

    public function removeCircuit(Circuits $circuits): self
    {
        if ($this->circuits->contains($circuits)) {
            $this->circuits->removeElement($circuits);
            // set the owning side to null (unless already changed)
            if ($circuits->getRelation() === $this) {
                $circuits->setRelation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Schedule[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(Schedule $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
            $user->setUser($this);
        }

        return $this;
    }

    public function removeUser(Schedule $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getUser() === $this) {
                $user->setUser(null);
            }
        }

        return $this;
    }
}
