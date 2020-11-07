<form method="post" action="/" style="width: 100%">
    <input type="hidden" name="path" value="<?= $path ?>">
    <textarea
            id="mytextarea"
            name="file-content"
            style="width:100%; min-height: 500px"
    >
        <?= $fileContent ?>
    </textarea>
    <button style="background-color: grey; color: white">
        Save changes
    </button>
</form>