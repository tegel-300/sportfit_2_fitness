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


}
