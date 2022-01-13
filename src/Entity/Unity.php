<?php

namespace App\Entity;

use App\Repository\UnityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UnityRepository::class)
 */
class Unity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55, unique=true)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=IngredientLine::class, mappedBy="unity")
     */
    private $ingredientLines;

    public function __construct()
    {
        $this->ingredientLines = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|IngredientLine[]
     */
    public function getIngredientLines(): Collection
    {
        return $this->ingredientLines;
    }

    public function addIngredientLine(IngredientLine $ingredientLine): self
    {
        if (!$this->ingredientLines->contains($ingredientLine)) {
            $this->ingredientLines[] = $ingredientLine;
            $ingredientLine->setUnity($this);
        }

        return $this;
    }

    public function removeIngredientLine(IngredientLine $ingredientLine): self
    {
        if ($this->ingredientLines->removeElement($ingredientLine)) {
            // set the owning side to null (unless already changed)
            if ($ingredientLine->getUnity() === $this) {
                $ingredientLine->setUnity(null);
            }
        }

        return $this;
    }

}
