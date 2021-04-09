<?php 

header("Access-Control-Allow-Origin: *");

// echo "message was delivered";
// echo '<pre>';
// print_r($_POST);
// echo '<pre>';

$sent_status= mail('heli.haavisto@edu.bc.fi', 'Sent from test PHP', $_POST['message']);

if ($sent_status) {
    echo 'message was delivered';
} else {
    echo 'sorry no message was delivered';
}

?>