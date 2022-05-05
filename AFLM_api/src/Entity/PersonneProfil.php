<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PersonneProfilRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneProfilRepository::class)
 * @ApiResource(
 *      collectionOperations = {
 *          "get",
 *          "post",
 *      },
 *      itemOperations = {
 *          "get",
 *          "delete",
 *      }
 * )
 */
class PersonneProfil
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $Annee;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="PersonnesProfils")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Personne;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="PersonnesProfils")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Profil;

    public function getAnnee(): ?string
    {
        return $this->Annee;
    }

    public function setAnnee(?string $Annee): self
    {
        $this->Annee = $Annee;

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->Personne;
    }

    public function setPersonne(?Personne $PersonnesProfils): self
    {
        $this->Personne = $PersonnesProfils;

        return $this;
    }

    public function getProfil(): ?Profil
    {
        return $this->Profil;
    }

    public function setProfil(?Profil $PersonneProfils): self
    {
        $this->Profil = $PersonneProfils;

        return $this;
    }
}
