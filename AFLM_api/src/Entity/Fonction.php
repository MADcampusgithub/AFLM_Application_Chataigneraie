<?php

namespace App\Entity;

use App\Repository\FonctionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FonctionRepository::class)
 */
class Fonction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=38)
     */
    private $Fon_Label;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="Ent_Fonctions")
     */
    private $Fon_Personne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFonLabel(): ?string
    {
        return $this->Fon_Label;
    }

    public function setFonLabel(string $Fon_Label): self
    {
        $this->Fon_Label = $Fon_Label;

        return $this;
    }

    public function getFonPersonne(): ?Personne
    {
        return $this->Fon_Personne;
    }

    public function setFonPersonne(?Personne $Fon_Personne): self
    {
        $this->Fon_Personne = $Fon_Personne;

        return $this;
    }
}
