<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Your text</title>
</head>
<body>
    <h2>Leave your text file</h2>
    <form action="upload.php" method="get" enctype="multipart/form-data">
        Content  : <input type="text" name="content" id="content" placeholder="Hello world" style="width:200px"></br></br></br>
	Filename:<input type="text" name="fileName" id="fileName" placeholder="filename" style="width:200px"></br></br></br>
        <input type="submit" value="Upload Text" name="submit"></br></br></br>
    </form>
</br></br></br>
<a href="view.php">View Source</a>
</body>
</html>
