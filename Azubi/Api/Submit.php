<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Azubi\Math\Math;

// handles POST request
// instantiate Math obj
// exec Math methods
// return results
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input["value1"]) 
            && isset($input["value2"]) 
            && isset($input["operation"])) {
        $value1 = floatval($input["value1"]);
        $value2 = floatval($input["value2"]);
        $operation = $input["operation"];

        $math = new Math();

        try {
            switch ($operation) {
                case 'add':
                    $result = $math->add($value1, $value2);
                    break;
                case 'subtract':
                    $result = $math->subtract($value1, $value2);
                    break;
                case 'multiply':
                    $result = $math->multiply($value1, $value2);
                    break;
                case 'divide':
                    $result = $math->divide($value1, $value2);
                    break;
                default:
                    echo json_encode(['error' => 'Invalid operation: Operation not available.']);
                    exit;
            }

            echo json_encode(["result" => $result]);
        } catch (\Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    } else {
        echo json_encode(['error' => 'Missing POST parameters']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method']);
}