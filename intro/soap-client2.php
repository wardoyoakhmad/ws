<?php
try {
    $client = new SoapClient("http://localhost/ws/intro/wsdl");
    $books = $client->getBooks();
    var_dump($books);
} catch (SoapFault $e) {
    var_dump($e);
}
