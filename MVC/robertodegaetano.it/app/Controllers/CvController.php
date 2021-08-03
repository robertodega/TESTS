<?php
    namespace app\Controllers;

    use app\DB\DbPdo;
    use PDO;

    class CvController{

        protected $layout = 'layout/freelance/index.tpl.php';
        protected $conn;

        protected $curr;

        /* query db PDO manuale in index.php - costruttore con risultato query *

        public function __construct($curr)
        {
            $this->curr = $curr;
        }

        /* query db PDO in construttore - costruttore con parametro conn */

        public function __construct($conn)
        {
            require "config/freelance/q.php";
            $this->conn = $conn;
            $this->curr = $this->conn->query($currAll)->fetchAll();
        }

        /* */

        public function display(){
            require $this->layout;
        }

        public function loadPage($contentPar,$page){
            require "config/freelance/const.php";
            $path = __DIR__."/../Views/".$page.".tpl.php";
            ob_start();
            require $path;
            $this->$contentPar = ob_get_contents();
            ob_end_clean();
        }



    }