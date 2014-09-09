<?php

$options = array(
   "location" => "http://localhost/ws/intro/soap-server.php",
  "uri" => "http://localhost");

try {
    $client = new SoapClient(null, $options);
    $books = $client->getBooks();
    var_dump($books);
} catch (SoapFault $e) {
    var_dump($e);
}
