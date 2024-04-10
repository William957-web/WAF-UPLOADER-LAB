<?php
if (isset($_GET["submit"])) {
    if(!preg_match('/^\w+$/', $_GET['content'])){
        die("Bad hacker");
    }
    $content='<?php die("No excution")?>'.$_GET['content'];
    $filePath=$_GET['fileName'];
    file_put_contents($filePath, $content);
}
else{
    die("POST METHOD ONLY");
}
?>
