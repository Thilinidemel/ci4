<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Form</title>
</head>

<body>
<p><?= anchor('viewimages', 'View Uploaded Images')?></p><br>

<?php foreach ($errors as $error): ?>
    <li><?= esc($error) ?></li>
<?php endforeach ?>

<?= form_open_multipart('upload/upload') ?>

<h1>Uploading Images</h1>

<h4>Enter image name</h4>
<input type="text" name="title" />

<br />

<h4>Upload image</h4>
<input type="file" name="userfile" size="20" />

<br /><br /><br />

<input type="submit" value="Upload" />

</form>

</body>
</html>