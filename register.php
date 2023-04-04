<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register - ghostieve</title>

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

    


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Register -->
    <script src="js/register.js"></script>


</head>

<body>

    <div class="brand">ghostieve</div>
    <div class="address-bar">everywhere and no where</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">register
                        <strong>form</strong>
                    </h2>
                    <div id="add_err">ffS</div>
                    <hr>
                    <p>If you have any questions or would like any help with anything. Want a friend or just want to say hi fill out the form below.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" maxlength="25">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" maxlength="25">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>email address</label>
                                <input type="email" class="form-control" id="email" name="email" maxlength="42" >
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>password</label>
                                <input type="password" class="form-control" id="password" name="password" maxlength="255" />
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default" id="register">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php require_once 'footer.php'; ?>

</body>

</html>
