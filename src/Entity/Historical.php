<?php

namespace App\Entity;

use App\Repository\HistoricalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoricalRepository::class)]
class Historical
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $userlike = null;

    #[ORM\ManyToOne(inversedBy: 'historicals')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Content $content = null;

    #[ORM\OneToMany(mappedBy: 'historical', targetEntity: User::class, orphanRemoval: true)]
    private Collection $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isUserlike(): ?bool
    {
        return $this->userlike;
    }

    public function setUserlike(bool $userlike): static
    {
        $this->userlike = $userlike;

        return $this;
    }

    public function getContent(): ?Content
    {
        return $this->content;
    }

    public function setContent(?Content $content): static
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setHistorical($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getHistorical() === $this) {
                $user->setHistorical(null);
            }
        }

        return $this;
    }
}
