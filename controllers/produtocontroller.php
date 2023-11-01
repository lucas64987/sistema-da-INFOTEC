<?php
 require_once $_SERVER['DOCUMENT_ROOT']. "/models/produtos.php";
class produtocontroller{
    private $produtoModel1;

    public function __construct()
    {
        $this->produtoModel1 = new produto();
    }


  public function listarproduto(){

    return $this->produtoModel1->listar();
  }

  public function cadastrarProduto(){
    if($_SERVER['REQUEST_METHOD']==='POST'){
      
      $dados =[
        'nome' => $_POST['nome'],
        'descricao'=> $_POST['descricao'],
        'quantidade'=> $_POST['quantidade'],
        'preco'=> $_POST['preco'],
        'cod_produto'=> $_POST['cod_produto'],
        'categoria'=> $_POST['categoria']
      ];
      $this->produtoModel1->cadastrar($dados);

      header('location: index.php');
      exit;
    }
  }
  public function editarproduto(){

    $id_produto=$_GET['id_produto'];
 
    if($_SERVER['REQUEST_METHOD']== 'POST'){

       $dados=[
 
          'nome'=> $_POST['nome'],
 
          'descricao'=>$_POST['descricao'],

          'quantidade'=>$_POST['quantidade'],
 
          'preco'=>$_POST['preco'],

          'cod_produto'=>$_POST['cod_produto'],
 
          'categoria'=>$_POST['categoria'],

          
 
       ];
 
       $this->produtoModel1->editar($id_produto,$dados);
 
       header('location: index.php');
 
       exit;
 
    }
 
  
 
    return $this->produtoModel1->buscar($id_produto);
 
 }

 public function exculirproduto(){
  $this->produtoModel1->excluir($_GET['id_produto']);

  header('location: index.php');
  exit;
 }
 
 }


