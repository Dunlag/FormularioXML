<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data
    $modelo  = $_POST['opcion'];
    $server  = $_POST['server'];
    $port    = $_POST['port'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create the XML document
    $xml = new DOMDocument('1.0', 'UTF-8');

    // Create the root element
    $root = $xml->createElement('telefono');
    $xml->appendChild($root);

    // Add child elements with form data
    $child = $xml->createElement('modelo', $modelo);
    $root->appendChild($child);

    $child = $xml->createElement('servidor', $server);
    $root->appendChild($child);

    $child = $xml->createElement('puerto', $port);
    $root->appendChild($child);

    $child = $xml->createElement('usuario', $username);
    $root->appendChild($child);

    $child = $xml->createElement('contrasena', $password);
    $root->appendChild($child);

    // Save the XML to a file (replace 'config.xml' with your desired filename)
    $xml->save('config.xml');

    // Optional: Show success message or redirect to another page
    echo 'Configuracion guardada exitosamente!';
} else {
    // This part executes if the form is not submitted (initial page load)
    // You can add any logic here if needed
}
