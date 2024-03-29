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
                    <small>Add Question</small>
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
           <div class="col-md-9">
                <h2>Add a new Question</h2>
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
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Type of Question</label>
                            <select class="form-control" id="type" name="type" required data-validation-required-
                            message="Please enter concerned topic">
<option>Single Correct Multiple Choice</option>
<option>Multi Correct Multiple Choice</option>
<option>Match the following</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Question:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Option A</label>
                            <input type="text" class="form-control" id="type" name="type" required data-validation-required-message="Please enter concerned topic">
                        </div>
                    </div>
                           <div class="control-group form-group">
                        <div class="controls">
                            <label>Option B</label>
                            <input type="text" class="form-control" id="type" name="type" required data-validation-required-message="Please enter concerned topic">
                        </div>
                    </div>
                           <div class="control-group form-group">
                        <div class="controls">
                            <label>Option C</label>
                            <input type="text" class="form-control" id="type" name="type" required data-validation-required-message="Please enter concerned topic">
                        </div>
                    </div>
                           <div class="control-group form-group">
                        <div class="controls">
                            <label>Option D</label>
                            <input type="text" class="form-control" id="type" name="type" required data-validation-required-message="Please enter concerned topic">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Add Question</button>
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
