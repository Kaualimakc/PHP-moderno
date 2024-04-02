<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>
        <?php
        echo "Olá mundo! \u{1F6F8}"
        ?>    
    </h1>
    
    <P>Para mostrar informações osbre o servidor basta dar o comando phpinfo();</P>
    
    <?= print "testando short tag" ?>

    <?php
    $nome = "PHP";

    date_default_timezone_set("America/Sao_paulo");
    echo"<p> Estudando a linguagem de $nome , no dia " .date("d/M/Y");
    echo " e a hora atual é " .date("G:i:s");
    ?> 
</body>
</html>