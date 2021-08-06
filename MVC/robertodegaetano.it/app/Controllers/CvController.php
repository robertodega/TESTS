<?php
    namespace app\Controllers;

    use app\DB\DbPdo;
    use PDO;

    class CvController{

        protected $layout = 'layout/freelance/index.tpl.php';
        //  protected $layout = 'layout/underConstruction/index.tpl.php';
        protected $conn;
        protected $curr;
        
        public function __construct(PDO $conn)
        {
            require "config/freelance/q.php";
            $this->conn = $conn;
            $this->curr = $this->conn->query($currAll)->fetchAll(PDO::FETCH_ASSOC);
        }

        public function display(){
            require $this->layout;
        }

        public function loadPage($contentPar,$page){
            $path = __DIR__."/../Views/".$page.".tpl.php";
            ob_start();
            require $path;
            $this->$contentPar = ob_get_contents();
            ob_end_clean();
        }


        
    }