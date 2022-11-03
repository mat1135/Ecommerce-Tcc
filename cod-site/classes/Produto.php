<?php
class Produto
{
    public $id;
    public $nome;
    public $marca;
    public $peso;
    public $tipo;
    public $descricao;
    public $preco;
    public $imagem;


    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
        }
    }
    
    public function listar()
    {
        $sql = "SELECT id, nome, marca, imagem
                FROM produtos 
                ORDER BY id";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;       
    }

    public function boxprod()
    {
        $sql = "SELECT nome, preco, imagem
                FROM produtos 
                ORDER BY id";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;       
    }

    public function detalhes()
    {
        $sql = "SELECT nome, preco, imagem, descricao
                FROM produtos";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $detalhe = $resultado->fetchAll();
        return $detalhe;       
    }

    public function inserir()
    {
        $sql = "INSERT INTO produtos (nome, marca, peso, tipo, descricao, preco, imagem) VALUES (
            '" . $this->nome . "', 
            '" . $this->marca . "',
            '" . $this->peso . "', 
            '" . $this->tipo . "',
            '" . $this->descricao . "',
            '" . $this->preco . "', 
            '" . $this->imagem . "')";   
            
    //echo $sql;
    //die();
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
    $conexao->exec($sql);
    }  

    public function excluir()
    {
        $sql = "DELETE FROM produtos WHERE id=". $this->id;
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
