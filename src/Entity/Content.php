<?php

namespace App\Entity;

use App\Repository\ContentRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContentRepository::class)]
class Content
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?DateTime $releasedate = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'contents')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $categorie = null;

    #[ORM\ManyToOne(inversedBy: 'contents')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Director $director = null;

    #[ORM\OneToMany(mappedBy: 'content', targetEntity: Historical::class, orphanRemoval: true)]
    private Collection $historicals;

    public function __construct()
    {
        $this->historicals = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getReleasedate(): ?DateTime
    {
        return $this->releasedate;
    }

    public function setReleasedate(DateTime $releasedate): static
    {
        $this->releasedate = $releasedate;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDirector(): ?Director
    {
        return $this->director;
    }

    public function setDirector(?Director $director): static
    {
        $this->director = $director;

        return $this;
    }

    /**
     * @return Collection<int, Historical>
     */
    public function getHistoricals(): Collection
    {
        return $this->historicals;
    }

    public function addHistorical(Historical $historical): static
    {
        if (!$this->historicals->contains($historical)) {
            $this->historicals->add($historical);
            $historical->setContent($this);
        }

        return $this;
    }

    public function removeHistorical(Historical $historical): static
    {
        if ($this->historicals->removeElement($historical)) {
            // set the owning side to null (unless already changed)
            if ($historical->getContent() === $this) {
                $historical->setContent(null);
            }
        }

        return $this;
    }
}
