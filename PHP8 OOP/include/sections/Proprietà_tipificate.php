<?php
    include "../const.php";
    $filePath = __FILE__;
    $fileSubPath = stristr($filePath,"PHP8 OOP");
    $fileName = substr($filePath,(strrpos($filePath,'/')+1));
    $functionName = str_replace("_"," ",str_replace(".php","",$fileName));
    if(strpos($functionName,"\\")){$functionName = substr($functionName,(strrpos($functionName,"\\")+1));}

    $argList = "";
    if(isset($arguments["".$functionName.""])){
        foreach($arguments["".$functionName.""] as $divName => $args){
            $argList .= "<li>".implode("</li><li>",$args)."</li>";
        }
    }

    //  test function

    /* PHP 8 */

    class Person{
        public string $name;
        public string $lastname;
        public int $age = 0;
        public ?string $address = '';
        public ?string $phone = '';

        // costruttore di default

        //  public function __construct()
        //  {
        //      $this->setName('Roberto');
        //      $this->lastname = '';
        //      $this->phone = '123456789';
        //  }
        
        // costruttore parametrizzato
        
        public function __construct(
            string $name, string $lastname, string $phone
            ,?string $address = '', int $age = 0
        )
        {
            $this->setName($name);
            $this->lastname = $lastname;
            $this->phone = $phone;
            $this->address = $address;
            $this->age = $age;
        }

        //  metodi getter & setter creati automaticamente da vscode (right click on property > 'Insert PHP 8 Getter & Setter')

        /**
         * Get the value of name
         *
         * @return string
         */

        /* */
        
        public function getName(): string
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @param string $name
         *
         * @return self
         */

        /* */

        public function setName(string $name): self
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of lastname
         *
         * @return string
         */

        /* */

        public function getLastname(): string
        {
                return $this->lastname;
        }

        /**
         * Set the value of lastname
         *
         * @param string $lastname
         *
         * @return self
         */

        /* */

        public function setLastname(string $lastname): self
        {
                $this->lastname = $lastname;

                return $this;
        }

        /**
         * Get the value of age
         *
         * @return int
         */


        /* */

        public function getAge(): int
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @param int $age
         *
         * @return self
         */

        /* */

        public function setAge(int $age): self
        {
                $this->age = $age;

                return $this;
        }

        /**
         * Get the value of address
         *
         * @return ?string
         */

        /* */

        public function getAddress(): ?string
        {
                return $this->address;
        }

        /**
         * Set the value of address
         *
         * @param ?string $address
         *
         * @return self
         */

        /* */

        public function setAddress(?string $address): self
        {
                $this->address = $address;

                return $this;
        }

        /**
         * Get the value of phone
         *
         * @return ?string
         */

        /* */

        public function getPhone(): ?string
        {
                return $this->phone;
        }

        /**
         * Set the value of phone
         *
         * @param ?string $phone
         *
         * @return self
         */

        /* */

        public function setPhone(?string $phone): self
        {
                $this->phone = $phone;

                return $this;
        }
    }

    //  $person = new Person();
    $person = new Person(name:"Roberto",phone:"123456789",lastname:"-");

    /* PHP 7 *

    class Person{
        public $name;
        public $lastname;
        public $age = 0;
        public $address = '';
        public $phone = '';

        // costruttore di default

        //  public function __construct()
        //  {
        //      $this->setName('Roberto
        //      $this->lastname = 
        //      $this->phone = '12345678
        //
    
        // costruttore parametrizzato
        
        public function __construct(
            string $name, string $lastname, string $phone
            ,?string $address = '', int $age = 0
        )
        {
            $this->setName($name);
            $this->lastname = $lastname;
            $this->phone = $phone;
            $this->address = $address;
            $this->age = $age;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
            return $this;
        }

        public function getPhone()
        {
                return $this->phone;
        }

        public function setPhone($phone)
        {
                $this->phone = $phone;

                return $this;
        }
    }

    //  $person = new Person();
    $person = new Person("Roberto","123456789","","-");

    /* */

    
    
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
<div class="functionContentDivFilename">[ <?=$fileSubPath?> ]   -   [PHP Version: <b><?=PHP_VERSION?></b>]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <br />&nbsp;&nbsp;&nbsp;<i>class <b>Person</b>{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public string \$name;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public string \$lastname;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public int \$age = 0;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public ?string \$address = '';
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public ?string \$phone = '';
        <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/**
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Get the value of name
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* @return string
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function getName(): string
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$this->name;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</i><br />
        <br /><br />Stampa di oggetto <b>\$person</b>:<br /><pre>";var_dump($person);echo"</pre>
        <br />tentando di accedere ai metodi ( <b>\$person->getName()</b> ad esempio ), si otterrà errore perchè la proprietà <u>non è ancora stata inizializzata</u><br />
        <br />Inizializzazione oggetto:<br /><br /> &nbsp;&nbsp;&nbsp;<i>public function __construct()
        <br />&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->setName('Roberto');
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->lastname = '';
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->phone = '123456789   ';
        <br />&nbsp;&nbsp;&nbsp;}
        <br /><br />Stampa di oggetto <b>\$person</b>:<br /><pre>";var_dump($person);echo"</pre>
        <br />Stampa name da metodo getName (<i>\$person->getName()</i>): '".$person->getName()."'
        
        <br /><br />E' possibile ovviamente parametrizzare il costruttore e passare poi i parametri alla chiamata di inizializzazione dell'oggetto:<br />
        <br />&nbsp;&nbsp;&nbsp;<i>public function __construct(
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string \$name, string \$lastname, string \$phone
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,?string \$address = '', int \$age = 0
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
        <br />&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->setName(\$name);
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->lastname = \$lastname;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->phone = \$phone;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->address = \$address;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->age = \$age;
        <br />&nbsp;&nbsp;&nbsp;}</i><br />
        <br /><u>E' possibile costruire il nuovo oggetto passando i <i>named arguments</i>, anche in modo mischiato</u>:<br />
        <br />\$person = new Person(name:'Roberto',phone:'123456789',lastname:'-');
        <br /><br />Stampa di oggetto <b>\$person</b>:<br /><pre>";var_dump($person);echo"</pre>
        <br />\$person->getName() \$person->lastname() \$person->getPhone(): ".$person->getName()." ".$person->lastname." ".$person->getPhone()."
    ";
?>

    </div>
</div>

<script src="js/sectionsJs.js"></script>