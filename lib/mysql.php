<?php
 function conecta() {
    $host ='localhost';
    $user = 'root';
    $password ='' ;
    $database = 'concessionaria';
    $mysqli = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect_errno()) {
        return NULL;
    }else {
        return $mysqli;
    }
}

function listaPaises(){
    $query = "SELECT id, nome, nome_pt, sigla FROM pais;";
    $link = conecta();
    if($link !== NULL){
        $lista = [];
        $result = mysqli_query($link, $query);
        if($result){
            while ($row = mysqli_fetch_row($result)) {
                $pais = array(
                    'id' => $row[0],
                    'name' => $row[1],
                    'nome' => $row[2],
                    'sigla' => $row[3],
                );
                array_push($lista, $pais);
            }
            return $lista;
        }
    }
    
}

function buscarPaisNome($nome){
    $query = "SELECT id, nome, nome_pt, sigla FROM pais WHERE nome_pt = '" . $nome . "';";
    $link = conecta();
    if($link !== NULL){
        $result = mysqli_query($link, $query);
        if($result){
            while ($row = mysqli_fetch_row($result)) {
                $pais = array(
                    'id' => $row[0],
                    'name' => $row[1],
                    'nome' => $row[2],
                    'sigla' => $row[3],
                );
            }
            return $pais;
        }
    }
}
