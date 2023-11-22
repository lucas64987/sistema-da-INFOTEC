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
      
        // Convertendo o preço para um número decimal
        $preco = floatval(str_replace(',', '.', $_POST['preco'])); // Converte ',' para '.' se houver

        $dados = [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'quantidade' => $_POST['quantidade'],
            'preco' => $preco, // Usando o valor convertido
            'cod_produto' => $_POST['cod_produto'],
            'categoria' => $_POST['categoria']
        ];

        if (isset($_FILES['capa']['name']) && !empty($_FILES['capa']['name'])) {
          $fileInfo = pathinfo($_FILES['capa']['name']);

          //Gera um novo nome aleatorio
          $nomeArquivo = md5(uniqid());

          //Diretorio de Destino
          $uploaDir = __DIR__ . "/../uploads/";

          //garante que a pasta existe
          if (!is_dir($uploaDir)) {
              mkdir($uploaDir, 0777, true);
          }

          //Renomeia o arquivo original para o nome aleatório
          $novoNomeArquivo = $nomeArquivo . "." . $fileInfo['extension'];

          //configura a pasta de destino, onde o arquivo será salvo
          $pastaDestino = $uploaDir . $novoNomeArquivo;

          //Salva o arquivo na pasta
          move_uploaded_file($_FILES['capa']['tmp_name'], $pastaDestino);


          //Grava o caminho do arquivo no banco de dados
          $dados['capa'] = $novoNomeArquivo;


      }
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

     if(isset($_FILES['capa']['name']) && !empty($_FILES['capa']['name'])) {
      $fileinfo = pathinfo($_FILES['capa']['name']);
     
      //gera um novo nome aleatorio
      $nomearquivo = md5(uniqid());

      //garante que a pasta existe
      $uploadDIR =__dir__."/../uploads/";

      if(!is_dir($uploadDIR)) {
          mkdir($uploadDIR,0777, true);

      }
      //renomeia o arquivo para o nome aleatorio
      $novoNomeArquivo = $nomearquivo . "," . $fileinfo["extension"];
     
      //configura a pasta da
      $pastaDestino = $uploadDIR . $novoNomeArquivo;

      move_uploaded_file($_FILES['capa']['tmp_name'], $pastaDestino);

      $dados['capa'] = $novoNomeArquivo;

  } else {
      $dados['capa'] = $dados->capa;
  }

     $this->produtoModel1->editar($id_produto,$dados);

     header('location: index.php');

     exit;

  }



  return $this->produtoModel1->buscar($id_produto);

}




 public function exculirproduto(){
  $dados = $this->produtoModel1->buscar($_GET['id_produto']);
  $imagemCapa = __DIR__ . "/../uploads/" . $dados->capa;
  unset($imagemCapa);

  $this->produtoModel1->excluir($_GET['id_produto']);
  header('location: index.php');
  exit;
 }
 
 }


