<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      max = 80,
     *      minMessage = " Minimum {{ limit }} caracteres",
     *      maxMessage = " Maximum {{ limit }} caracteres"
     * )
     *  @Assert\NotBlank(message="champ obligatoire")
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @Groups("post:read")
     */
    private $nom;

    /**
     * @var \DateTime
     * @Assert\NotBlank(message="champ obligatoire")
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Groups("post:read")
     */
    private $date;

    /**
     * @var int
     * @Assert\NotBlank(message="champ obligatoire")
     * @ORM\Column(name="nbr_personnes", type="integer", nullable=false)
     * @Groups("post:read")
     *
     */
    private $nbrPersonnes;

    /**
     * @var string
     * @Assert\NotBlank(message="champ obligatoire")
     * @ORM\Column(name="categorie", type="string", length=255, nullable=false)
     * @Groups("post:read")
     */
    private $categorie;

    /**
     * @var string
     * @Assert\NotBlank(message="champ obligatoire")
     *  @Assert\Length(
     *      min = 2,
     *      max = 255,
     *      minMessage = " Minimum {{ limit }} caracteres",
     *      maxMessage = " Maximum {{ limit }} caracteres"
     * )
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Groups("post:read")
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Image", type="string", length=256, nullable=false)
     * @Groups("post:read")
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="Likes", type="integer", nullable=true)
     * @Groups("post:read")
     */
    private $likes;

    /**
     * @var int
     *
     * @ORM\Column(name="Unlike", type="integer", nullable=true)
     * @Groups("post:read")
     */
    private $unlike;

    /**
     * @ORM\OneToMany(targetEntity=Comments::class, mappedBy="annonces", orphanRemoval=true, )
     *
     */
    private $comments;




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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNbrPersonnes(): ?int
    {
        return $this->nbrPersonnes;
    }

    public function setNbrPersonnes(int $nbrPersonnes): self
    {
        $this->nbrPersonnes = $nbrPersonnes;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

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

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): self
    {
        $this->likes = $likes;

        return $this;
    }

    public function getUnlike(): ?int
    {
        return $this->unlike;
    }

    public function setUnlike(int $unlike): self
    {
        $this->unlike = $unlike;

        return $this;
    }

    /**
     * @return Collection<int, Comments>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comments $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setAnnonces($this);
        }

        return $this;
    }

    public function removeComment(Comments $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getAnnonces() === $this) {
                $comment->setAnnonces(null);
            }
        }

        return $this;
    }




}
