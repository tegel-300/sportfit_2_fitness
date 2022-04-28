<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuCommande
 *
 * @ORM\Table(name="menu_commande", indexes={@ORM\Index(name="menu_id", columns={"menu_id"}), @ORM\Index(name="command_id", columns={"command_id"})})
 * @ORM\Entity
 */
class MenuCommande
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
     * @ORM\Column(name="command_id", type="integer", nullable=false)
     */
    private $commandId;

    /**
     * @var int
     *
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     */
    private $menuId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommandId(): ?int
    {
        return $this->commandId;
    }

    public function setCommandId(int $commandId): self
    {
        $this->commandId = $commandId;

        return $this;
    }

    public function getMenuId(): ?int
    {
        return $this->menuId;
    }

    public function setMenuId(int $menuId): self
    {
        $this->menuId = $menuId;

        return $this;
    }


}
