<?php

namespace App\Entity;

use App\Repository\VilleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=VilleRepository::class)
 * @ApiResource(
 *      collectionOperations = {
 *          "get",
 *      },
 *      itemOperations = {
 *          "get",    
 *      }
 * )
 */
class Ville
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
    private $Vil_Nom;

    /**
     * @ORM\OneToMany(targetEntity=Entreprise::class, mappedBy="Ent_Ville")
     */
    private $Vil_Entreprise;

    public function __construct()
    {
        $this->Vil_Entreprise = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVilNom(): ?string
    {
        return $this->Vil_Nom;
    }

    public function setVilNom(string $Vil_Nom): self
    {
        $this->Vil_Nom = $Vil_Nom;

        return $this;
    }

    /**
     * @return Collection<int, Entreprise>
     */
    public function getVilEntreprise(): Collection
    {
        return $this->Vil_Entreprise;
    }

    public function addVilEntreprise(Entreprise $vilEntreprise): self
    {
        if (!$this->Vil_Entreprise->contains($vilEntreprise)) {
            $this->Vil_Entreprise[] = $vilEntreprise;
            $vilEntreprise->setEntVille($this);
        }

        return $this;
    }

    public function removeVilEntreprise(Entreprise $vilEntreprise): self
    {
        if ($this->Vil_Entreprise->removeElement($vilEntreprise)) {
            // set the owning side to null (unless already changed)
            if ($vilEntreprise->getEntVille() === $this) {
                $vilEntreprise->setEntVille(null);
            }
        }

        return $this;
    }
}
