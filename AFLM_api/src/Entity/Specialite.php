<?php

namespace App\Entity;

use App\Repository\SpecialiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=SpecialiteRepository::class)
 * @ApiResource(
 *      collectionOperations = {
 *          "get",
 *      },
 *      itemOperations = {}
 * )
 */
class Specialite
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
    private $Spe_Label;

    /**
     * @ORM\ManyToMany(targetEntity=Entreprise::class, inversedBy="Ent_Specialite")
     */
    private $Spe_Entreprise;

    public function __construct()
    {
        $this->Spe_Entreprise = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpeLabel(): ?string
    {
        return $this->Spe_Label;
    }

    public function setSpeLabel(string $Spe_Label): self
    {
        $this->Spe_Label = $Spe_Label;

        return $this;
    }

    /**
     * @return Collection<int, Entreprise>
     */
    public function getSpeEntreprise(): Collection
    {
        return $this->Spe_Entreprise;
    }

    public function addSpeEntreprise(Entreprise $speEntreprise): self
    {
        if (!$this->Spe_Entreprise->contains($speEntreprise)) {
            $this->Spe_Entreprise[] = $speEntreprise;
        }

        return $this;
    }

    public function removeSpeEntreprise(Entreprise $speEntreprise): self
    {
        $this->Spe_Entreprise->removeElement($speEntreprise);

        return $this;
    }
}
