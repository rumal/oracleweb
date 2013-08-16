<?php

$query = isset($_POST['q']) ? $_POST['q'] : "";

if ($query) {
    $ch = curl_init();

// set url
    curl_setopt($ch, CURLOPT_URL, "http://oracle.cloudcontrolled.com/mo_cc.php");

//return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $posts = array('sourceAddress' => 'oracleweb', 'message' => "oracle ".$query, 'requestId' => 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($posts));

    $responseMsg = curl_exec($ch);
    curl_close($ch);
    if ($responseMsg) {
        echo json_encode(array(
            'status' => 'success',
            'response' => $responseMsg
        ));
    } else {
        echo json_encode(array(
            'status' => 'warning',
            'response' => "Oracle could not understand '" . $query . "'"
        ));
    }
} else {
    echo json_encode(array(
        'status' => 'error',
        'response' => "Ask a question to answer"
    ));
}
?>