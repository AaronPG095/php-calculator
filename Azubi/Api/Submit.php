<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Azubi\Math\Math;

// handles POST request
// instantiate Math obj
// exec Math methods
// return results
try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    $input = json_decode(file_get_contents('php://input'), true);

    if (
        !isset($input["value1"])
        && !isset($input["value2"])
        && !isset($input["operation"])
    ) {
        throw new Exception('Missing POST parameters');
    }

    $value1 = floatval($input["value1"]);
    $value2 = floatval($input["value2"]);
    $operation = $input["operation"];
    $math = new Math();

    switch ($operation) {
        case 'Add':
            $result = $math->add($value1, $value2);
            break;
        case 'Subtract':
            $result = $math->subtract($value1, $value2);
            break;
        case 'Multiply':
            $result = $math->multiply($value1, $value2);
            break;
        case 'Divide':
            $result = $math->divide($value1, $value2);
            break;
        default:
            throw new Exception('Invalid operation: Operation not available.');
    }

    echo json_encode(["result" => $result]);
} catch (\Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
