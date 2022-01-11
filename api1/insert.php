<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


if ($_SERVER['REQUEST_METHOD'] !== 'POST') :
    http_response_code(405);
    echo json_encode([
        'success' => 0,
        'message' => 'Invalid Request Method. HTTP method should be POST',
    ]);
    exit;
endif;

require 'Database.php';
$database = new Database();
$conn = $database->dbConnection();

$data = json_decode(file_get_contents("php://input"));

if (!isset($data->id_pembeli) || !isset($data->nama_pembeli) || !isset($data->no_telp) || !isset($data->alamat)) :

    echo json_encode([
        'success' => 0,
        'message' => 'Please fill all the fields | title, body, author.',
    ]);
    exit;

elseif (empty(trim($data->id_pembeli)) || empty(trim($data->nama_pembeli)) || empty(trim($data->no_telp))) :

    echo json_encode([
        'success' => 0,
        'message' => 'Oops! empty field detected. Please fill all the fields.',
    ]);
    exit;

endif;

try {

    $id_pembeli = htmlspecialchars(trim($data->id_pembeli));
    $nama_pembeli = htmlspecialchars(trim($data->nama_pembeli));
    $no_telp = htmlspecialchars(trim($data->no_telp));
    $alamat = htmlspecialchars(trim($data->alamat));

    $query = "INSERT INTO `pembeli`(id_pembeli,nama_pembeli,no_telp,alamat) VALUES(:id_pembeli,:nama_pembeli,:no_telp,:alamat)";

    $stmt = $conn->prepare($query);

    $stmt->bindValue(':id_pembeli', $id_pembeli, PDO::PARAM_STR);
    $stmt->bindValue(':nama_pembeli', $nama_pembeli, PDO::PARAM_STR);
    $stmt->bindValue(':no_telp', $no_telp, PDO::PARAM_STR);
    $stmt->bindValue(':alamat', $alamat, PDO::PARAM_STR);

    if ($stmt->execute()) {

        http_response_code(201);
        echo json_encode([
            'success' => 1,
            'message' => 'Data Inserted Berhasil masuk.'
        ]);
        exit;
    }
    
    echo json_encode([
        'success' => 0,
        'message' => 'Data not Inserted.'
    ]);
    exit;

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'success' => 0,
        'message' => $e->getMessage()
    ]);
    exit;
}