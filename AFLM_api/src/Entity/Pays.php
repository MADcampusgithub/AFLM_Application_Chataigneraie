<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=PaysRepository::class)
 * @ApiResource(
 *      collectionOperations = {
 *          "get",
 *      },
 *      itemOperations = {}
 * )
 *      
 */
class Pays
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
    private $Pay_Libelle;

    /**
     * @ORM\OneToMany(targetEntity=Entreprise::class, mappedBy="Ent_Pays")
     */
    private $Pay_Entreprise;

    public function __construct()
    {
        $this->Pay_Entreprise = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPayLibelle(): ?string
    {
        return $this->Pay_Libelle;
    }

    public function setPayLibelle(string $Pay_Libelle): self
    {
        $this->Pay_Libelle = $Pay_Libelle;

        return $this;
    }

    /**
     * @return Collection<int, Entreprise>
     */
    public function getPayEntreprise(): Collection
    {
        return $this->Pay_Entreprise;
    }

    public function addPayEntreprise(Entreprise $payEntreprise): self
    {
        if (!$this->Pay_Entreprise->contains($payEntreprise)) {
            $this->Pay_Entreprise[] = $payEntreprise;
            $payEntreprise->setEntPays($this);
        }

        return $this;
    }

    public function removePayEntreprise(Entreprise $payEntreprise): self
    {
        if ($this->Pay_Entreprise->removeElement($payEntreprise)) {
            // set the owning side to null (unless already changed)
            if ($payEntreprise->getEntPays() === $this) {
                $payEntreprise->setEntPays(null);
            }
        }

        return $this;
    }
}
