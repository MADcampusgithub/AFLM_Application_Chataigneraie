<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 * @ApiResource(
 *      collectionOperations = {
 *          "get",
 *      },
 *      itemOperations = {}
 * )
 */
class Profil
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
    private $Pro_Label;

    /**
     * @ORM\ManyToMany(targetEntity=Personne::class, inversedBy="Per_Profils")
     */
    private $Pro_Personne;

    public function __construct()
    {
        $this->Pro_Personne = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProLabel(): ?string
    {
        return $this->Pro_Label;
    }

    public function setProLabel(string $Pro_Label): self
    {
        $this->Pro_Label = $Pro_Label;

        return $this;
    }

    /**
     * @return Collection<int, Personne>
     */
    public function getProPersonne(): Collection
    {
        return $this->Pro_Personne;
    }

    public function addProPersonne(Personne $proPersonne): self
    {
        if (!$this->Pro_Personne->contains($proPersonne)) {
            $this->Pro_Personne[] = $proPersonne;
        }

        return $this;
    }

    public function removeProPersonne(Personne $proPersonne): self
    {
        $this->Pro_Personne->removeElement($proPersonne);

        return $this;
    }
}
