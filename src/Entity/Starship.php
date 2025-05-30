<?php

namespace App\Entity;

use App\Model\StarshipStatusEnum;
use App\Repository\StarshipRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StarshipRepository::class)]
class Starship
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $class = null;

    #[ORM\Column(length: 255)]
    private ?string $captain = null;

    #[ORM\Column(enumType: StarshipStatusEnum::class)]
    private ?StarshipStatusEnum $status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $arrivedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    public function getStatusImageFilename(): string
    {
            return match ($this->status) {
                    StarshipStatusEnum::WAITING => 'images/status-waiting.png',
                    StarshipStatusEnum::IN_PROGRESS => 'images/status-in-progress.png',
                    StarshipStatusEnum::COMPLETED => 'images/status-complete.png',
            };
    }

    public function getStatusString(): string
    {
            return $this->status->value;
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

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): static
    {
        $this->class = $class;

        return $this;
    }

    public function getCaptain(): ?string
    {
        return $this->captain;
    }

    public function setCaptain(string $captain): static
    {
        $this->captain = $captain;

        return $this;
    }

    public function getStatus(): ?StarshipStatusEnum
    {
        return $this->status;
    }

    public function setStatus(StarshipStatusEnum $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getArrivedAt(): ?\DateTimeImmutable
    {
        return $this->arrivedAt;
    }

    public function setArrivedAt(\DateTimeImmutable $arrivedAt): static
    {
        $this->arrivedAt = $arrivedAt;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
