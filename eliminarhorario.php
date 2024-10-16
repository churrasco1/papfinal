<?php
$Nrsala = $_GET['Nrsala']; 

// Ligar e selecionar a base de dados
include('ligabd.php');

// Verificar se já está registrado
$existe = "SELECT * FROM horarios1 WHERE Nrsala = '$Nrsala'";
$faz_existe = mysqli_query($mysqli, $existe);
$jaexiste = mysqli_num_rows($faz_existe);

if ($jaexiste > 0) {
    $insere = "DELETE FROM horarios1 WHERE Nrsala = '$Nrsala'";
    $faz_insere = mysqli_query($mysqli, $insere);

    if ($faz_insere) {
        echo "Dados da sala '$Nrsala' excluídos com sucesso!";
        echo "<br>";
        echo "<br>";
        echo "<a href='administrador.php'>Voltar</a>";
    } else {
        echo "Erro ao excluir dados da sala: " . mysqli_error($mysqli);
    }
} else {
    echo "A sala '$Nrsala' não existe!";
    echo "<br>";
        echo "<br>";
        echo "<a href='administrador.php'>Voltar</a>";
}

exit;
?>
