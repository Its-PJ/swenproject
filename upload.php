<html>
    <body>
        <?php
            $filename = $_FILES['file']['name'];

            $location = "uploads/".$filename;

            if (move_uploaded_file($_FILES['file']['tmp_name'], $location)){
                echo '<p>File uploaded Successfully</p>';
                echo '<a href="dashboard.html" id="return">Return</a>';
                /*header('Location: uploader.php');
                exit;*/
            }else{
                echo '<b>Error uploading file. Please try again.</b>';
                
            }
        ?>
    </body>
</html>