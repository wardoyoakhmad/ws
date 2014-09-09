<?php

class Library
{
    /**
     * return a list of books
     *
     * @return array The books
     */
    public function getBooks() {
        $books = $books = array(
          "Service Design Patterns Fundamental Design Solutions for SOAP WSDL and RESTful Web Services", 
          "Getting Started with OAuth 2.0", 
          "RESTful Web Services Cookbook Solutions for Improving Scalability and Simplicity",
        );
        return $books;
    }

    /**
     * Greet a student by name
     *
     * @param string $name The name to greet
     * @return string A greeting
     */
    public function greetStudent($name) {
        return "Hello, " . $name;
    }
}
