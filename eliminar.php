<?php
include('ligabd.php');
?>

<form action="eliminarhorario.php" method="GET">
    <fieldset id="fie">
        <legend>Eliminar sala</legend><br>
        <table>
            <tr>
                <td><label>Escreva a sala a eliminar:  </label></td>
</tr>
<tr>
    <td><input type="text" name="Nrsala" id="Nrsala"></td>
    <td><input type="submit" value="Eliminar"></td>
</tr>
</table>
<br>
<a href="administrador.php">Voltar</a>

</fieldset> </form>