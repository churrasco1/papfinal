<?php
$NifProf = $_GET['NifProf']; 

// Ligar e selecionar a base de dados
include('ligabd.php');

// Verificar se já está registrado
$existe = "SELECT * FROM professor WHERE NifProf = '$NifProf'";
$faz_existe = mysqli_query($mysqli, $existe);
$jaexiste = mysqli_num_rows($faz_existe);

if ($jaexiste > 0) {
    $insere = "DELETE FROM professor WHERE NifProf = '$NifProf'";
    $faz_insere = mysqli_query($mysqli, $insere);

    if ($faz_insere) {
        echo "Dados do professor '$NifProf' excluídos com sucesso!";
        echo "<br>";
        echo "<br>";
        echo "<a href='administrador.php'>Voltar</a>";
    } else {
        echo "Erro ao excluir dados do professor: " . mysqli_error($mysqli);
    }
} else {
    echo "O professor '$NifProf' não existe!";
    echo "<br>";
        echo "<br>";
        echo "<a href='administrador.php'>Voltar</a>";
}

exit;
?>
