<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'matieres')]
    private ?cours $id_matiere = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMatiere(): ?cours
    {
        return $this->id_matiere;
    }

    public function setIdMatiere(?cours $id_matiere): static
    {
        $this->id_matiere = $id_matiere;

        return $this;
    }
}
