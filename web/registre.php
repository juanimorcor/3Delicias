<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $nom = $data['nom'] ?? '';
    $email = $data['email'] ?? '';
    $telefon = $data['telefon'] ?? '';
    $tipus = $data['tipus_esdeveniment'] ?? 'altres';
    $missatge = $data['missatge'] ?? '';
    $payment_method = $data['payment_method'] ?? '';
    $cardholder_name = $data['cardholder_name'] ?? '';
    $cardholder_email = $data['cardholder_email'] ?? '';
    $total_amount = $data['total_amount'] ?? 0;
    $cake_ingredients = $data['cake_ingredients'] ?? '';

    $stmt = $conn->prepare("INSERT INTO clients1 (nom, email, telefon, tipus_esdeveniment, missatge, payment_method, cardholder_name, cardholder_email, total_amount, cake_ingredients)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssds", $nom, $email, $telefon, $tipus, $missatge, $payment_method, $cardholder_name, $cardholder_email, $total_amount, $cake_ingredients);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Gràcies ' . $nom . '! Hem rebut la teva comanda.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
