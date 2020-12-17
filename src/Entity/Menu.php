<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MenuRepository::class)
 */
class Menu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Plat;

    /**
     * @ORM\Column(type="float")
     */
    private $Prix;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Photos;

    /**
     * @ORM\OneToMany(targetEntity=Catfood::class, mappedBy="menu")
     */
    private $Catfood;

    public function __construct()
    {
        $this->Catfood = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlat(): ?string
    {
        return $this->Plat;
    }

    public function setPlat(string $Plat): self
    {
        $this->Plat = $Plat;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPhotos(): ?string
    {
        return $this->Photos;
    }

    public function setPhotos(string $Photos): self
    {
        $this->Photos = $Photos;

        return $this;
    }

    /**
     * @return Collection|Catfood[]
     */
    public function getCatfood(): Collection
    {
        return $this->Catfood;
    }

    public function addCatfood(Catfood $catfood): self
    {
        if (!$this->Catfood->contains($catfood)) {
            $this->Catfood[] = $catfood;
            $catfood->setMenu($this);
        }

        return $this;
    }

    public function removeCatfood(Catfood $catfood): self
    {
        if ($this->Catfood->removeElement($catfood)) {
            // set the owning side to null (unless already changed)
            if ($catfood->getMenu() === $this) {
                $catfood->setMenu(null);
            }
        }

        return $this;
    }
}
