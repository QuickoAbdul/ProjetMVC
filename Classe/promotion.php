<?php

class promotion
{
    private $id_promotion;
    private $datedebut_promotion;
    private $datefin_promotion;
    private $image_promotion;
    private $description_promotion;

    /**
     * @param $id_promotion
     * @param $datedebut_promotion
     * @param $datefin_promotion
     * @param $image_promotion
     * @param $description_promotion
     */
    public function __construct($id_promotion, $datedebut_promotion, $datefin_promotion, $image_promotion, $description_promotion)
    {
        $this->id_promotion = $id_promotion;
        $this->datedebut_promotion = $datedebut_promotion;
        $this->datefin_promotion = $datefin_promotion;
        $this->image_promotion = $image_promotion;
        $this->description_promotion = $description_promotion;
    }

    /**
     * @return mixed
     */
    public function getIdPromotion()
    {
        return $this->id_promotion;
    }

    /**
     * @param mixed $id_promotion
     */
    public function setIdPromotion($id_promotion)
    {
        $this->id_promotion = $id_promotion;
    }

    /**
     * @return mixed
     */
    public function getDatedebutPromotion()
    {
        return $this->datedebut_promotion;
    }

    /**
     * @param mixed $datedebut_promotion
     */
    public function setDatedebutPromotion($datedebut_promotion)
    {
        $this->datedebut_promotion = $datedebut_promotion;
    }

    /**
     * @return mixed
     */
    public function getDatefinPromotion()
    {
        return $this->datefin_promotion;
    }

    /**
     * @param mixed $datefin_promotion
     */
    public function setDatefinPromotion($datefin_promotion)
    {
        $this->datefin_promotion = $datefin_promotion;
    }

    /**
     * @return mixed
     */
    public function getImagePromotion()
    {
        return $this->image_promotion;
    }

    /**
     * @param mixed $image_promotion
     */
    public function setImagePromotion($image_promotion)
    {
        $this->image_promotion = $image_promotion;
    }

    /**
     * @return mixed
     */
    public function getDescriptionPromotion()
    {
        return $this->description_promotion;
    }

    /**
     * @param mixed $description_promotion
     */
    public function setDescriptionPromotion($description_promotion)
    {
        $this->description_promotion = $description_promotion;
    }




}