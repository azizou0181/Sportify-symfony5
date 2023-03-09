<?php

namespace App\Entity;


use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

use Symfony\Component\HttpFoundation\File\Exception\FileException;



#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("produits")]
    private ?int $id = null;

  

    #[ORM\Column(length: 255)]
    #[Groups("produits")]
    #[Assert\NotBlank(message:"nomproduit is required")]
    private ?string $nom_produit = null;

    #[ORM\Column]
    #[Groups("produits")]
    #[Assert\NotBlank(message:"Prix is required")]
    #[Assert\Positive(message:"Prix doit etre positif")]
    private ?float $prix_produit = null;

    
    #[ORM\Column(length: 255)]
    #[Groups("produits")]
    #[Assert\NotBlank(message:"marque is required")]
    private ?string $marque_produit = null;

    #[ORM\ManyToOne(inversedBy: 'produit')]
    #[Groups("produits")]
    #[Assert\NotBlank(message:"categorie is required")]
    private ?Categorie $categorie = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("produits")]
    private ?string $image = null;

    #[ORM\Column]
    #[Groups("produits")]
    #[Assert\NotBlank(message:"quantite is required")]
   
    private ?int $quantite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

 

    public function getNomProduit(): ?string
    {
        return $this->nom_produit;
    }

    public function setNomProduit(string $nom_produit=null): self
    {
        $this->nom_produit = $nom_produit;

        return $this;
    }

    public function getPrixProduit(): ?float
    {
        return $this->prix_produit;
    }

    public function setPrixProduit(float $prix_produit=null): self
    {
        $this->prix_produit = $prix_produit;

        return $this;
    }

    
    public function getMarqueProduit(): ?string
    {
        return $this->marque_produit;
    }

    public function setMarqueProduit(string $marque_produit=null): self
    {
        $this->marque_produit = $marque_produit;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie=null): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image=null): self
    {
        $this->image = $image;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}