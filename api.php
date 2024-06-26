<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Reader</title>
</head>
<body>
    <input type="file" id="fileInput">
    <pre id="fileContent"></pre>
    <script>
        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const content = e.target.result;
                    document.getElementById('fileContent').textContent = content;
                };
                reader.readAsText(file);
            }
        });
    </script>
</body>
</html>
