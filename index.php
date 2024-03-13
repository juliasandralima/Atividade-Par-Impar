<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verificação de Números</title>
</head>
<body>
<h1>Verificação de Números</h1>
<form method="post">
<label for="numero">Digite um número:</label>
<input type="number" id="numero" name="numero" required>
<button type="submit">Verificar</button>
</form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["numero"];
 
        // Verifica se o número é par ou ímpar
        if ($num % 2 == 0) {
            echo "O número informado é PAR.<br>";
        } else {
            echo "O número informado é ÍMPAR.<br>";
        }
 
        // Verifica se o número é redondo (termina em 0)
        if ($num % 10 == 0) {
            echo "O número informado é redondo.<br>";
        } else {
            echo "O número informado não é redondo.<br>";
        }
 
        // Verifica se o número é positivo, negativo ou neutro (zero)
        if ($num > 0) {
            echo "O número informado é POSITIVO.<br>";
        } elseif ($num < 0) {
            echo "O número informado é NEGATIVO.<br>";
        } else {
            echo "O número informado é NEUTRO (ZERO).<br>";
        }
    }
    ?>
</body>
</html>