<!DOCTYPE html>
<html>

<header>Learners First Online Platform</header>
<br>
<nav id="left-sidebar" class="nav-con">
        <b><a href="dashboard.html" id="home"> Main Dashboard</a></b>
        <b><a href="register.html" id="register"> Student Registration</a></b>
        <b><a href="uploader.php" id="upload"> Upload Assignment</a></b>
        <b><a href="logout.php" id="logout"> Logout</a></b>
</nav>

<main>
    <form action ="upload.php" id="upload-form" method="POST" enctype="multipart/form-data">
    <h1>Upload</h1>  
        <br>
        <label for="subject"> Subject</label>
        <br>
        <select name ="type" id ="type"> 
            <br>
                <option value="Math">Math</option> 
                <option value="English">English</option> 
                <option value="Science">Science</option> 
                <option value="Social Studies">Social Studies</option>
            </select> 
            <br>
        <br>
        <label for="title">Title</label>
        <br>
        <input id="title" type="text" name="title" class="input" /> 
        <br>
        <br>
        <label for="description"> Description</label> 
        <br>
        <textarea id="description" type="text" name="description" class="description"></textarea> 
        <br>
        <br>
        <label for="file">Choose file to upload:</label>
        <br>
        <input type="file" name="file"/>
               <!--accept="accept=".doc, .docx,.ppt, .pptx,.txt,.pdf/>-->
        <br>
        <br>
        <input type="submit" class="btn" value="Upload"/> <!--Submit</button>-->
    </form>
</main>

</body>
</html>