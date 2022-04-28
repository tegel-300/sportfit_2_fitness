<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dislikee
 *
 * @ORM\Table(name="dislikee", indexes={@ORM\Index(name="fk_commid", columns={"commentaire_id"}), @ORM\Index(name="fk_userrid", columns={"user_id"})})
 * @ORM\Entity
 */
class Dislikee
{
    /**
     * @var int
     *
     * @ORM\Column(name="dislikee_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dislikeeId;

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
