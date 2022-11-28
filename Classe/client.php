<?php

    class client
    {
        private $id_client;
        private $nom_client;
        private $prenom_client;
        private $mdp;
        private $numero_client;
        private $rue_client;
        private $cp_client;
        private $ville_client;
        private $mail_client;
        private $tell_client;

        /**
         * @param $id_client
         * @param $nom_client
         * @param $prenom_client
         * @param $mdp
         * @param $numero_client
         * @param $rue_client
         * @param $cp_client
         * @param $ville_client
         * @param $mail_client
         * @param $tell_client
         */
        public function __construct($id_client, $nom_client, $prenom_client, $mdp, $numero_client, $rue_client, $cp_client, $ville_client, $mail_client, $tell_client)
        {
            $this->id_client = $id_client;
            $this->nom_client = $nom_client;
            $this->prenom_client = $prenom_client;
            $this->mdp = $mdp;
            $this->numero_client = $numero_client;
            $this->rue_client = $rue_client;
            $this->cp_client = $cp_client;
            $this->ville_client = $ville_client;
            $this->mail_client = $mail_client;
            $this->tell_client = $tell_client;
        }

        /**
         * @return mixed
         */
        public function getIdClient()
        {
            return $this->id_client;
        }

        /**
         * @param mixed $id_client
         */
        public function setIdClient($id_client)
        {
            $this->id_client = $id_client;
        }

        /**
         * @return mixed
         */
        public function getNomClient()
        {
            return $this->nom_client;
        }

        /**
         * @param mixed $nom_client
         */
        public function setNomClient($nom_client)
        {
            $this->nom_client = $nom_client;
        }

        /**
         * @return mixed
         */
        public function getPrenomClient()
        {
            return $this->prenom_client;
        }

        /**
         * @param mixed $prenom_client
         */
        public function setPrenomClient($prenom_client)
        {
            $this->prenom_client = $prenom_client;
        }

        /**
         * @return mixed
         */
        public function getMdp()
        {
            return $this->mdp;
        }

        /**
         * @param mixed $mdp
         */
        public function setMdp($mdp)
        {
            $this->mdp = $mdp;
        }

        /**
         * @return mixed
         */
        public function getNumeroClient()
        {
            return $this->numero_client;
        }

        /**
         * @param mixed $numero_client
         */
        public function setNumeroClient($numero_client)
        {
            $this->numero_client = $numero_client;
        }

        /**
         * @return mixed
         */
        public function getRueClient()
        {
            return $this->rue_client;
        }

        /**
         * @param mixed $rue_client
         */
        public function setRueClient($rue_client)
        {
            $this->rue_client = $rue_client;
        }

        /**
         * @return mixed
         */
        public function getCpClient()
        {
            return $this->cp_client;
        }

        /**
         * @param mixed $cp_client
         */
        public function setCpClient($cp_client)
        {
            $this->cp_client = $cp_client;
        }

        /**
         * @return mixed
         */
        public function getVilleClient()
        {
            return $this->ville_client;
        }

        /**
         * @param mixed $ville_client
         */
        public function setVilleClient($ville_client)
        {
            $this->ville_client = $ville_client;
        }

        /**
         * @return mixed
         */
        public function getMailClient()
        {
            return $this->mail_client;
        }

        /**
         * @param mixed $mail_client
         */
        public function setMailClient($mail_client)
        {
            $this->mail_client = $mail_client;
        }

        /**
         * @return mixed
         */
        public function getTellClient()
        {
            return $this->tell_client;
        }

        /**
         * @param mixed $tell_client
         */
        public function setTellClient($tell_client)
        {
            $this->tell_client = $tell_client;
        }

    }