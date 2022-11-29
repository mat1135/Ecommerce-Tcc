<?php
class Venda
{
    public $id;
    public $nome_prod;
    public $marca_prod;
    public $tamanho_prod;
    public $tipo_prod;
    public $qnt_prod;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
        }
    }
    
    public function listar()
    {
        $sql = "SELECT id, nome_prod, tipo_prod, qnt_prod
                FROM vendas 
                ORDER BY id";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;       
    }

    public function inserir()
    {
        $sql = "INSERT INTO vendas (nome_prod, marca_prod, tamanho_prod, tipo_prod, qnt_prod) VALUES (
            '" . $this->nome_prod . "', 
            '" . $this->marca_prod . "',
            '" . $this->tamanho_prod . "', 
            '" . $this->tipo_prod . "',
            '" . $this->qnt_prod . "')";        
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $conexao->exec($sql); 
    }

    public function excluir()
    {
        $sql = "DELETE FROM vendas WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $conexao->exec($sql); 
    }

    public function carregar()
    {
        $sql = "SELECT * FROM vendas WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->nome_prod = $linha['nome_prod'];
        $this->marca_prod = $linha['marca_prod'];
        $this->tamanho_prod = $linha['tamanho_prod'];
        $this->tipo_prod = $linha['tipo_prod'];
        $this->qnt_prod = $linha['qnt_prod'];
    }
}