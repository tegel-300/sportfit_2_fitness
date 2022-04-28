<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="livreur_id", columns={"livreur_id"}), @ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="comande_id", columns={"comande_id"})})
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="livreur_id", type="integer", nullable=false)
     */
    private $livreurId;

    /**
     * @var int
     *
     * @ORM\Column(name="comande_id", type="integer", nullable=false)
     */
    private $comandeId;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getLivreurId(): ?int
    {
        return $this->livreurId;
    }

    public function setLivreurId(int $livreurId): self
    {
        $this->livreurId = $livreurId;

        return $this;
    }

    public function getComandeId(): ?int
    {
        return $this->comandeId;
    }

    public function setComandeId(int $comandeId): self
    {
        $this->comandeId = $comandeId;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }


}
