<?php
$Nrsala = $_POST['Nrsala'];
$Codhoras = $_POST['Codhora'];

// Ligar e selecionar a base de dados
include('ligabd.php');

// Início das ações sobre a BD
for ($i = 0; $i < count($Codhoras); $i++) {
    $Codhora = $Codhoras[$i];
    $segunda = ''; // Defina os valores corretos para segunda, terca, quarta, quinta e sexta
    $terca = '';
    $quarta = '';
    $quinta = '';
    $sexta = '';

    // Verificar se já está registrado
    $existe = "SELECT * FROM horarios1 WHERE Nrsala = '$Nrsala' AND Codhora = '$Codhora'";
    $faz_existe = mysqli_query($mysqli, $existe);
    $jaexiste = mysqli_num_rows($faz_existe);

    if ($jaexiste == 0) {
        $insere = "INSERT INTO horarios1 (Nrsala, Codhora, segunda, terca, quarta, quinta, sexta) VALUES ('$Nrsala', '$Codhora', '$segunda', '$terca', '$quarta', '$quinta', '$sexta')";
        $faz_insere = mysqli_query($mysqli, $insere);
        header("Location: administrador.php");
    } else {
        echo "A sala '$Nrsala' já possui um horário registado no sistema!<br>";
    }
}


exit;
?>
