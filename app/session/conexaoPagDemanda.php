<?php
include ('../../app/db/connection.php');
// include ('verificacao.php');

session_start();
if (!empty($_POST["nome_empresa"]) && !empty($_POST["email_empresa"]) && !empty($_POST["cnpj"]) && !empty($_POST["estado"]) && !empty($_POST["telefone_empresa"]) 
    && !empty($_POST["cidade"]) && !empty($_POST["nome_titular"]) && !empty($_POST["email_titular"]) && !empty($_POST["CPF"]) && !empty($_POST["telefone_titular"])
    &&!empty($_POST["arquivo"])){

    $nome_empresa= mysqli_real_escape_string($connection, $_POST["nome_empresa"]);
    $email_empresa= mysqli_real_escape_string($connection, $_POST["email_empresa"]);
    $cnpj= mysqli_real_escape_string($connection, $_POST["cnpj"]);
    $estado= mysqli_real_escape_string($connection, $_POST["estado"]);
    $telefone_empresa= mysqli_real_escape_string($connection, $_POST["telefone_empresa"]);
    $cidade= mysqli_real_escape_string($connection, $_POST["cidade"]);

    $nome_titular= mysqli_real_escape_string($connection, $_POST["nome_titular"]);
    $email_titular= mysqli_real_escape_string($connection, $_POST["email_titular"]);
    $cpf= mysqli_real_escape_string($connection, $_POST["CPF"]);
    $telefone_titular= mysqli_real_escape_string($connection, $_POST["telefone_titular"]);
    $arquivo= mysqli_real_escape_string($connection, $_POST["arquivo"]);




    $query ="INSERT INTO demandas(cnpj, nomeEmpresa,emailEmpresa,estadoEmpresa,telefoneEmpresa,cidadeEmpresa,nomeTitular,emailTitular,cpf,telefoneTitular,arquivo) 
    VALUES ('{$cnpj}', '{$nome_empresa}', '{$email_empresa}','{$estado}','{$telefone_empresa}',
    '{$cidade}','{$nome_titular}','{$email_titular}','{$cpf}','{$telefone_titular}','{$arquivo}')";
    echo $query;


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
