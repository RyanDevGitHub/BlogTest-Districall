<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RatingRepository::class)]
class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'rating', targetEntity: Article::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Article $Article_Id = null;

    #[ORM\OneToMany(mappedBy: 'rating', targetEntity: User::class)]
    private Collection $User_Id;

    #[ORM\Column]
    private ?int $rate = null;

    public function __construct()
    {
        $this->User_Id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleId(): ?Article
    {
        return $this->Article_Id;
    }

    public function setArticleId(Article $Article_Id): static
    {
        $this->Article_Id = $Article_Id;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUserId(): Collection
    {
        return $this->User_Id;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): static
    {
        $this->rate = $rate;

        return $this;
    }
}
