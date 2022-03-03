<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Droit;

    /**
     * @ORM\Column(type="string", length=38)
     */
    private $Login;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $MDP;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDroit(): ?bool
    {
        return $this->Droit;
    }

    public function setDroit(bool $Droit): self
    {
        $this->Droit = $Droit;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $Login): self
    {
        $this->Login = $Login;

        return $this;
    }

    public function getMDP(): ?string
    {
        return $this->MDP;
    }

    public function setMDP(string $MDP): self
    {
        $this->MDP = $MDP;

        return $this;
    }
}
