<html>
    <head>
        <title>Pesquisa</title>
        <meta charset="UTF-8">
</head>
<body>
    <?php
    if (isset ($_GET['erro'])) {
        if ($_GET['erro']==1) {
        echo "<script type='text/javascript' language='javascript'> 
        alert ('Não foram encontrados registos!');
        </script>";
    }
}
?>
<form action="pesquisarprofeditar.php" method="GET">
    <fieldset id="fie">
        <legend>Pesquisa de professor</legend><br>
        <table>
            <tr>
                <td><label>Escreva o NIF a pesquisar:  </label></td>
</tr>
<tr>
    <td><input type="text" name="pesquisa" id="pesquisa"></td>
    <td><input type="submit" value="Pesquisar"></td>
</tr>
</table>
<br>
<a href="administrador.php">Voltar</a>
</fieldset> </form>

</body>
</html>