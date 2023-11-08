<?php
 require_once $_SERVER['DOCUMENT_ROOT']. "/models/clientes.php";
class Clientecontroller{
    private $clienteModel1;

    public function __construct()
    {
        $this->clienteModel1 = new cliente();
    }


  public function listarcliente(){

    return $this->clienteModel1->listar();
  }

  public function cadastrarcliente(){
    if($_SERVER['REQUEST_METHOD']==='POST'){
      
      $dados =[
        'nome' => $_POST['nome'],
        'email'=> $_POST['email'],
        'senha'=>  password_hash($_POST['senha'],PASSWORD_DEFAULT),
        'cpf'=> $_POST['cpf'],
        'endereco'=> $_POST['endereco'],
        'telefone'=> $_POST['telefone']
      ];
      $this->clienteModel1->cadastrar($dados);

      header('location: index.php');
      exit;
    }
  }
  public function editarcliente(){

    $id_clientes=$_GET['id_clientes'];
 
    if($_SERVER['REQUEST_METHOD']== 'POST'){

      if(isset($_POST['senha']) && !empty($_POST['senha'])){
        //criar nova senha
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
      }else{
        //manter senha antiga
        $clientes = $this->clienteModel1->buscar($id_clientes);
        $senha =$clientes->senha;
      }
       $dados=[
 
          'nome'=> $_POST['nome'],
 
          'email'=>$_POST['email'],
 
          'senha'=> password_hash($_POST['senha'],PASSWORD_DEFAULT),
 
          'cpf'=>$_POST['cpf'],

          'endereco'=>$_POST['endereco'],

          'telefone'=>$_POST['telefone']
 
       ];
 
       $this->clienteModel1->editar($id_clientes,$dados);
 
       header('location: index.php');
 
       exit;
 
    }
 
  
 
    return $this->clienteModel1->buscar($id_clientes);
 
 }

 public function exculircliente(){
  $this->clienteModel1->excluir($_GET['id_clientes']);

  header('location: index.php');
  exit;
 }
 
 }


