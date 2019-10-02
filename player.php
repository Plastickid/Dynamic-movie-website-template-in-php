<?php include "db.php" ;

if(isset($_GET['movie'])){
$src=$_GET['movie'];
$query="select * from movies where mov_video='$src'";
$select_movies=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($select_movies))
{
    $mov_title=$row['mov_title'];
    $mov_dir=$row['mov_dir'];
    $mov_img=$row['mov_img'];
    $mov_video=$row['mov_video'];
    $mov_id1=$row['mov_id'];
    if(empty($row)){echo "Result not found";}
}}
?>
<html >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!---->
<!--    <style type="text/css">-->
<!--        body { background: grey !important; }-->
<!--    </style>-->
</head>
<body style="background-color:rgba(16,6,17,0.45)">
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Movie Website</a><br>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <center> <h1 style="color:white;">           <?php echo $mov_title ?></h1>
        </div>
        <!-- /.navbar-collapse -->
        </div>
    <!-- /.container -->
    </nav> <br><br><br><br>
<center>
        <br><br>

    <video width="1000" controls>
        <source src="movies/<?php echo $src ?>" type="video/mp4">
        <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
    </video>
    <h1><?php echo $mov_title ?></h1>
    <h3>Directed by  <?php echo $mov_dir ?></h3>
</body>
</html>
