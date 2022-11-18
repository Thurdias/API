<?php
include("classConexao.php");
class ClassCarros extends ClassConexao {
    #Exibição dos carros em um json
    public function exibeCarros() {
        $query = "select * from carros";
        $resp = $this -> conectar($query);
        //bucasndo do campo do banco de dados
        $J=[];
        $I=0;
        while($Fetch = mysqli_fetch_array($resp)) {
            $J[$I] = [
                "Id" => $Fetch["Id"],
                "Marca" => $Fetch["Marca"],
                "Modelo" => $Fetch["Modelo"],
                "Ano" => $Fetch["Ano"]
                ];
                $I++;
            }
            header("Access-Control-Allow-Origin:*");
            header("Content-type: application/json");
            echo json_encode($J);
        }
    }
?>