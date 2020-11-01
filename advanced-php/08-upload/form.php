<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laisse pas trainer ton file</title>
    </head>
    <body>
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1000000"> -->
            <input name="files[]" type="file" multiple>
            <button>Submit!</button>
        </form>
        <?php if(!empty($uploadErrors)): ?>
        <div>
            <?php foreach ($uploadErrors as $error): ?>
            <p style="color: red"><?= $error ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div>
            <?php foreach ($uploadedFiles as $filePath): ?>
                <?php $file = getFileName($filePath) ?>
                <img src="<?= '/uploads/' . $file  ?>" style="max-width: 100px">
                <h2> <?= $file ?></h2>
                <?php include __DIR__ . "/delete-form.php" ?>
            <?php endforeach; ?>
        </div>
    </body>
</html>

