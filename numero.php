<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        
            <?php 

                $num = $_POST["n"] ?? 0;

                echo "<p>Analisando o número <strong> " . number_format($num, 3, ",", ".") . " </strong> informado pelo usuario: </p>";

                $int = (int) $num;
                $fra = $num - $int;

                echo "<ul><li>A parte inteira do número é <strong> " . number_format($int, 0, "," , ".") . " </strong></ul></li>";

                echo "<ul><li>A parte fracionada do número é <strong> " . number_format($fra, 3, "," , ".") . " </strong></ul></li>";


                
            ?>
    <button onclick="javascript:window.location.href='index.html';">&#x2B05; Voltar</button>
    </main>
</body>
</html>