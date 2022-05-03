<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
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

    /**
     * @ORM\ManyToMany(targetEntity=Specialite::class, mappedBy="Spe_Entreprise")
     */
    private $Ent_Specialite;

    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="Pay_Entreprise")
     */
    private $Ent_Pays;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class, inversedBy="Vil_Entreprise")
     */
    private $Ent_Ville;

    /**
     * @ORM\OneToMany(targetEntity=Personne::class, mappedBy="Per_Entreprise")
     */
    private $Ent_Personne;

    public function __construct()
    {
        $this->Ent_Specialite = new ArrayCollection();
        $this->Ent_Personne = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Specialite>
     */
    public function getEntSpecialite(): Collection
    {
        return $this->Ent_Specialite;
    }

    public function addEntSpecialite(Specialite $entSpecialite): self
    {
        if (!$this->Ent_Specialite->contains($entSpecialite)) {
            $this->Ent_Specialite[] = $entSpecialite;
            $entSpecialite->addSpeEntreprise($this);
        }

        return $this;
    }

    public function removeEntSpecialite(Specialite $entSpecialite): self
    {
        if ($this->Ent_Specialite->removeElement($entSpecialite)) {
            $entSpecialite->removeSpeEntreprise($this);
        }

        return $this;
    }

    public function getEntPays(): ?Pays
    {
        return $this->Ent_Pays;
    }

    public function setEntPays(?Pays $Ent_Pays): self
    {
        $this->Ent_Pays = $Ent_Pays;

        return $this;
    }

    public function getEntVille(): ?Ville
    {
        return $this->Ent_Ville;
    }

    public function setEntVille(?Ville $Ent_Ville): self
    {
        $this->Ent_Ville = $Ent_Ville;

        return $this;
    }

    /**
     * @return Collection<int, Personne>
     */
    public function getEntPersonne(): Collection
    {
        return $this->Ent_Personne;
    }

    public function addEntPersonne(Personne $entPersonne): self
    {
        if (!$this->Ent_Personne->contains($entPersonne)) {
            $this->Ent_Personne[] = $entPersonne;
            $entPersonne->setPerEntreprise($this);
        }

        return $this;
    }

    public function removeEntPersonne(Personne $entPersonne): self
    {
        if ($this->Ent_Personne->removeElement($entPersonne)) {
            // set the owning side to null (unless already changed)
            if ($entPersonne->getPerEntreprise() === $this) {
                $entPersonne->setPerEntreprise(null);
            }
        }

        return $this;
    }
}
