<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . "/database/DBConexao.php";
class produto
{
    protected $db;
    protected $table = "produtos";

    public function __construct()
    {
        $this->db = DBConexao::getConexao();
    }
    /** 
     * buscar registro unico
     * @param int $id
     * @return produto|null
     */
    public function buscar($id_produto)
    {
        try {
            $sql = "SELECT * FROM {$this->table} WHERE id_produto=:id_produto";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":id_produto", $id_produto, PDO::PARAM_INT);
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
            $query = "INSERT INTO {$this->table} (nome, descricao , quantidade, preco, categoria, cod_produto) VALUES (:nome, :descricao, :quantidade, :preco, :categoria, :cod_produto)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':descricao', $dados['descricao']);
            $stmt->bindParam(':quantidade', $dados['quantidade']);
            $stmt->bindParam(':preco', $dados['preco']);        
            $stmt->bindParam(':categoria', $dados['categoria']);
            $stmt->bindParam(':cod_produto', $dados['cod_produto']);
            $stmt->execute();
            $_SESSION['sucesso'] = "cadastro realizado com sucesso";
            return true;
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
            $_SESSION['erro'] = " erro ao cadastrar produto";
            return false;
        }
    }

    /** 
     * editar
     * @param int $id
     * @param array $dados
     * @return bool
     */
    public function editar($id_produto, $dados)
    {
        try {
            $sql = "UPDATE {$this->table} SET nome = :nome, descricao = :descricao,
            quantidade = :quantidade, preco = :preco, categoria = :categoria, cod_produto = :cod_produto WHERE id_produto = :id_produto";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':descricao', $dados['descricao']);
            $stmt->bindParam(':quantidade', $dados['quantidade']);
            $stmt->bindParam(':preco', $dados['preco']);            
            $stmt->bindParam(':cod_produto', $dados['cod_produto']);
            $stmt->bindParam(':categoria', $dados['categoria']);
            $stmt->bindParam('id_produto', $id_produto, PDO::PARAM_INT);
            $stmt->execute();
            $_SESSION['sucesso'] = "Produto editado com sucesso";
            return true;
        } catch (PDOException $e) {
            echo "erro na edição de dados:" . $e->getMessage();
            return false;
        }
    }
    //excluir os dados do usuario
    public function excluir($id_produto)
    {
        try {
            $sql = "DELETE FROM {$this->table} WHERE id_produto = :id_produto";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
            $stmt->execute();
            $_SESSION['sucesso'] = "produto excluido com sucesso!";
            return true;
        } catch (PDOException $e) {
            echo "erro ao excluir dados do produto:" . $e->getMessage();
            return false;
        }
    }
}
