<!doctype html>
<html>
    <head>
        <title>Meu primeiro PHP</title>
    </head>
    <body>
        <?php
            echo "<h1> Olá mundo!</h1>";
            echo "<h2>Primeiro projeto PHP</h2>"; 
        ?>
        <h3>By: Duduzin</h3>
        <?php echo "Mussum Ipssum é engraçado..."; ?>
        <form action="contato.php" method="post">
            <label>Nome:</label>
            <input type="text" name="nome" />
</br>
            <label>E-mail:</label>
            <input type="mail" name="email" />
</br>
            <label>Texto:</label>
            <textarea rows="4" type="text" name="texto"></textarea>
</br>
            <label>Idade:</label>
            <input type="number" name="idade" />
</br>
        <input type="submit" value="Enviar"/>
        <input type="reset" value="Limpar"/>
        </form>
    </body>
</html>