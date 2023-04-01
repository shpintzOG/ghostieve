<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - ghostieve </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Custom CSS v2 -->
    <link href="css/index.css" rel="stylesheet"> 

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">ghostieve</div>
    <div class="address-bar">no where and everywhere</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">ghostieve
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Seems to be clearer in the end
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Sometimes you need to stop and remeber to look at what you have all around you. You may be too lost in either the past. But need to remeber that the future is waiting.</p>
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal13"> 
                        Read More
                    </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Hidden in the mist
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>
                        Its easy to get lost in your thoughts, sometimes you can even run into problems when you aren't even looking for any.
                    </p>
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal12"> 
                        Read More
                    </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Open Road with uncertainty
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>
                        In the end of the day, whatever path you choose, you meed to remeber it will only get easier as long as you see your way through.
                    </p>
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal11"> 
                        Read More
                    </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->




    <!-- Modal 1 -->
    <div id="myModal13" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Seems to be clearer in the end</h4>
                </div>
                <div class="modal-body">
                    <p>Sometimes you need to stop and remeber to look at what you have all around you. You may be too lost in either the past. But need to remeber that the future is waiting.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos earum ea explicabo assumenda laborum? Recusandae eos officia illum error rerum iste nobis accusantium! Accusamus, deserunt?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div id="myModal12" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Hidden in the mist</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Its easy to get lost in your thoughts, sometimes you can even run into problems when you aren't even looking for any. 
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nostrum et iste possimus, vero aliquid libero. Ipsum vel tempora adipisci, ratione delectus unde quia ab!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div id="myModal13" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Open Road with uncertainty </h4>
                </div>
                <div class="modal-body">
                    <p>
                        In the end of the day, whatever path you choose, you meed to remeber it will only get easier as long as you see your way through.  
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nostrum et iste possimus, vero aliquid libero. Ipsum vel tempora adipisci, ratione delectus unde quia ab!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning">Close</button>
                </div>
            </div>
        </div>
    </div>


    <?php require_once 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
