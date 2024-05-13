<?php
include ('../../app/db/connection.php');
// include ('verificacao.php');

session_start();

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


if (empty($nome_empresa) || empty($email_empresa) || empty($cnpj) || empty($estado) || empty($telefone_empresa) 
    || empty($cidade) || empty($nome_titular) || empty($email_titular) || empty($cpf) || empty($telefone_titular)
    ||empty($arquivo)){ /*aqui ele fica retornando para a página de login SE 1 DOS 2 FICAR VAZIO, até a pessoa digitar o login correto.*/
        header("location: ../../pages/editais/pagDemanda.html");{
        //script Informa campos vazios
        exit();}

    $query ="insert into demandas(cnpj, nomeEmpresa,emailEmpresa,estadoEmpresa,telefoneEmpresa,cidadeEmpresa,nomeTitular,emailTitular,cpf,telefoneTitular,arquivo) 
    values ('{$cnpj}', '{$nome_empresa}', '{$email_empresa}','{$estado}','{$telefone_empresa}',
    '{$cidade}','{$nome_titular}','{$email_titular}','{$cpf}','{$telefone_titular}','{$arquivo}')";
    echo $query;


    $result= mysqli_query($connection,$query);
    echo $result;

    if (!$result) {
        echo "<script language='javascript'>window.alert('Não foi possível efetuar o cadastro'); window.location.href='../../pages/editais/pagDemanda.html    ';</script>";
    } else {
        echo "<script language='javascript'>window.alert('Cadastro efetuado com sucesso'); window.location.href='../../pages/editais/pagDemanda.html';</script>";
    }
} else {
    echo "<script language='javascript'>window.alert('Por favor, preencha todos os campos do formulário'); window.location.href='../../pages/editais/pagDemanda.html';</script>";
}


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
