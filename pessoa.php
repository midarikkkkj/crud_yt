<?php
require_once 'conexao.php';

class Pessoa
{
    private $id_pessoa;
    private $nome;

    public function __construct($id = false)
    {
        if($id){
            $this->id_pessoa = $id;
            $this->carregar();
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getId()
    {
        return $this->id_pessoa;
    }

    public function carregar(){
        $conexao = Conexao::conectar();
        $sql = "SELECT * FROM pessoa WHERE id_pessoa = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->getId());
        $stmt->execute();
        $resultado = $stmt->fetch();
        $this->setNome($resultado['nome']);


    }

    public function criar()
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "INSERT INTO pessoa (nome) VALUES (:nome)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':nome', $this->getNome());
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function listar()
    {
        try {
            $conexao = Conexao::conectar();

            $sql = "SELECT * FROM pessoa";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            $lista = $stmt->fetchAll();
            return $lista;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deletar()
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "DELETE FROM pessoa WHERE id_pessoa = id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $this->getId());
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
