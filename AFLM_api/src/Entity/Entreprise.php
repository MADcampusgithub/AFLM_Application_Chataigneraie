<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Ent_Rs;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Ent_Adresse1;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Ent_Adresse2;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Ent_Adresse3;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $Ent_CP;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntRs(): ?string
    {
        return $this->Ent_Rs;
    }

    public function setEntRs(string $Ent_Rs): self
    {
        $this->Ent_Rs = $Ent_Rs;

        return $this;
    }

    public function getEntAdresse1(): ?string
    {
        return $this->Ent_Adresse1;
    }

    public function setEntAdresse1(string $Ent_Adresse1): self
    {
        $this->Ent_Adresse1 = $Ent_Adresse1;

        return $this;
    }

    public function getEntAdresse2(): ?string
    {
        return $this->Ent_Adresse2;
    }

    public function setEntAdresse2(?string $Ent_Adresse2): self
    {
        $this->Ent_Adresse2 = $Ent_Adresse2;

        return $this;
    }

    public function getEntAdresse3(): ?string
    {
        return $this->Ent_Adresse3;
    }

    public function setEntAdresse3(?string $Ent_Adresse3): self
    {
        $this->Ent_Adresse3 = $Ent_Adresse3;

        return $this;
    }

    public function getEntCP(): ?string
    {
        return $this->Ent_CP;
    }

    public function setEntCP(?string $Ent_CP): self
    {
        $this->Ent_CP = $Ent_CP;

        return $this;
    }
}
