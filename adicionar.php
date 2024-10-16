<?php
include('ligabd.php');
?>

<style>
    .form-wrapper {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .form-group {
        margin-bottom: 10px;
    }

    .form-label {
        font-weight: bold;
    }

    .form-input {
        margin-left: 5px;
        padding: 5px;
    }

    .form-submit {
        margin-top: 10px;
    }

    .form-back {
        margin-top: 5px;
    }
</style>

<div class="form-wrapper">
    <form action="adicionahorario1.php" method="POST">
        <div class="form-group">
            <label for="Nrsala" class="form-label">Sala:</label>
            <input type="text" name="Nrsala" id="Nrsala" class="form-input" value="" placeholder="Insira o número da sala">
        </div>

        <?php
        $horarios = array(
            "08:30-09:15",
            "09:15-10:00",
            "10:15-11:00",
            "11:00-11:45",
            "11:55-12:40",
            "12:40-13:25",
            "13:40-14:25",
            "14:25-15:10",
            "15:25-16:10",
            "16:10-16:55",
            "17:00-17:45",
            "17:45-18:30"
        );

        foreach ($horarios as $horario) {
            echo "<input type='hidden' name='Codhora[]' value='$horario'>";
        }
        ?>

        <div class="form-group form-submit">
            <input type="submit" value="Adicionar">
        </div>
    </form>

    <form action="administrador.php" method="POST" class="form-group">
        <input class="voltar" type="submit" value="Sair">
    </form>
</div>
