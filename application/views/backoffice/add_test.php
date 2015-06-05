<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MCQ</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/modern-business.css" rel="stylesheet">
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/backoffice/addTest.css?v=2" rel="stylesheet">
</head>
<body>
 <?= $head; ?>
 <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Test
            </h1>
            <ol class="breadcrumb">
                <li><a href="/backoffice">Home</a>
                </li>
                <li class="active">Create Test</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <?= $side; ?>
        <div class="col-md-9">
            <div class="row">
                <h2 class="col-sm-12">Create Test</h2>
                <form name="testForm">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Test Name</label>
                            <input type="text" name="name" id="name" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="time">Test Time</label>
                            <input type="number" name="time" id="time" class="form-control" min='0' required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="descEditor" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <a href="javascript:" class="btn btn-default addSectionButton">Add Section</a>                      
                    </div>
                    <div class="col-sm-12">
                        <input type="hidden" name="testData" value='' required>
                        <h3>Sections &amp; Sub-sections <small>in test</small></h3>
                        <div class="table-responsive">
                          <table class="table table-bordered table-condensed secAndSubsec">
                            <thead>
                                <tr>
                                    <th>Sections</th>
                                    <th>Sub-sections</th>
                                    <th>Type</th>
                                    <th>+ive marks</th>
                                    <th>-ive marks</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" value="Create" name="create" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?= $footer; ?>
<div class="modal " id="addSection" tabindex="-1" role="dialog" aria-labelledby="testSections" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="testSections">Add Sections &amp; Sub-sections</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<div class="subSection hide subSectionBlock">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Sub Section</label>
                <input type="text" name="subSection" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-6">
            <label>Type</label>
            <select name="subSectionType" class="form-control">
                <option value='mcsc'>Multiple choice - single correct</option>
                <option value='mcmc'>Multiple choice - multiple correct</option>
                <option value='mf'>Match the following</option>
                <option value='fb'>Fill in the blanks</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label>Positive marks</label>
                <input type="number" name="pmarks" class="form-control" required min="0">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Negative marks</label>
                <input type="number" name="nmarks" class="form-control" required max="0">
            </div>
        </div>
        <div class="col-sm-1 text-right">
            <div class="form-group">
                <label>Delete</label>
                <a href="javascript:" class="btn btn-warning delete" data-element="subSection" title="Delete"><span class="glyphicon glyphicon-minus"></span></a>
            </div> 
        </div>
    </div>
</div>
<form onsubmit="return false;" name="testSectionFrom" class="testSectionFormContent hide">
    <div class="form-group">
        <label for="sectionName">Section Name</label>
        <input type="text" name="sectionName" id="sectionName" class="form-control" required autofocus>
    </div>
    <div class="subSections">
        <div class="subSection">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Sub Section</label>
                        <input type="text" name="subSection" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label>Type</label>
                    <select name="subSectionType" class="form-control">
                        <option value='mcsc'>Multiple choice - single correct</option>
                        <option value='mcmc'>Multiple choice - multiple correct</option>
                        <option value='mf'>Match the following</option>
                        <option value='fb'>Fill in the blanks</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Positive marks</label>
                        <input type="number" name="pmarks" class="form-control" required min="0">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Negative marks</label>
                        <input type="number" name="nmarks" class="form-control" required max="0">
                    </div>
                </div>
                <div class="col-sm-1 text-right">
                    <div class="form-group">
                        <label>Delete</label>
                        <a href="javascript:" class="btn btn-warning delete disabled" data-element="" title="Delete"><span class="glyphicon glyphicon-minus"></span></a>
                    </div> 
                </div>
            </div>
        </div>
        <div class="form-group">
            <a href="javascript:" class="btn btn-info add" data-element="subSectionBlock" data-before="form-group" title="Add more sub-sections"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/ckeditor/ckeditor.js"></script>
<script src="/assets/js/backoffice/addTest.js?v=1"></script>
</body>
</html>
