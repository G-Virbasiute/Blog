<!DOCTYPE html>
<html>
    <head>
        <title>Life's a Stitch!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="stylesheets/BlogPost.css" rel="stylesheet" type="text/css"/>        
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    </head>
    <body>
        <?php
        include 'navbar.php';

        //For later when we have the database connection to pull from there. 
        /*$stmt = $pdo->prepare('SELECT postID, Username, MainImage, Title, DifficultyRating, Content, Published FROM BLOG_POSTS INNER JOIN USER_TABLE on USER_TABLE.UserID = BLOG_POSTS.UserID WHERE postID = :postID');
        $stmt->execute(array(':postID' => '1'));
        $row = $stmt->fetch();

        echo '<div>';
        echo '<h1>' . $row['Title'] . '</h1>';
        echo '<p>Written by ' . $row['Username'] . '</p>';
        echo '<img src="' . $row['MainImage'].'">';
        echo '<p>Difficulty rating: ' . $row['DifficultyRating'] . '</p>';
        echo '<p>' . $row['Content'] . '</p>';
        echo '<p>Posted on ' . $row['Published'].'</p>';
        echo '</div>';
        */
        ?>
        

       <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <center><h2>How-To: Satin Stitch for Hand Embroidery</h2>
                    <h5>Written by Jenny Hart</h5></center>
                    <h6>Category: Embroidery</h6>
                    <h6>Difficulty Rating: Beginner</h6>

                    <div>
                        <img src='Images/Satin.jpg'>
                    </div>
                    <p>How do I solidly fill in a shape? And how long can I make my stitches? And what if they don't look nice around the edges and I cry?  Whoa now. You can fill up a shape with stitches any number of ways (concentric split stitches, random straight stitches, fill it with French knots), but a satin stitch is a good method to know. (Doesn't have to actually be worked in or on satin, fyi.) </p>
                    <p>Satin stitching can require some finesse, but don't let that stop you. Let's not get too hung up on it looking perfect, okay? Okay...</p>
                    <p>Step 1: Let's say you have a space on your pattern you want to fill in. Like this.</p>
                    <p>Step 2: Start by bringing your needle up from behind your hoop, along the pattern line.</p>
                    <p>TIP: I think it's easier to start in the middle of the shape and work outward toward each end. Imagine if this were a circle: spanning the diameter first is much easier than trying to start at the outer edge.</p>
                </div>
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <h2>About the author</h2>
                    <div class="fakeimg" style="height:100px;">Author's profile picture</div>
                    <p>Name and surname</p>
                </div>
                <div class="card">
                    <h3>Other posts by the author:</h3>
                    <div class="fakeimg">Image link to a post</div><br>
                    <div class="fakeimg">Image link to a post</div><br>
                    <div class="fakeimg">Image link to a post</div>
                </div>
                <div class="card">
                    <h3>Follow Me</h3>
                    <p>Link to the author's social media page</p>
                </div>
            </div>
        </div>

        <div class="footer">
            <h2>Footer</h2>
            <p>Some links to follow the blog on social media, copyright, contact us, etc</p>
        </div>
</body>
</html>


