<?php
// Verificar se o código é válido (por exemplo, "codigo123")
$validCode = "codigo123";
$submittedCode = $_POST["codigo"];

$response = array("valid" => false);

if ($submittedCode === $validCode) {
    $response["valid"] = true;

    // Marcar o código como utilizado, para que não possa ser usado novamente
    $file = fopen("codigo_utilizado.txt", "w");
    fwrite($file, $validCode);
    fclose($file);
}

echo json_encode($response);
?>
