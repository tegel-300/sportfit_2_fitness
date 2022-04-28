<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scommentaire
 *
 * @ORM\Table(name="scommentaire", indexes={@ORM\Index(name="fk_comidd", columns={"commentaire_id"}), @ORM\Index(name="fk_useridd", columns={"user_id"})})
 * @ORM\Entity
 */
class Scommentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="Scommentaire_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scommentaireId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="commentaire_id", type="integer", nullable=false)
     */
    private $commentaireId;

    /**
     * @var string
     *
     * @ORM\Column(name="Scommentaire_desc", type="string", length=255, nullable=false)
     */
    private $scommentaireDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="Scommentaire_date", type="string", length=255, nullable=false)
     */
    private $scommentaireDate;

    public function getScommentaireId(): ?int
    {
        return $this->scommentaireId;
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

    public function getCommentaireId(): ?int
    {
        return $this->commentaireId;
    }

    public function setCommentaireId(int $commentaireId): self
    {
        $this->commentaireId = $commentaireId;

        return $this;
    }

    public function getScommentaireDesc(): ?string
    {
        return $this->scommentaireDesc;
    }

    public function setScommentaireDesc(string $scommentaireDesc): self
    {
        $this->scommentaireDesc = $scommentaireDesc;

        return $this;
    }

    public function getScommentaireDate(): ?string
    {
        return $this->scommentaireDate;
    }

    public function setScommentaireDate(string $scommentaireDate): self
    {
        $this->scommentaireDate = $scommentaireDate;

        return $this;
    }


}
