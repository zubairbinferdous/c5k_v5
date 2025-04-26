<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer</title>
</head>
<body style="margin: 0; padding: 0;">

    <iframe 
      src="https://c5k.com/pdf.php?file={{ url('public/chapters/' . $file) }}" 
      style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; border: none;" 
      frameborder="0">
    </iframe>

</body>
</html>