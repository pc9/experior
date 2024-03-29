<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MCQ</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
   <?php
echo $head;
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Question Bank
                    <small>Search Question(s)</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Add Question</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <?php
echo $side;
?>
            <!-- Content Column -->
            <div class="col-md-9">
            <button class="btn btn-success" style="float:right;">ADD QUESTION</button>
                <h2>Search the Question Bank</h2>
                           <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Subject:</label>
                            <select class="form-control" id="subject" name="subject" required data-validation-required-message="Please enter subject name">
				<option>Physics</option>
				<option>Physics</option>
				<option>Physics</option>
			</select>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Topics</label>
                            <select class="form-control" id="topic" name="topic" required data-validation-required-
                            message="Please enter concerned topic">
<option>Gravitation</option>
<option>Laws of Motion</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-danger">SEARCH</button>
                <h2 style="text-align: center">OR</h2>   
                
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Query</label>
                            <input type="text" class="form-control" id="type" name="type" required data-validation-required-message="Please enter concerned topic">
                        </div>
                    </div>
                     <button class="btn btn-danger">SEARCH</button>
                           <div class="control-group form-group">
                       
                    </div>
                   
                </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php
echo $footer;
?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

</body>

</html>
