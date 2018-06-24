<?php
// // router.php
// $path = pathinfo($_SERVER["SCRIPT_FILENAME"]);
// if ($path["extension"] == "") {
//     header("Content-Type: application/x-httpd-php ");
//     $path["extension"] = "php";
//     return false;
//     readfile($_SERVER["SCRIPT_FILENAME"]);
//     echo $path["filename"] . ".php";
//     // echo "<p>Welcome to PHP</p>";
// }
// if requested file is'nt a php file
// if (!preg_match('/\.php$/', $requestedAbsoluteFile)) {
//   // header('Content-Type: '.mime_content_type('application/php'));
//   // $fh = fopen($requestedAbsoluteFile, 'r');
//   // fpassthru($fh);
//   // fclose($fh);
//   // return true;
//     echo 'test';
// }
// else {
//     return FALSE;
// }
?>

<?php
// router.php
$path = pathinfo($_SERVER["SCRIPT_FILENAME"]);
if ($path["extension"] == "el") {
    header("Content-Type: text/x-script.elisp");
    readfile($_SERVER["SCRIPT_FILENAME"]);
}
else {
    return FALSE;
}
?>