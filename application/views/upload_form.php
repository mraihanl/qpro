<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo form_open_multipart('upload/tes_upload');?>

<input type="file" name="imgurl" size="20" />

<br /><br />

<input type="submit" name="submit" />

</form>

</body>
</html>