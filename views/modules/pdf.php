<?php
// Conectar a la base de datos
$dsn = 'mysql:host=localhost;dbname=proyectoalmuerzos';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener la última fila insertada
    $sql = "SELECT * FROM reportes ORDER BY id DESC LIMIT 1"; // Suponiendo que 'id' es la llave primaria
    $stmt = $pdo->query($sql);
    $reporte = $stmt->fetch(PDO::FETCH_ASSOC);

    // Comprobar si se encontró un reporte
    if ($reporte) {
        // Generar el PDF
        require('fpdf/fpdf.php'); // Asegúrate de que la ruta sea correcta

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Último Reporte Insertado', 0, 1, 'C');

        // Imprimir los datos en una tabla
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 10, 'Campo', 1);
        $pdf->Cell(150, 10, 'Valor', 1);
        $pdf->Ln();

        // Imprimir los datos del reporte en la tabla
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'ID', 1);
        $pdf->Cell(150, 10, $reporte['id'], 1);
        $pdf->Ln();

        $pdf->Cell(40, 10, 'Fecha de Entrega', 1);
        $pdf->Cell(150, 10, $reporte['fechaEntrega'], 1);
        $pdf->Ln();

        $pdf->Cell(40, 10, 'Curso ID', 1);
        $pdf->Cell(150, 10, $reporte['cursoId'], 1);
        $pdf->Ln();

        $pdf->Cell(40, 10, 'ID de Usuario', 1);
        $pdf->Cell(150, 10, $reporte['Id_usuario'], 1);
        $pdf->Ln();

        $pdf->Cell(40, 10, 'ID de Menú', 1);
        $pdf->Cell(150, 10, $reporte['id_menu'], 1);
        $pdf->Ln();

        // Salvar el PDF
        $pdfFilePath = 'reporte_' . $reporte['id'] . '.pdf'; // Nombre del archivo
        $pdf->Output('F', $pdfFilePath);

        // Generar un script de redirección
        echo "<script type='text/javascript'>
                window.onload = function() {
                    window.location.href = '$pdfFilePath';
                }
              </script>";
    } else {
        echo "No se encontraron reportes.";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>