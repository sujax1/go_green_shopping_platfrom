
<!-- Index.php^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

<?php
    include 'header.php';
    // include 'classes/User.php';
    // include 'classes/Post.php';
    // include 'classes/Message.php';

    if(isset($_POST['post'])){
        $uploadOk = 1;
        $imageName = $_FILES['fileToUpload']['name'];
        $errorMessage = "";
        
        if($imageName != ""){
            $targetDir = "assets/images/posts/";
            $imageName = $targetDir . uniqid() . basename($imageName);
            $imageFileType = pathinfo($imageName, PATHINFO_EXTENSION);
            
            if($uploadOk){
                if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $imageName)){
                    //image Upload Okey
                    $errorMessage = "uploaded";
                }
                else{
                    $uploadOk = 0;
                    $errorMessage = "fail to upload";
                }
            }
        }
        
        if($uploadOk){
            $post = new Post($conn, $userLoggedIn);
            $post->submitPost($_POST['post_text'], $imageName);
        }
        else{
            echo "<div style='text-align: center;' class='alert alert-danger'> $errorMessage </div>";
        }
    }

    $user_detail_query = mysqli_query($conn,"select * from users where username='$userLoggedIn'");
    $user_array = mysqli_fetch_array($user_detail_query);
    $num_friends = (substr_count($user_array['friend_array'],","))-1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your external stylesheet here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .index-wrapper {
            display: flex;
            justify-content: space-between;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info-box {
            width: 30%;
        }

        .info-inner {
            padding: 20px;
        }

        .info-in-head img {
            width: 100%;
            border-radius: 8px;
        }

        .info-in-body {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .in-b-img img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .info-body-name {
            margin-left: 20px;
        }

        .info-body-name a {
            text-decoration: none;
            color: #333;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .info-body-name small {
            color: #777;
        }

        .info-in-footer {
            margin-top: 20px;
        }

        .number-wrapper {
            display: flex;
            justify-content: space-between;
        }

        .num-box {
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .num-box .num-head {
            color: #555;
        }

        .num-box .num-body {
            color: #333;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .post-wrap {
            width: 65%;
        }

        .post-inner {
            display: flex;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .post-h-left {
            margin-right: 20px;
        }

        .post-h-img img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .post-body {
            width: 100%;
        }

        .post_form {
            margin-top: 10px;
        }

        .status {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: none;
        }

        .hash-box {
            margin-top: 10px;
        }

        .hash-box ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .post-footer {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }

        .p-fo-left ul {
            display: flex;
            align-items: center;
            margin: 10;
            padding: 5;
        }

        .p-fo-left ul input[type="file"] {
            display: none;
        }

        .p-fo-left ul label {
            cursor: pointer;
        }

        .p-fo-left ul label img {
            width: 30px;
            height: 30px;
        }

        .p-fo-left ul input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .p-fo-left ul input[type="submit"]:hover {
            background-color: #45a049;
        }

        .tweet-error {
            color: red;
            margin-left: 10px;
        }

        .show_post {
            width: 90%;
        }
    </style>
</head>

<body>

    <div class="index-wrapper">

        <!-- User Info Box -->
        <div class="info-box">
            <div class="info-inner">
                <div class="info-in-head">
                    <a href="<?php echo $userLoggedIn; ?>"><img src="<?php echo $user['cover_pic']; ?>" alt="Cover Image"></a>
                </div>
                <div class="info-in-body">
                    <div class="in-b-box">
                        <div class="in-b-img">
                            <a href="<?php echo $userLoggedIn; ?>"><img src="<?php echo $user['profile_pic']; ?>" alt="Profile Image"></a>
                        </div>
                    </div>
                    <div class="info-body-name">
                        <div class="in-b-name">
                            <div><a href="<?php echo $userLoggedIn; ?>"><?php echo $user['first_name'] . " " . $user['last_name']; ?></a></div>
                            <span><small><a href="<?php echo $userLoggedIn; ?>"><?php echo "@" . $user['username'] ?></a></small></span>
                        </div>
                    </div>
                </div>
                <div class="info-in-footer">
                    <div class="number-wrapper">
                        <div class="num-box">
                            <div class="num-head">POSTS</div>
                            <div class="num-body"><?php echo $user['num_posts']; ?></div>
                        </div>
                        <div class="num-box">
                            <div class="num-head">LIKES</div>
                            <div class="num-body"><span class="count-likes"><?php echo $user['num_likes']; ?></span></div>
                        </div>
                        <div class="num-box">
                            <div class="num-head">Friends</div>
                            <div class="num-body"><?php echo $num_friends ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Post Section -->
        <div class="post-wrap">
            <div class="post-inner">
                <div class="post-h-left">
                    <div class="post-h-img">
                        <a href="<?php echo $userLoggedIn; ?>"><img src="<?php echo $user['profile_pic'] ?>" alt="Post Author"></a>
                    </div>
                </div>

                <div class="post-body">
                    <form class="post_form" action="index.php" method="POST" enctype="multipart/form-data">
                        <textarea class="status" name="post_text" id="post_text" placeholder="Type Something here!" rows="4" cols="50"></textarea>
                        <div class="hash-box">
                            <ul></ul>
                        </div>
                </div>

                <div class="post-footer">
                    <div class="p-fo-left">
                        <ul>
                            <input type="file" name="fileToUpload" id="fileToUpload"/>
                            <label for="fileToUpload"> <img src="assets/images/camera.png" alt="Upload Image" height="30px"></label>
                            <span class="tweet-error"></span>
                            <input id="sub-btn" type="submit" name="post" value="SHARE">
                        </ul>
                    </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="show_post">
        <?php 
            $post = new Post($conn, $userLoggedIn);
            $post->indexPosts();
        ?>
    </div>

</body>
</html>