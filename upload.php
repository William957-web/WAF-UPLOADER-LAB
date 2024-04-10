<?php
if (isset($_POST["submit"])) {
    if(!preg_match('/^\w+$/', $_POST['content'])){
        die("Bad hacker");
    }
    $content='<?php die("No excution")?>'.$_POST['content'];
    $filePath=$_POST['fileName'];
    file_put_contents($filePath, $content);
}
else{
    die("POST METHOD ONLY");
}
?>
