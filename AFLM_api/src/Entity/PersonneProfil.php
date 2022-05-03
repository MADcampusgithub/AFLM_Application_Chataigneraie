<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PersonneProfilRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=PersonneProfilRepository::class)
 */
class PersonneProfil
{
    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $Annee;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="personneProfils")
     * @ORM\JoinColumn(nullable=false)
     */
    private $PersonnesProfils;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="personneProfils")
     * @ORM\JoinColumn(nullable=false)
     */
    private $PersonneProfils;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnnee(): ?string
    {
        return $this->Annee;
    }

    public function setAnnee(?string $Annee): self
    {
        $this->Annee = $Annee;

        return $this;
    }

    public function getPersonnesProfils(): ?Personne
    {
        return $this->PersonnesProfils;
    }

    public function setPersonnesProfils(?Personne $PersonnesProfils): self
    {
        $this->PersonnesProfils = $PersonnesProfils;

        return $this;
    }

    public function getPersonneProfils(): ?Profil
    {
        return $this->PersonneProfils;
    }

    public function setPersonneProfils(?Profil $PersonneProfils): self
    {
        $this->PersonneProfils = $PersonneProfils;

        return $this;
    }
}
