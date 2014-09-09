<?php

class Library
{
    public function getBooks() {
        $books = array(
          "Service Design Patterns Fundamental Design Solutions for SOAP WSDL and RESTful Web Services", 
          "Getting Started with OAuth 2.0", 
          "RESTful Web Services Cookbook Solutions for Improving Scalability and Simplicity",
        );
        return $books;
    }

    public function greetStudent($name) {
        return array(
          "message" => "Hello, " . $name
        );
    }
}
