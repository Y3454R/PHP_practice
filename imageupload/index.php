<!-- ref: https://youtu.be/onu3w8kqASU -->

<!DOCTYPE html>
<html>
<head>
    <title>Image upload practice</title>
</head>
<body>
    <?php if(isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="my_image">
        <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>