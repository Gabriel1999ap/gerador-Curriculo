<?php 


class Curriculo
{
    private $mysql;
    public function __construct(mysqli $mysql)
    {
        $this-> mysql = $mysql;
    }

    public function exibirTodos ():array
    {
        $resultado =  $this-> mysql->query('SELECT idPessoa, nome, sobrenome, logradouro, rua, bairro, cidade, estado, cep, celular,
         email, estadoCivil, data_Nascimento, numero_casa FROM dados_pessoais');
        $curriculos  = $resultado -> fetch_all(MYSQLI_ASSOC);
        return $curriculos;
    }



}







?>