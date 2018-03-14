<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Friends</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <script src="main.js"></script>
</head>
<body style="background-color:#C0C0C0">
    <div class="container" style="background-color:#fff; margin:25px auto;border-radius:5px;">
        <!-- this is for the header-->
        <div >
            <div class="row" style="background-color:#DCDCDC;">
                <div class="col-md-6">
                    <h1><i class="fa fa-group"></i> Friends</h1>
                </div>
                <div class="col-md-6 text-right" style="padding:20px">
                    <a href="#">
                        <button class="btn btn-primary">Add Friends</button>
                    </a>
                </div>
            </div
            <!--this is for the sub header ie navigation menu-->
            <div class="row" style="background-color:#DCDCDC;">
                <div class="col-md-2">
                    <h4>All Friends</h4>
                </div>
                <div class="col-md-2">
                    <h4>Recently Added</h4>
                </div>
                <div class="col-md-2">
                    <h4>Friends</h4>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
                          </span>
                    </div>
                </div>
        </div>
            <!--the wrapper for all the friends content-->
            <div class="wrapper" style="margin-top: 25px; padding: 15px">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/bground.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                            </div>
                            <div class="col-md-4 text-center">
                                <h3>Name Name</h3>
                                <h5>134554</h5>
                            </div>
                            <div class="col-md-4 t" style="padding: 20px">
                                <button class="btn "><i class="fa fa-check"></i> Friends</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/bground.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                            </div>
                            <div class="col-md-4 text-center">
                                <h3>Name Name</h3>
                                <h5>134554</h5>
                            </div>
                            <div class="col-md-4 t" style="padding: 20px">
                                <button class="btn "><i class="fa fa-check"></i> Friends</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>