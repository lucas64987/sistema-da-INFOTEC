<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . "/database/DBConexao.php";
class Cliente
{
    protected $db;
    protected $table = "cadastro_clentes";

    public function __construct()
    {
        $this->db = DBConexao::getConexao();
    }
    /** 
     * buscar registro unico
     * @param int $id
     * @return produto|null
     */
    public function buscar($id_clientes)
    {
        try {
            $sql = "SELECT * FROM {$this->table} WHERE id_clientes=:id_clientes";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":id_clientes", $id_clientes, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "erro ao buscar:" . $e->getMessage();
            return null;
        }
    }

    /** 
     * lista de registro
     * @param int $id
     * @return  
     */
    public function listar()
    {
        try {
            $sql = "SELECT * FROM {$this->table}";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "erro na preparação da consulta" . $e->getMessage();
        }
    }
    /** 
     * cadastrar usuarios
     * @param array $dados
     * @return bool
     */
    public function cadastrar($dados)
    {
        try {
            $query = "INSERT INTO {$this->table} (nome, email , senha, cpf, endereco, telefone) VALUES (:nome, :email, :senha, :cpf, :endereco, :telefone)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':email', $dados['email']);
            $stmt->bindParam(':senha', $dados['senha']);
            $stmt->bindParam(':cpf', $dados['cpf']);        
            $stmt->bindParam(':endereco', $dados['endereco']);
            $stmt->bindParam(':telefone', $dados['telefone']);
            $stmt->execute();
            $_SESSION['sucesso'] = "cadastro realizado com sucesso";
            return true;
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
            $_SESSION['erro'] = " erro no cadastro";
            return false;
        }
    }

    /** 
     * editar
     * @param int $id
     * @param array $dados
     * @return bool
     */
    public function editar($id_clientes, $dados)
    {
        try {
            $sql = "UPDATE {$this->table} SET nome = :nome, email = :email,
            senha = :senha, cpf = :cpf, endereco = :endereco, telefone = :telefone WHERE id_clientes = :id_clientes";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':email', $dados['email']);
            $stmt->bindParam(':senha', $dados['senha']);
            $stmt->bindParam(':cpf', $dados['cpf']);            
            $stmt->bindParam(':endereco', $dados['endereco']);
            $stmt->bindParam(':telefone', $dados['telefone']);
            $stmt->bindParam('id_clientes', $id_clientes, PDO::PARAM_INT);
            $stmt->execute();
            $_SESSION['sucesso'] = "dados editado com sucesso";
            return true;
        } catch (PDOException $e) {
            echo "erro na edição de dados:" . $e->getMessage();
            return false;
        }
    }
    //excluir os dados do usuario
    public function excluir($id_clientes)
    {
        try {
            $sql = "DELETE FROM {$this->table} WHERE id_clientes = :id_clientes";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id_clientes', $id_clientes, PDO::PARAM_INT);
            $stmt->execute();
            $_SESSION['sucesso'] = "produto excluido com sucesso!";
            return true;
        } catch (PDOException $e) {
            echo "erro ao excluir dados do produto:" . $e->getMessage();
            return false;
        }
    }
}
