<?php
    class Database {
        public function __construct($iniFileName){
            $this->dbSettings = parse_ini_file($iniFileName);
            $this->host = $this->dbSettings['HOST'];
            $this->db = $this->dbSettings['DB'];
            $this->user = $this->dbSettings['USER'];
            $this->passwd = $this->dbSettings['PASSWD'];
            $this->charset = $this->dbSettings['CHARSET'];
            // $this->connection = connect();
        }

        public function connect(){
            return new PDO(
                "mysql:host=$this->host;
                dbname=$this->db;
                charset=$this->charset;",
                $this->user,
                $this->passwd,
               [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ]
            );
        }


        public function test($tbl){
           $conn = $this->connect();
           $query =  $conn->prepare("SELECT * FROM $tbl;");
           $query->execute();
           $response = $query->fetchAll();
           var_dump($response);
           
           return $response;

        }
    }
    
    function upload_image($file, $folder) 
       { 
        $name = (string)uniqid() . $file['name']; 
        copy($file['tmp_name'], "./$folder/$name"); 
        return $name; 
    }
    session_start();
    $AUTH = null;
    $DB = new Database('Database.ini');
    $pdo =   $DB->connect();
    

    if (isset($_SESSION['AUTH'])){
        $AUTH = $_SESSION['AUTH'];  
   
    }


    