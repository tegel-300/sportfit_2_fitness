<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ReservationEvent
 *
 * @ORM\Table(name="reservation_event")
 * @ORM\Entity
 */
class ReservationEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     * @Assert\NotBlank(message="champ obligatoire")
     * @ORM\Column(name="idevent", type="integer", nullable=false)
     */
    private $idevent;

    /**
     * @var int
     * @Assert\NotBlank(message="champ obligatoire")
     * @ORM\Column(name="idclient", type="integer", nullable=false)
     */
    private $idclient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdevent(): ?int
    {
        return $this->idevent;
    }

    public function setIdevent(int $idevent): self
    {
        $this->idevent = $idevent;

        return $this;
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function setIdclient(int $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }


}
