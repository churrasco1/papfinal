<?php
include('ligabd.php');
?>

<form action="eliminarprof.php" method="GET">
    <fieldset id="fie">
        <legend>Eliminar Professor</legend><br>
        <table>
            <tr>
                <td><label>Escreva o NIF do professor a eliminar:  </label></td>
</tr>
<tr>
    <td><input type="text" name="NifProf" id="NifProf"></td>
    <td><input type="submit" value="Eliminar"></td>
</tr>
</table>
<br>
<a href="administrador.php">Voltar</a>

</fieldset> </form>