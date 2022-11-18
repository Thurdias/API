<?php
    abstract class ClassConexao {
    public function conectar($query) {
    $host = "DADOS DO RESPECTIVO BANCO DE DADOS QUE DESEJA CONECTAR";
    $user ="DADOS DO RESPECTIVO BANCO DE DADOS QUE DESEJA CONECTAR";
    $pass = "DADOS DO RESPECTIVO BANCO DE DADOS QUE DESEJA CONECTAR";
    $dbname = "DADOS DO RESPECTIVO BANCO DE DADOS QUE DESEJA CONECTAR";
    
       $connection = mysqli_connect( $host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>");
       
       $resp = mysqli_query($connection, $query) or die('erro ao CONSULTAR');
       return $resp;
        }
    }
?>