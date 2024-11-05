<?php
function Post()
{
    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        return null;
    }

    $content_type = isset($_SERVER['CONTENT_TYPE']) ? $_SERVER['CONTENT_TYPE'] : '';

    if (strpos($content_type, 'application/json') !== false) {
        $postData = json_decode(file_get_contents('php://input'));
    } else {
        $postData = (object)$_POST;
    }

    return $postData;
}

function Get()
{
    if ($_SERVER['REQUEST_METHOD'] != "GET") {
        return null;
    }

    $queryString = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';

    parse_str($queryString, $queryParams);

    return (object)$queryParams;
}

function verify_post_method()
{
    if ($_SERVER['REQUEST_METHOD'] != "POST") echo json_encode(["error" => "invalid_method"]);
    return;
}
function verify_get_method()
{
    if ($_SERVER['REQUEST_METHOD'] != "GET") echo json_encode(["error" => "invalid_method"]);
    return;
}

function TreatedJson($arr)
{
    $json = json_encode($arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    if (json_last_error() !== JSON_ERROR_NONE) {
        return json_last_error_msg();
    }
    return $json;
}

function formatar_para_mysql($valor) {
    $valor_formatado = str_replace('.', '', $valor);
    $valor_formatado = str_replace(',', '.', $valor_formatado);
    return floatval($valor_formatado);
}

function create_pagination_links($current_page, $total_pages, $base_url)
{
    $pagination_links = '';
    for ($i = 1; $i <= $total_pages; $i++) {
        $active = $i == $current_page ? 'active' : '';
        $pagination_links .= "<li class='page-item $active'><a class='page-link' href='{$base_url}&page={$i}'>{$i}</a></li>";
    }
    return $pagination_links;
}

function formatDateToPortuguese($date) {
    $fmt = new IntlDateFormatter(
        'pt_BR',
        IntlDateFormatter::LONG,
        IntlDateFormatter::NONE,
        'America/Sao_Paulo',
        IntlDateFormatter::GREGORIAN
    );
    return $fmt->format(new DateTime($date));
}

function printData($data, $die = true) {

    echo "<pre>";
    if(is_object($data) || is_array($data)) {
        print_r($data);
    }
    else {
        die(PHP_EOL . "END" . PHP_EOL);
    }

}

function logRequestData($data) {
    $logFile = __DIR__ . '/request_log.txt';
    $logData = date('Y-m-d H:i:s') . " - " . json_encode($data) . PHP_EOL; // Formata a data e os dados em JSON
    file_put_contents($logFile, $logData, FILE_APPEND); // Grava os dados no arquivo
}