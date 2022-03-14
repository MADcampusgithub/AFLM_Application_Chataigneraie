<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
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
class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Uti_Droit;

    /**
     * @ORM\Column(type="string", length=38)
     */
    private $Uti_Login;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $Uti_Mdp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtiDroit(): ?bool
    {
        return $this->Uti_Droit;
    }

    public function setUtiDroit(bool $Uti_Droit): self
    {
        $this->Uti_Droit = $Uti_Droit;

        return $this;
    }

    public function getUtiLogin(): ?string
    {
        return $this->Uti_Login;
    }

    public function setUtiLogin(string $Uti_Login): self
    {
        $this->Uti_Login = $Uti_Login;

        return $this;
    }

    public function getUtiMdp(): ?string
    {
        return $this->Uti_Mdp;
    }

    public function setUtiMdp(string $Uti_Mdp): self
    {
        $this->Uti_Mdp = $Uti_Mdp;

        return $this;
    }
}
