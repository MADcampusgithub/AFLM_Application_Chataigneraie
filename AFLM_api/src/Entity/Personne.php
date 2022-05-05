<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 * @ApiResource(
 *      collectionOperations = {
 *          "get",
 *          "post",
 *      },
 *      itemOperations = {
 *          "get",
 *          "put",
 *          "delete",
 *      }
 * )
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
     * @ORM\ManyToOne(targetEntity=Fonction::class, inversedBy="Fon_Personne")
     */
    private $Per_Fonction;

    /**
     * @ORM\OneToMany(targetEntity=PersonneProfil::class, mappedBy="Personne", cascade={"persist", "remove"})
     */
    private $PersonnesProfils;

    public function __construct()
    {
        $this->Per_Profils = new ArrayCollection();
        $this->Ent_Fonctions = new ArrayCollection();
        $this->PersonnesProfils = new ArrayCollection();
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

    public function getPerFonction(): ?Fonction
    {
        return $this->Per_Fonction;
    }

    public function setPerFonction(?Fonction $Per_Fonction): self
    {
        $this->Per_Fonction = $Per_Fonction;

        return $this;
    }

    /**
     * @return Collection<int, PersonneProfil>
     */
    public function getPersonneProfils(): Collection
    {
        return $this->PersonnesProfils;
    }

    public function addPersonneProfil(PersonneProfil $personneProfil): self
    {
        if (!$this->PersonnesProfils->contains($personneProfil)) {
            $this->PersonnesProfils[] = $personneProfil;
            $personneProfil->setPersonne($this);
        }

        return $this;
    }

    public function removePersonneProfil(PersonneProfil $personneProfil): self
    {
        if ($this->PersonnesProfils->removeElement($personneProfil)) {
            // set the owning side to null (unless already changed)
            if ($personneProfil->getPersonne() === $this) {
                $personneProfil->setPersonne(null);
            }
        }

        return $this;
    }
}
