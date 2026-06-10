<?php
// You can set your redirect URL here
$url = "https://google.com";
?>

<!DOCTYPE html>
<html>
<head>
    <title>extra...</title>
    <script>
        // Redirect using JS
        window.location.replace("<?php echo $url; ?>");
    </script>
</head>
<body>

</body>
</html>