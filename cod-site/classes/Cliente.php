<?php
class Cliente
{
    public $id;
    public $nome;
    public $datanasc;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;
    public $cep;
    public $rua;
    public $numero;
    public $bairro;
    public $cidade;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
        }
    }
    
    public function listar()
    {
        $sql = "SELECT id, nome, telefone, cpf
                FROM clientes 
                ORDER BY id";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;       
    }

    public function inserir()
    {
        $sql = "INSERT INTO clientes (nome, datanasc, telefone, cpf, email, senha, cep, rua, numero, bairro, cidade) VALUES (
            '" . $this->nome . "', 
            '" . $this->datanasc . "',
            '" . $this->telefone . "', 
            '" . $this->cpf . "',
            '" . $this->email . "',
            '" . $this->senha . "',
            '" . $this->cep . "',
            '" . $this->rua . "',
            '" . $this->numero . "',
            '" . $this->bairro . "',
            '" . $this->cidade . "')";        
        //echo $sql;
        //die();
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $conexao->exec($sql); 
    }

    public function excluir()
    {
        $sql = "DELETE FROM clientes WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $conexao->exec($sql); 
    }

    public function carregar()
    {
        $sql = "SELECT * FROM clientes WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->nome = $linha['nome'];
        $this->datanasc = $linha['datanasc'];
        $this->telefone = $linha['telefone'];
        $this->cpf = $linha['cpf'];
        $this->email = $linha['email'];
        $this->senha = $linha['senha'];
        $this->cep = $linha['cep'];
        $this->rua = $linha['rua'];
        $this->numero = $linha['numero'];
        $this->bairro = $linha['bairro'];
        $this->cidade = $linha['cidade'];

    }

    public function atualizar()
    {
        $sql = "UPDATE clientes SET 
                    nome = '$this->nome' ,
                    datanasc = '$this->datanasc' ,
                    telefone = '$this->telefone' ,
                    cpf = '$this->cpf' ,
                    email = '$this->email' ,
                    senha = '$this->senha' ,
                    cep = '$this->cep' ,
                    rua = '$this->rua' ,
                    numero = '$this->numero' ,
                    bairro = '$this->bairro' ,
                    cidade = '$this->cidade'                    
                WHERE id = $this->id ";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $conexao->exec($sql);
    }
}