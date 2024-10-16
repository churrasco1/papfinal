<?php
include('ligabd.php');

$NifProf= $_POST['NifProf'];
$Morada= $_POST['Morada'];
$Telemovel= $_POST['Telemovel'];
$Email= $_POST['Email'];
$Codpostal= $_POST['Codpostal'];
$User= $_POST['User'];

$sql="UPDATE professor SET NifProf='$NifProf', Morada='$Morada', Telemovel='$Telemovel', 
Email='$Email', Codpostal='$Codpostal', User='$User' WHERE NifProf='$NifProf'";

mysqli_query($mysqli, $sql);
echo "<p> Atualizado com sucesso!";
echo "<br>";
echo "<a href='administrador.php'>Voltar</a>";
?>
