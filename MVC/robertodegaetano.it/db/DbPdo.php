<?php

    namespace app\DB;

    use PDO;

    class DbPdo{                                                                                //  classe di tipo singleton (un'unica istanza della classe)
                                                                                                //  creato con metodo apposito (non il costruttore di default)
        protected $conn;
        protected static $instance;

        protected function __construct(array $options)                                          //  protected o private, per far sì che non possa essere chiamato
        {                                                                                       //  direttamente dall'esterno per istanziare la classe
            $this->conn = new PDO($options['dsn'],$options['user'],$options['password'],$options['pdooptions']);
        }

        public static function getInstance(array $options)                                      //  Viene implementata un'unica istanza della classe
        {                                                                                       //  attraverso metodo getInstance
            if(!static::$instance){                                                             //  che usa l'array dei parametri di configurazione ($options)
                static::$instance = new static($options);                                       //  e non direttamente dal costruttore
            }
            return static::$instance;
        }

        public function getConn(){
            return $this->conn;
        }
    }