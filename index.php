<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Your text</title>
</head>
<body>
    <h2>Leave your text file</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select textfile to upload:
        <input type="text" name="content" id="content" placeholder="Hello world" style="width:200px"></br></br></br>
	<input type="text" name="fileName" id="fileName" placeholder="filename" style="width:200px"></br></br></br>
        <input type="submit" value="Upload Text" name="submit"></br></br></br>
    </form>
</body>
</html>
