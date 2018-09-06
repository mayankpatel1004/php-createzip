<?php
if(!empty($_FILES))
{
   $targetPath = "D:/xampp/htdocs/misc/createzip/";
   $tempFile = $_FILES['Filedata']['tmp_name'];
   $targetFile = $_FILES['Filedata']['name'];
   
   $zip_file = $targetFile.'.zip';
   $zip = new ZipArchive;
   $res = $zip->open($zip_file, ZipArchive::CREATE);
   $zip->addFile($tempFile,$targetFile);
   $zip->close();
   
   move_uploaded_file($tempFile,$targetPath.$targetFile);
}
?>
<form name="frm" method="post" action="" enctype="multipart/form-data">
    <input type="file" name="Filedata" />
    <input type="submit" name="submit" value="Save" />
</form>