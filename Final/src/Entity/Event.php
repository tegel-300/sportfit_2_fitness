<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
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
     * @var string
     *  @Assert\NotBlank(message="champ obligatoire")
     *  @Assert\Unique(message="ce nom est déjà utiliser ")
     * @ORM\Column(name="NOM", type="string", length=99, nullable=false)
     */
    private $nom;

    /**
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = " Minimum {{ limit }} caracteres",
     *      maxMessage = " Maximum {{ limit }} caracteres"
     * )
     * @Assert\NotBlank(message="champ obligatoire")
     *
     * @ORM\Column(name="lieu", type="string", length=99, nullable=false)
     */
    private $lieu;

    /**
     * @var \DateTime
     * @Assert\NotBlank(message="champ obligatoire")
     * @ORM\Column(name="Date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var int
     * @Assert\Length(
     *      min = 10,
     *      max = 255,
     *      minMessage = " Minimum {{ limit }} caracteres",
     *      maxMessage = " Maximum {{ limit }} caracteres"
     * )
     * @Assert\NotBlank(message="champ obligatoire")
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var string
     ** @Assert\Length(
     *      min = 10,
     *      max = 255,
     *      minMessage = " Minimum {{ limit }} caracteres",
     *      maxMessage = " Maximum {{ limit }} caracteres"
     * )
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var int
     * @Assert\Length(
     *      min = 10,
     *      max = 255,
     *      minMessage = " Minimum {{ limit }} caracteres",
     *      maxMessage = " Maximum {{ limit }} caracteres"
     * )
     * @Assert\NotBlank(message="champ obligatoire")
     * @ORM\Column(name="capaciteinitiale", type="integer", nullable=false)
     */
    private $capaciteinitiale;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCapaciteinitiale(): ?int
    {
        return $this->capaciteinitiale;
    }

    public function setCapaciteinitiale(int $capaciteinitiale): self
    {
        $this->capaciteinitiale = $capaciteinitiale;

        return $this;
    }


}
