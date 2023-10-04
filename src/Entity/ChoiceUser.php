<?php

namespace App\Entity;

use App\Repository\ChoiceUserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChoiceUserRepository::class)]
class ChoiceUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $userlike = null;

    #[ORM\ManyToOne(inversedBy: 'choiceUsers')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'choiceUsers')]
    private ?Content $content = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isUserlike(): ?bool
    {
        return $this->userlike;
    }

    public function setUserlike(?bool $userlike): static
    {
        $this->userlike = $userlike;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

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
}
