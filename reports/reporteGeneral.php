<?php
// reportGeneral.php

// Path to JasperStarter executable
$jasperstarter = '"C:\\Users\\joelv\OneDrive\\Documents\\JasperStarter\\bin\\jasperstarter.exe"'; // Enclose in quotes

// Path to the .jasper file
$jasperFile = '"C:\\xampp\\htdocs\\cuarto\\reports\\general_report.jasper"'; // Enclose in quotes

// Output directory
$outputDir = '"C:\\xampp\\htdocs\\cuarto\\reports\\output.pdf"'; // Enclose in quotes

// Database connection parameters
$dbHost = 'localhost'; // or the IP address of your database server
$dbUser = 'root';
$dbPass = ''; // Assuming no password for root user
$dbName = 'cuarto';

// Command to execute JasperStarter
$cmd = "$jasperstarter pr $jasperFile -t mysql -u $dbUser -p \"$dbPass\" -H $dbHost -n $dbName -o $outputDir";

// Print the command for debugging
echo "Command: $cmd\n";

// Execute the command and capture the output and error
$output = shell_exec("$cmd 2>&1"); // Capture both stdout and stderr

if ($output === null) {
    echo "Error generating report";
} else {
    echo "Output: $output\n"; // Print the output for debugging
}
