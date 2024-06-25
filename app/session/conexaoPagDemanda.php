<?php
include ('../../app/db/connection.php');
// include ('verificacao.php');

session_start();
if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["cpf"]) && !empty($_POST["estado"]) && !empty($_POST["telefone"]) 
    && !empty($_POST["cidade"]) && !empty($_POST["descricao"])){

    $nome= mysqli_real_escape_string($connection, $_POST["nome"]);
    $email= mysqli_real_escape_string($connection, $_POST["email"]);
    $cpf= mysqli_real_escape_string($connection, $_POST["cpf"]);
    $estado= mysqli_real_escape_string($connection, $_POST["estado"]);
    $telefone= mysqli_real_escape_string($connection, $_POST["telefone"]);
    $cidade= mysqli_real_escape_string($connection, $_POST["cidade"]);
    $descricao= mysqli_real_escape_string($connection, $_POST["descricao"]);





    $query ="INSERT INTO demandas() 
    VALUES (null,'{$nome}', '{$email}','{$cpf}','{$telefone}',
    '{$estado}','{$cidade}','{$descricao}')";

    $result= mysqli_query($connection,$query);
    

    if (!$result) {
        echo "<script language='javascript'>window.alert('Não foi possível efetuar o cadastro'); window.location.href='../../pages/editais/pagDemanda.html    ';</script>";
    } else {
        echo "<script language='javascript'>window.alert('Cadastro efetuado com sucesso'); window.location.href='../../pages/editais/pagDemanda.html';</script>";
    }
} else {
    echo "<script language='javascript'>window.alert('Por favor, preencha todos os campos do formulário'); window.location.href='../../pages/editais/pagDemanda.html';</script>";
}
exit()


//----------------------------------------------------------------------------------------------------------//

/*AQUI SE O ROW RETORNAR MAIOR QUE 0 ELE VAI  PARA A TELA SEGUINTE*/
// if($row>0){
//     $_SESSION["nome"]=$nome;
//     $_SESSION["email"]=$retorno["email"];
//     header("location:pagDemanda.html");
// }

    // if($_SESSION["email"]=="admin"){
    // header("location:admin.php");}
       
   
    //  else if($_SESSION["setor"]=="user"){
    //      header("location:page.html");
    //  }
    //  exit();
    //  }

     
    //  esse daqui serve para pesquisar certinho por que não entendi direito.
    //  if(!$_SESSION["setor"]=="admin"){
    //     header("location:index.html");}

    // if(!$_SESSION["setor"]=="user"){
    //     header("location:admin.php");}


  
 
//   else if($row==0){
//      header("location:pagDemanda.html"); /*AQUI SE O ROW RETORNAR O VALOR IGUAL A 0 ELE FICA NESSE LOPPING INFINITO DA TELA DE LOGIN*/
//      exit();
//   }

// //  o setor serve para fazer a atribuição de alguma página,
// //  ao cargo expecifico, exemplo: usuarios do setor admin,
// //  serao direcionados as paginas de 
// //  admin.php já usuarios comuns serao redirecionados para as paginas de usuario

?>
