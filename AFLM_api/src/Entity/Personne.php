<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 */
class Personne
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
    private $Per_Nom;

    /**
     * @ORM\Column(type="string", length=38, nullable=true)
     */
    private $Per_Prenom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Per_Mail;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Per_Num;

    /**
     * @ORM\ManyToOne(targetEntity=Entreprise::class, inversedBy="Ent_Personne")
     */
    private $Per_Entreprise;

    /**
     * @ORM\ManyToMany(targetEntity=Profil::class, mappedBy="Pro_Personne")
     */
    private $Per_Profils;

    /**
     * @ORM\OneToMany(targetEntity=Fonction::class, mappedBy="Fon_Personne")
     */
    private $Ent_Fonctions;

    public function __construct()
    {
        $this->Per_Profils = new ArrayCollection();
        $this->Ent_Fonctions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPerNom(): ?string
    {
        return $this->Per_Nom;
    }

    public function setPerNom(string $Per_Nom): self
    {
        $this->Per_Nom = $Per_Nom;

        return $this;
    }

    public function getPerPrenom(): ?string
    {
        return $this->Per_Prenom;
    }

    public function setPerPrenom(?string $Per_Prenom): self
    {
        $this->Per_Prenom = $Per_Prenom;

        return $this;
    }

    public function getPerMail(): ?string
    {
        return $this->Per_Mail;
    }

    public function setPerMail(?string $Per_Mail): self
    {
        $this->Per_Mail = $Per_Mail;

        return $this;
    }

    public function getPerNum(): ?string
    {
        return $this->Per_Num;
    }

    public function setPerNum(?string $Per_Num): self
    {
        $this->Per_Num = $Per_Num;

        return $this;
    }

    public function getPerEntreprise(): ?Entreprise
    {
        return $this->Per_Entreprise;
    }

    public function setPerEntreprise(?Entreprise $Per_Entreprise): self
    {
        $this->Per_Entreprise = $Per_Entreprise;

        return $this;
    }

    /**
     * @return Collection<int, Profil>
     */
    public function getPerProfils(): Collection
    {
        return $this->Per_Profils;
    }

    public function addPerProfil(Profil $perProfil): self
    {
        if (!$this->Per_Profils->contains($perProfil)) {
            $this->Per_Profils[] = $perProfil;
            $perProfil->addProPersonne($this);
        }

        return $this;
    }

    public function removePerProfil(Profil $perProfil): self
    {
        if ($this->Per_Profils->removeElement($perProfil)) {
            $perProfil->removeProPersonne($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Fonction>
     */
    public function getEntFonctions(): Collection
    {
        return $this->Ent_Fonctions;
    }

    public function addEntFonction(Fonction $entFonction): self
    {
        if (!$this->Ent_Fonctions->contains($entFonction)) {
            $this->Ent_Fonctions[] = $entFonction;
            $entFonction->setFonPersonne($this);
        }

        return $this;
    }

    public function removeEntFonction(Fonction $entFonction): self
    {
        if ($this->Ent_Fonctions->removeElement($entFonction)) {
            // set the owning side to null (unless already changed)
            if ($entFonction->getFonPersonne() === $this) {
                $entFonction->setFonPersonne(null);
            }
        }

        return $this;
    }
}
