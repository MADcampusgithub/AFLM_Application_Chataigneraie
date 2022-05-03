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
 *      itemOperations = {
 *          "get",    
 *      }
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
     * @ORM\OneToMany(targetEntity=PersonneProfil::class, mappedBy="Profil")
     */
    private $PersonnesProfils;

    public function __construct()
    {
        $this->Pro_Personne = new ArrayCollection();
        $this->PersonnesProfils = new ArrayCollection();
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
            $personneProfil->setProfil($this);
        }

        return $this;
    }

    public function removePersonneProfil(PersonneProfil $personneProfil): self
    {
        if ($this->PersonnesProfils->removeElement($personneProfil)) {
            // set the owning side to null (unless already changed)
            if ($personneProfil->getProfil() === $this) {
                $personneProfil->setProfil(null);
            }
        }

        return $this;
    }
}
