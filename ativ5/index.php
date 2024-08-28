<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = floatval($_POST['base']);
    $height = floatval($_POST['height']);
    
    // Calcula a área do triângulo
    $area = ($base * $height) / 2;
    $limit = 100;
    
    // Verifica se a área é maior do que o valor limite
    if ($area > $limit) {
        $message = "A área do triângulo é $area, que é maior que $limit.";
    } else {
        $message = "A área do triângulo é $area, que é menor ou igual a $limit.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Área</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Resultado da Área</h1>
        <p><?php echo $message; ?></p>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>
