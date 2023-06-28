<?php

session_start();
if (isset($_SESSION['login'])){
    echo "welkom ".$_SESSION['user'];
}else{
    header("location: index.php");
}
?>

<?php
if(isset($_POST['form_submit']))
{
    $title=$_POST['title'];
    $folder = "img/";
    $image_file=$_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $path = $folder . $image_file;
    $target_file=$folder.basename($image_file);
    $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//Allow only JPG, JPEG, PNG & GIF etc formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
    }
//Set image upload size
    if ($_FILES["image"]["size"] > 10048576) {
        $error[] = 'Sorry, your image is too large. Upload less than 1 MB in size.';
    }
    if(!isset($error))
    {
        //move image to the folder
        move_uploaded_file($file,$target_file);
        $result=mysqli_query($conn,"INSERT INTO fotos(image,title) VALUES('$image_file','$title')");
        if($result)
        {
            $image_success=1;
        }
        else
        {
            echo 'Something went wrong';
        }
    }
}
if(isset($error)){

    foreach ($error as $error) {
        echo '<div class="message">'.$error.'</div><br>';
    }
}
?>
<div class="Container">
    <?php if(isset($image_success))
    {
        echo '<div class="success">Image Uploaded successfully</div>';
    } ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Foto </label>
        <input type="file" name="image" required >
        <br><br>
        <label>Comment</label>
        <input type="text" name="title" class="form-control">
        <br><br>
        <button name="form_submit" class="btn-primary"> Upload</button>
    </form>
</div>
<div class="container_display">
    <table cellpadding="10">
        <tr>
            <th>Foto</th>
            <th>Comment</th>
        </tr>
        <?php $res=mysqli_query($conn,"SELECT* from fotos ORDER by id DESC");
        while($row=mysqli_fetch_array($res))
        {
            echo '<tr> 
                  <td><img src="img/'.$row['image'].'" height="200"></td> 
                  <td>'.$row['title'].'</td> 

				</tr>';

        } ?>

    </table>
</div>