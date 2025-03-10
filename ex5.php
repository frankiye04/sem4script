<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disable Right Click</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }

        .notice {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Right-Click Disabled</h1>
    <p>Try to right-click anywhere on this page.</p>
    <p class="notice">Note: Right-clicking is disabled using jQuery.</p>

    <script>
        $(document).on("contextmenu", e => (e.preventDefault(), alert("Right-click is disabled!")));
    </script>
</body>

</html>
