<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=RecipeRepository::class)
 */
class Recipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id = null;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(
     *          message="Vous devez obligatoirement ajouter un titre à votre recette"
     * )
     * @Assert\Length(
     *          min=5,
     *          max=50,
     *          minMessage="Le titre doit comporter au moins {{ limit }} caractères",
     *          maxMessage="Le titre ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $name;


    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPrivate;

    /**
     * @ORM\OneToMany(targetEntity=IngredientLine::class, mappedBy="recipe", orphanRemoval=true, cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid
     * @Assert\Count(
     *      min = 1,
     *      minMessage = "Vous devez spécifier au moins {{ limit }} ingrédient dans la recette")
     */
    private $ingredientLines;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="recipes")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=StepLine::class, mappedBy="recipe", orphanRemoval=true, cascade={"persist"})
     * @Assert\Valid
     * @Assert\NotBlank
     */
    private $stepLines;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="recipes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @ORM\OneToMany(targetEntity=RecipeLike::class, mappedBy="recipe", orphanRemoval=true)
     */
    private $recipeLikes;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(type="string", length=55, unique=true)
     */
    private $slug;

    public function __construct()
    {
        $this->ingredientLines = new ArrayCollection();
        $this->stepLines = new ArrayCollection();
        $this->recipeLikes = new ArrayCollection();
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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

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
            $ingredientLine->setRecipe($this);
            // test
            //$this->ingredientLines->add($ingredientLine);
        }

        return $this;
    }

    public function removeIngredientLine(IngredientLine $ingredientLine): self
    {
        if ($this->ingredientLines->removeElement($ingredientLine)) {
            // set the owning side to null (unless already changed)
            if ($ingredientLine->getRecipe() === $this) {
                $ingredientLine->setRecipe(null);
            }
        }

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|StepLine[]
     */
    public function getStepLines(): Collection
    {
        return $this->stepLines;
    }

    public function addStepLine(StepLine $stepLine): self
    {
        if (!$this->stepLines->contains($stepLine)) {
            $this->stepLines[] = $stepLine;
            $stepLine->setRecipe($this);
        }

        return $this;
    }

    public function removeStepLine(StepLine $stepLine): self
    {
        if ($this->stepLines->removeElement($stepLine)) {
            // set the owning side to null (unless already changed)
            if ($stepLine->getRecipe() === $this) {
                $stepLine->setRecipe(null);
            }
        }

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return Collection|RecipeLike[]
     */
    public function getRecipeLikes(): Collection
    {
        return $this->recipeLikes;
    }

    public function addRecipeLike(RecipeLike $recipeLike): self
    {
        if (!$this->recipeLikes->contains($recipeLike)) {
            $this->recipeLikes[] = $recipeLike;
            $recipeLike->setRecipe($this);
        }

        return $this;
    }

    public function removeRecipeLike(RecipeLike $recipeLike): self
    {
        if ($this->recipeLikes->removeElement($recipeLike)) {
            // set the owning side to null (unless already changed)
            if ($recipeLike->getRecipe() === $this) {
                $recipeLike->setRecipe(null);
            }
        }

        return $this;
    }

    /**
     * Permet de savoir si recette likée par l'utilisateur
     * @param \App\Entity\User $user
     * @return boolean
     */
    public function isLikedByUser(User $user) : bool
    {
        foreach($this->recipeLikes as $recipeLike) {
            if($recipeLike->getUser() == $user) return true;
        }
        return false;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /*public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }*/
}
