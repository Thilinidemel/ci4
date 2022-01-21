<!DOCTYPE html>
<html lang="en">

<head>
    <title>Uploaded Images</title>
</head>

<body>
    <p><?= anchor('viewimages', 'View Uploaded Images')?></p>

    <?php foreach ($result->getResult() as $image) : ?>

        <div class="imageDiv">
            <a target="_blank" href="<?php echo base_url($image->FileName); ?>">
            <img src="<?php echo base_url($image->FileName); ?>" height="100px" width="100px" title="<?php echo $image->Title ?>">
        </a>
        <div class="imageTitle"><?php echo $image->Title ?></div>
        </div>
    <?php endforeach; ?>
</body>

</html>