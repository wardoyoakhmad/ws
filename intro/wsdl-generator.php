<?php

// php2wsdl from phpclasses.org
require("php2wsdl/WSDLCreator.php");

$wsdlgen = new WSDLCreator("LibraryWSDL", "http://localhost/ws/intro/wsdl");
$wsdlgen->addFile("library2.php");
$wsdlgen->addURLToClass("Library", "http://localhost/ws/intro/soap-server2.php");

$wsdlgen->createWSDL();
$wsdlgen->saveWSDL("wsdl");
