<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Likee
 *
 * @ORM\Table(name="likee", indexes={@ORM\Index(name="fk_comiddd", columns={"commentaire_id"}), @ORM\Index(name="fk_useriddd", columns={"user_id"})})
 * @ORM\Entity
 */
class Likee
{
    /**
     * @var int
     *
     * @ORM\Column(name="likee_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $likeeId;

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


}
