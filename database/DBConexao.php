<?php 

class DBConexao{
    private $host = "localhost";
    private $dbname ="biblioteca";
    private $username = "root";
    private $password = "senac2023";

    private $conx;
    private static $instance = null;

    public function __construct()
    {   
        try{
            //iniciando a conexao
            $this->conx = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8",$this->username,$this->password);
            $this->conx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
                //capturar o erro da conexao
                echo"erro na conexao com banco de dados:".$e->getMessage();
        }
    }
    /** 
    *metodo  estatico para obter a instancia unica da conexao (implementacao do  singleton)
    */
    public  static function getConexao(){
        if(!self::$instance){
            self::$instance = new DBConexao();
        }
        return self::$instance->conx;
    }
}