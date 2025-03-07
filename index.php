<!DOCTYPE html>
<html lang="en">
<head><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Disable Right Click</title>
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
    $(document).ready(function(){
        $(document).on("contextmenu",function(e){
            e.preventDefault();
            alert("Right-Click is disabled on this page!");
        });
    });
  </script>
</body>
</html>