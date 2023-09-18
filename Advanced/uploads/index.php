<?php require('header.inc.php'); ?>
<div class="container">
    <h1>File Upload</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload" class="form-label">Select File to Upload</label>
        <div class="input-group mb-3">
            <input type="file" class="form-control form-control-lg" id="fileToUpload" name="fileToUpload">
            <input type="submit" class="btn btn-outline-secondary" value="Upload" id="submitBtn" name="submitBtn">
        </div>
    </form>
</div>
<?php require('footer.inc.php'); ?>