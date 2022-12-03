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
            $this->carregar();
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
        $sql = "SELECT id, nome, preco, imagem
                FROM produtos";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
    }

    // FILTROS

    public function consTenis()
    {
        $sql = "SELECT * FROM produtos  WHERE tipo = 'Tenis'";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
    }

    public function consAces()
    {
        $sql = "SELECT * FROM produtos  WHERE tipo = 'Acessorios'";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
    }

    public function consRoupas()
    {
        $sql = "SELECT * FROM produtos  WHERE tipo = 'Roupas'";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
    }

    public function consOff()
    {
        $sql = "SELECT * FROM produtos  WHERE marca = 'off'";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
    }

    public function consCactus()
    {
        $sql = "SELECT * FROM produtos  WHERE marca = 'Cactus'";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
    }

    public function consSupre()
    {
        $sql = "SELECT * FROM produtos  WHERE marca = 'Supreme'";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
    }
    
    public function consBape()
    {
        $sql = "SELECT * FROM produtos  WHERE marca = 'Bape'";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
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
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
    $conexao->exec($sql);
    }  

    // FUNÇÕES DE BOTÃO

    public function excluir()
    {
        $sql = "DELETE FROM produtos WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $conexao->exec($sql); 
    }

    public function carregar()
    {
        $sql = "SELECT * FROM produtos WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->nome = $linha['nome'];
        $this->marca = $linha['marca'];
        $this->peso = $linha['peso'];
        $this->tipo = $linha['tipo'];
        $this->descricao = $linha['descricao'];
        $this->preco = $linha['preco'];
        $this->imagem = $linha['imagem'];
    }

    public function atualizar()
    {
        $sql = "UPDATE produtos SET 
                    nome = '$this->nome' ,
                    marca = '$this->marca' ,
                    peso = '$this->peso' ,
                    tipo = '$this->tipo' ,
                    descricao = '$this->descricao' ,
                    preco = '$this->preco' ,
                    imagem = '$this->imagem'                    
                WHERE id = $this->id ";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $conexao->exec($sql);
    }
    
}
