<?php
$nomeLivro =$_POST["nomeLivro"];
$alunoProf = $_POST["alunoProf"];
if ($alunoProf ==1)
{ 
    $devProf = date('d/m/Y',strtotime('+ 3 days'));
    echo '<strong>Recido de Aluno :<strong>'.' O nome do livro é : '.$nomeLivro. ', sua devolução será em :'. $devProf ;
}
else
{
    $hoje = date('d/m/Y',strtotime('+ 10 days'));
    echo '<strong>Recido de Professor :<strong>'.'O nome do livro é : '.$nomeLivro .', sua devolução será em :'. $hoje;
}
?>