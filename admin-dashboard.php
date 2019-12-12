<?php
require_once("./controller/auth_controller.php");
require ("./components/menu.php");
?>
    <div class="container mt-5">
    <form action="audio-upload.php" method='post' enctype="multipart/form-data">
        <label for="inputDescription">Title: </label>
        <input name="description_entered" type="text" id="inputDescription" class="form-control mb-2" aria-describedby="passwordHelpBlock">
        <div class="custom-file">
            <input name="file" type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <input type="submit" name="submit" value="Upload" class="btn btn-lg btn-primary rounded"/>

    </form>

<hr>
<div class="row mt-3">
    <div class="col">
        <?php
        $result= mysqli_query($conn, "SELECT description, filename FROM audio ORDER BY ID desc" )
        or die("SELECT Error: ".mysqli_error());

        print "<ul class='list-group-item'>";
        while ($row = mysqli_fetch_array($result)){
            $files_field= $row['filename'];
            $files_show= "audio/$files_field";
            $descriptionvalue= $row['description'];
            print "<li class='d-flex align-items-center justify-content-between'>";
            echo "<a href='".$files_show."'>$descriptionvalue</a> <span class='badge badge-success'>Uploaded:</span>";
            print "</li>";
        }
        print "</ul>";

        ?>
    </div>
</div>
    </div>
<?php
if(session_id() != '') session_destroy();
if(isset($_GET['err'])){
    if($_GET['err'] == 'bf'){
        $errorMsg = 'Please select a video file for upload.';
    }elseif($_GET['err'] == 'ue'){
        $errorMsg = 'Sorry, there was an error uploading your file.';
    }elseif($_GET['err'] == 'fe'){
        $errorMsg = 'Sorry, only MP4, AVI, MPEG, MPG, MOV & WMV files are allowed.';
    }else{
        $errorMsg = 'Some problems occured, please try again.';
    }
}
?>
<!---->
<!--    <div class="youtube-box">-->
<!--        <h1>Upload video to YouTube using PHP</h1>-->
<!--        <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="youtube_upload.php">-->
<!--            --><?php //echo (!empty($errorMsg))?'<p class="err-msg">'.$errorMsg.'</p>':''; ?>
<!--            <label for="title">Title:</label><input type="text" name="title" id="title" value="" />-->
<!--            <label for="description">Description:</label> <textarea name="description" id="description" cols="20" rows="2" ></textarea>-->
<!--            <label for="tags">Tags:</label> <input type="text" name="tags" id="tags" value="" />-->
<!--            <label for="video_file">Choose Video File:</label>	<input type="file" name="videoFile" id="videoFile" >-->
<!--            <input name="videoSubmit" id="submit" type="submit" value="Upload">-->
<!--        </form>-->
<!--    </div>-->
<?php
require ("./components/footer.php");
?>