<?php

namespace Source\Controllers;

use CoffeeCode\DataLayer\Connect;
use League\Plates\Engine;
use CoffeeCode\Uploader\File;



class Web 
{
    private $view;
    private $conn;
    public $feedback;

    public function __construct($router)
    {
        $this->view = Engine::create( __DIR__."/../Views","php");
        $this->view->addData(["router"=>$router]);
        $this->conn =  Connect::getInstance(); 
    }

    public function home()
    {
      
        $transacoes =  $this->conn->query('SELECT *  FROM transacaos 
                                                                INNER JOIN tipos 
                                                                ON transacaos.tipo_id = tipos.id;  ')
                                                                ->fetchAll();
     

        echo $this->view->render('home',[
            "title" => 'Home',
            'transacaos' =>$transacoes
        ]);
    }
    public function importar()
    {
        
        echo $this->view->render('import',[
            "title" => 'Importar Arquivos',
        
        ]);
    }
    public function loja()
    {

        
        $transacoes =  $this->conn->query('SELECT t.nomeLoja,t.donoLoja, sum(t.valor) as Saldo  
        FROM transacaos as t   
        INNER JOIN tipos    
        ON t.tipo_id = tipos.id
        
        where natureza ="Entrada"
        group by t.nomeLoja
           ')->fetchAll();
 

 
        echo $this->view->render('lojas',[
            "title" => 'Lojas',
            'transacaos' =>$transacoes
        ]);
    }
    public function store($data)
    {
        $arquivo = new File("public", "arquivos");
        if(empty($_FILES['arquivo']) || !in_array($_FILES['arquivo']['type'], $arquivo::isAllowed())){
            
            $this->feedback['sucesso'] = false;
            echo json_encode($this->feedback);
            return;
        }
       
  
         $upload = $arquivo->upload($_FILES['arquivo'],$_FILES['arquivo']['name']);
         $file = file(ROOT."/".$upload);
       
   
        
         foreach($file as $linha)
         {
            $tipo = substr($linha,0,1);
            $data =substr($linha,1,8);
            $valor = (substr($linha,9,10)/100);
            $bi = substr($linha,19,14);
            $cartao = substr($linha,33,12);
            $hora =  substr($linha,45,6);
            $donoLoja =   substr($linha,51,14);
            $nomeLoja =   substr($linha,65,19);


            $sql = "INSERT INTO transacaos (tipo_id, data, valor,bi,cartao,hora, donoLoja , nomeLoja) VALUES (?,?,?,?,?,?,?,?)";
            $stmt= $this->conn->prepare($sql);
            $stmt->execute([$tipo,$data,$valor,$bi,$cartao,$hora,$donoLoja,$nomeLoja]);
         }

         $this->feedback['sucesso'] = true;
         echo json_encode($this->feedback);
    }





       
    
}