<?php

namespace App\Entity;

use App\Repository\IngredientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=IngredientRepository::class)
 */
class Ingredient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55, unique=true)
     *@Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "Le nom de l'ingrédient' doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le nom de l'ingrédient' doit comporter au maximum {{ limit }} caractères"
     * )
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=IngredientLine::class, mappedBy="ingredient")
     */
    private $ingredientLines;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $prefix;

    /**
     * @ORM\Column(type="string", length=55, nullable=true)
     */
    private $plural;

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
            $ingredientLine->setIngredient($this);
        }

        return $this;
    }

    public function removeIngredientLine(IngredientLine $ingredientLine): self
    {
        if ($this->ingredientLines->removeElement($ingredientLine)) {
            // set the owning side to null (unless already changed)
            if ($ingredientLine->getIngredient() === $this) {
                $ingredientLine->setIngredient(null);
            }
        }

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getPlural(): ?string
    {
        return $this->plural;
    }

    public function setPlural(?string $plural): self
    {
        $this->plural = $plural;

        return $this;
    }
}
