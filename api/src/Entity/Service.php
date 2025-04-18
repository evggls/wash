<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $exit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExit(): ?string
    {
        return $this->exit;
    }

    public function setExit(string $exit): static
    {
        $this->exit = $exit;

        return $this;
    }
}
