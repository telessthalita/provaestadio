<?php 
include_once("conexao.php");
$nome_completo=$_POST['nome_completo'];
$CPF=$_POST['CPF'];
$Data_de_nascimento=$_POST['Data_de_nascimento'];
$Curso_de_graduacao=$_POST['Curso_de_graduacao'];
$Instituicao_de_ensino=$_POST['Instituicao_de_ensino'];
$Carga_horaria_semanal=$_POST['Carga_horaria_semanal'];
$Setor_alocado=$_POST['Setor_alocado'];
$Nome_do_setor=$_POST['Nome_do_Setor'];
$Capacidade_do_setor=$_POST['Capacidade_do_Setor'];
$Chefe_do_setor=$_POST['Chefe_do_setor'];

$sql="insert into registro(nome completo, cpf) values ('$nome_completo','$cpf','$data_de_nascimento',$curso_de_graduacao','$instituicao_de_ensino','$carga_horaria_semanal','$setor_alocado','$nome_do_setor','$capacidade_do_setor','$chefe_do_setor')"
mysqli_close($conexao);
$salvar=mywqli_query($cinexao,$sql);
 
?>