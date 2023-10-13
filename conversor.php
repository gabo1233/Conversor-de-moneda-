<?php
if (isset($_POST['bolivares']) && isset($_POST['dolar'])) {
    $bolivares = $_POST['bolivares'];
    $dolar = $_POST['dolar'];

    $conversion = $bolivares / $dolar;
    $conversion = number_format($conversion, 2);
	?>

    <h1>Resultado de la Conversión</h1>;
    <p><?php echo "$bolivares Bolívares equivalen a $conversion Dólares";?></p>;
	
	<?php
} else {
    echo '<h1>Error</h1>';
    echo '<p>Todas las entradas son obligatorias</p>';
}
?>


