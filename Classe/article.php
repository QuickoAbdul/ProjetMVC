<?php 
    class Article 
    {
    // Stocker les données
    private $id_article;
    private $reference_article;
    private $nom_article; 
    private $image_article;
    private $prix_article;
    private $cat_article;

    public function __construct($id_article, $reference_article, $nom_article,$image_article, $prix_article, $cat_article)
    {
        $this->id_article = $id_article;
        $this->reference_article = $reference_article;
        $this->nom_article = $nom_article;
        $this->image_article = $image_article;
        $this->prix_article = $prix_article;
        $this->cat_article = $cat_article;
    }
    // Définir les données
    public function getId()
    {
        return $this->id_article;
    }

    public function setId($id_article)
    {
        $this->id= $id_article;
    }

    public function getReference()
    {
        return $this->reference_article;
    }

    public function setReference($reference_article)
    {
        $this->reference= $reference_article;
    }

    public function getNom()
    {
        return $this->nom_article;
    }

    public function setNom($nom_article)
    {
        $this->nom= $nom_article;
    }

    public function getImage()
    {
        return $this->image_article;
    }

    public function setImage($image_article)
    {
        $this->image= $image_article;
    }

    public function getPrix()
    {
        return $this->prix_article;
    }

    public function setPrix($prix_article)
    {
        $this->prix= $prix_article;
    }

    public function getCat()
    {
        return $this->cat_article;
    }

    public function setCat($cat_article)
    {
        $this->cat= $cat_article;
    }
}

?>