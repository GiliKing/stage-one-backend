
<?php



header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once "./class/data.php";


if(isset($_GET['slack_name']) && isset($_GET['track'])) {

    $data = new Christian;

    $slack_name = trim($_GET['slack_name'], "\"'");
    $track = trim($_GET['track'], "\"'");

    $data->setItem($slack_name, $track);

    http_response_code(200);    
    echo json_encode($data->getItem());


} else {


    http_response_code(404);     
    echo json_encode(
        array("message" => "No item found.")
    );


}
