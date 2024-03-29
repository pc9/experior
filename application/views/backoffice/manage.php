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

	<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>


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
                <h1 class="page-header">Subject and Topics
                    <small>Add/Edit/Delete</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Test(s)</a>
                    </li>
                    <li class="active">Active Test(s)</li>
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
             <h2>Subjects</h2>
<div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Subject-Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        <tr class="odd gradeX">
                                            <td>Physics</td>
                                            <td>Edit</td>
                                            <td>Delete</td>
                                        </tr>
<tr class="odd gradeX">
                                            <td>Chemistry</td>
                                            <td>Edit</td>
                                            <td>Delete</td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
               
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
  Add Subject
</button>   

             <h2>Subjects</h2>
<div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables1">
                                    <thead>
                                        <tr>
										
                                            <th>Topic</th>
<th>Subject-Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        <tr class="odd gradeX">
<td>Gravitation</td>
                                            <td>Physics</td>
                                            <td>Edit</td>
                                            <td>Delete</td>
                                        </tr>
<tr class="odd gradeX">
<td>Organic Compounds</td>
                                            <td>Chemistry</td>
                                            <td>Edit</td>
                                            <td>Delete</td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
               
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1">
  Add Topic
</button>   
            </div>
        </div>
        <!-- /.row -->

      

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add a new Subject</h4>
      </div>
      <div class="modal-body">
         <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject" required data-validation-required-message="Please enter subject name">
				
                         
                        </div>
                    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Subject</button></form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add a new Topic4>
      </div>
      <div class="modal-body">
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
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Topic:</label>
                            <input type="text" class="form-control" id="topic" name="topic" required data-validation-required-message="Please enter subject name">
				
                         
                        </div>
                    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Topic</button></form>
      </div>
    </div>
  </div>
</div>
</div>

        <hr>

        <!-- Footer -->
        <?php
echo $footer;
?>

    
    <script type="text/javascript">

    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

<script type="text/javascript">

    $(document).ready(function() {
        $('#dataTables1').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
