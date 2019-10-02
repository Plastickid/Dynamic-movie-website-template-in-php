<?php include "db.php";?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color:rgba(16,6,17,0.45)">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <h3>  <b><a class="navbar-brand" href="index.php" style="color:white">Movie Website</a></b></h3>
        </div>

    </div>

</nav>

<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                <center>    <br> <b>  Movies List</b>
                    <!--      <small>Secondary Text</small>--!>
            </h1>
            <?php

           if(isset($_POST['submit'])){
               $search_item=$_POST['mov_search'];
               $query = "select * from movies where mov_search like'%$search_item%' ";
            $select_movies=mysqli_query($conn,$query);

            $no_rows=mysqli_num_rows($select_movies);
            if(!$no_rows) {
                echo "<h1> No Result Found </h1>";
            }
            else{
            while($row=mysqli_fetch_assoc($select_movies))
            {

                $mov_title=$row['mov_title'];
                $mov_dir=$row['mov_dir'];
                $mov_img=$row['mov_img'];
                $mov_video=$row['mov_video'];
                $mov_id=$row['mov_id'];
                ?>

            <div class="well well-lg">
                <h2>
                    <center>   <a href="#"><?php echo $mov_title ?></a>
                </h2>

            <center>   <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <center>   <img class="img-responsive" src="images/<?php echo $mov_img ?>" alt="">
                <hr>
                    <center>  <p>Directed by <?php echo $mov_dir ?></p>
                        <center>  <a class="btn btn-primary" href="player.php?movie=<?php echo $mov_video ?>">Play movie <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                        </div>
            <?php }}}

           ?>



        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            <br><br>
            <!-- Blog Search Well -->
            <div class="well">
                <h4>Movie Search</h4>
                <div class="input-group">
                    <form action="search.php" method="post">
                    <input type="text" class="form-control" name="mov_search">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </form>
                </div>
                <!-- /.input-group -->
            </div>




        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Designed by Anfal</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
