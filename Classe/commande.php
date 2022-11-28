<?php

class commande
{
    private $id_commande;
    private $date_commande;
    private $article_commande;
    private $client_commande;

    /**
     * @param $id_commande
     * @param $date_commande
     * @param $article_commande
     * @param $client_commande
     */
    public function __construct($id_commande, $date_commande, $article_commande, $client_commande)
    {
        $this->id_commande = $id_commande;
        $this->date_commande = $date_commande;
        $this->article_commande = $article_commande;
        $this->client_commande = $client_commande;
    }

    /**
     * @return mixed
     */
    public function getIdCommande()
    {
        return $this->id_commande;
    }

    /**
     * @param mixed $id_commande
     */
    public function setIdCommande($id_commande)
    {
        $this->id_commande = $id_commande;
    }

    /**
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->date_commande;
    }

    /**
     * @param mixed $date_commande
     */
    public function setDateCommande($date_commande)
    {
        $this->date_commande = $date_commande;
    }

    /**
     * @return mixed
     */
    public function getArticleCommande()
    {
        return $this->article_commande;
    }

    /**
     * @param mixed $article_commande
     */
    public function setArticleCommande($article_commande)
    {
        $this->article_commande = $article_commande;
    }

    /**
     * @return mixed
     */
    public function getClientCommande()
    {
        return $this->client_commande;
    }

    /**
     * @param mixed $client_commande
     */
    public function setClientCommande($client_commande)
    {
        $this->client_commande = $client_commande;
    }




}