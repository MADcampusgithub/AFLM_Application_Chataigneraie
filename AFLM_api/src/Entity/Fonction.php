<?php

namespace App\Entity;

use App\Repository\FonctionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=FonctionRepository::class)
 * @ApiResource(
 *      collectionOperations = {
 *          "get",
 *      },
 *      itemOperations = {}
 * )
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
     * @ORM\OneToMany(targetEntity=Personne::class, mappedBy="Per_Fonction")
     */
    private $Fon_Personne;

    public function __construct()
    {
        $this->Fon_Personne = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Personne>
     */
    public function getFonPersonne(): Collection
    {
        return $this->Fon_Personne;
    }

    public function addFonPersonne(Personne $fonPersonne): self
    {
        if (!$this->Fon_Personne->contains($fonPersonne)) {
            $this->Fon_Personne[] = $fonPersonne;
            $fonPersonne->setPerFonction($this);
        }

        return $this;
    }

    public function removeFonPersonne(Personne $fonPersonne): self
    {
        if ($this->Fon_Personne->removeElement($fonPersonne)) {
            // set the owning side to null (unless already changed)
            if ($fonPersonne->getPerFonction() === $this) {
                $fonPersonne->setPerFonction(null);
            }
        }

        return $this;
    }
}
