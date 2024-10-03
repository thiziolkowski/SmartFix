<?php

    class conexao 
    {       
        private $host       = 'localhost';  //'127.0.0.1'
        private $dbname     = 'smart_fix';
        private $usuario    = 'root';       //'Thiago';
        private $senha      = '';           //'123456';

        public function conectar()
        {
            try 
            {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->usuario",
                    "$this->senha",
                    
                );
                return $conexao;
            }
             catch (PDOException $erro) {
                echo '<p>'.$erro->getMessage().'</p>';
            }   
        }
    }
?>