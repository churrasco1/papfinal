
<style>
    .content-table {
    border: 1px;
    margin: 25px 0;
    font-size: 0.9em;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	width: 80%;
	
}

.content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
}

	


.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

a{
	text-decoration: none;
	color: black;
}

</style>
<?php
include('ligabd.php');

$pesq = $_GET["pesquisa"];
$pesquisa = $pesq;

$sql = "SELECT * FROM professor WHERE NifProf LIKE '$pesquisa'";
$resultado = mysqli_query($mysqli, $sql);
$numregistos = mysqli_num_rows($resultado);

if ($numregistos == 0) {
    header("Location: editar.php?erro=1");
} 
?>
<html>
    <head>
        <title>Editar Professor</title>
    </head>
    <body>
        <form action="atualizaprofessor.php" method="POST">
            <table class="content-table">
                <?php while ($registo = mysqli_fetch_array($resultado)) { ?>
                    <tr>
                        <td>NIF: </td>
                        <td><input type="text" name="NifProf" readonly value='<?php echo $registo['NifProf']; ?>'></td>
                    </tr>
                    <tr>
                        <td>Morada: </td>
                        <td><input type="text" name="Morada" value='<?php echo $registo['Morada']; ?>'></td>
                    </tr>
                    <tr>
                        <td>Telemóvel: </td>
                        <td><input type="text" name="Telemovel" value='<?php echo $registo['Telemovel']; ?>'></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" name="Email" value='<?php echo $registo['Email']; ?>'></td>
                    </tr>
                    <tr>
                        <td>Codpostal: </td>
                        <td><input type="text" name="Codpostal" value='<?php echo $registo['Codpostal']; ?>'></td>
                    </tr>
                    <tr>
                        <td>Nome: </td>
                        <td><input type="text" name="User" value='<?php echo $registo['User']; ?>'></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
            </table>
        </form>
    </body>
    <?php echo "<form action = \"editar.php\" method = \"POST\">
	<p><input class=\"voltar\" type = \"submit\" value = \"Voltar\"></p>
	</form>";?>
</html>
