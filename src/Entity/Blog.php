<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogRepository::class)
 */
class Blog
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
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Auteur;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Photos;

    /**
     * @ORM\Column(type="text")
     */
    private $Texte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nb_comm;

    /**
     * @ORM\ManyToMany(targetEntity=BlogReply::class, inversedBy="blogs")
     */
    private $Relation;

    /**
     * @ORM\ManyToMany(targetEntity=Blogcategory::class, inversedBy="blogs")
     */
    private $Blogcategory;

    public function __construct()
    {
        $this->Relation = new ArrayCollection();
        $this->Blogcategory = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(string $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

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

    public function getTexte(): ?string
    {
        return $this->Texte;
    }

    public function setTexte(string $Texte): self
    {
        $this->Texte = $Texte;

        return $this;
    }

    public function getNbComm(): ?string
    {
        return $this->Nb_comm;
    }

    public function setNbComm(string $Nb_comm): self
    {
        $this->Nb_comm = $Nb_comm;

        return $this;
    }

    /**
     * @return Collection|BlogReply[]
     */
    public function getRelation(): Collection
    {
        return $this->Relation;
    }

    public function addRelation(BlogReply $relation): self
    {
        if (!$this->Relation->contains($relation)) {
            $this->Relation[] = $relation;
        }

        return $this;
    }

    public function removeRelation(BlogReply $relation): self
    {
        $this->Relation->removeElement($relation);

        return $this;
    }

    /**
     * @return Collection|Blogcategory[]
     */
    public function getBlogcategory(): Collection
    {
        return $this->Blogcategory;
    }

    public function addBlogcategory(Blogcategory $blogcategory): self
    {
        if (!$this->Blogcategory->contains($blogcategory)) {
            $this->Blogcategory[] = $blogcategory;
        }

        return $this;
    }

    public function removeBlogcategory(Blogcategory $blogcategory): self
    {
        $this->Blogcategory->removeElement($blogcategory);

        return $this;
    }
}
