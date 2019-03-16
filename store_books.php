<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SLMS | Books Stored</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: center;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette-box h4 {
      position: absolute;
      top: 100%;
      left: 25px;
      margin-top: -40px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
include('header.php');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>John vique</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <?php 
      include 'sidebar.php';
      ?>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="color: #660000">
        School Books In Store
        <small>Library</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Store</a></li>
        <li class="active">SLMS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <span style="font-size: 20px; margin-right: 10px;">Books Listing</span>
              <a class="btn btn-primary btn-sm" href="add_books.php">Add Book</a><!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#isbn_Modal">
  Auto Catalogue</button>
<a data-toggle="tooltip" title="" class="btn btn-primary pull-right" href="https://www.otsglobal.org/lms//panel/books/getBooks/pdf" data-original-title="Export to PDF">
  <i class="fa fa-file-pdf-o fa-2x"></i>
</a>
<a data-toggle="tooltip" title="" class="btn btn-primary pull-right" style="margin-right: 5px" href="https://www.otsglobal.org/lms//panel/books/getBooks/xls" data-original-title="Export to Excel">
  <i class="fa fa-file-excel-o fa-2x"></i>
</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <div id="PRData_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="PRData_length"><label>Show <select name="PRData_length" aria-controls="PRData" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6"><div id="PRData_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="PRData"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="PRData" style="width: 100%;" class="table table-bordered table-striped table-hover dataTable" role="grid" aria-describedby="PRData_info">
                <thead>
                <tr role="row">
                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Image" style="width: 58px;">Image</th>
                <th class="sorting" rowspan="1" colspan="1"style="width: 259px;">Book</th>
                <th class="sorting" tabindex="0" aria-controls="PRData" rowspan="1" colspan="1" aria-label="Categories: activate to sort column ascending" style="width: 107px;">Categories</th>
                <th class="sorting_asc" tabindex="0" aria-controls="PRData" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Qty.: activate to sort column descending" style="width: 47px;">Qty.</th><th class="sorting" tabindex="0" aria-controls="PRData" rowspan="1" colspan="1" aria-label="Available: activate to sort column ascending" style="width: 92px;">Available</th><th class="sorting" tabindex="0" aria-controls="PRData" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 58px;">Price</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Read" style="width: 114px;">Read</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 89px;">Actions</th></tr>
                </thead>
                <tbody>
                <?php 
                include 'class/conn.php';
                $query="select * FROM `books`";
                $execute=mysqli_query($connect,$query);
                while($results = mysqli_fetch_array($execute)){

                ?>
                <tr role="row" class="book_link" id="1800">
                  <td>
                  <img style="width:20px; height:30px;" src="https://www.otsglobal.org/lms/assets/uploads/book_covers/no_image.png"></td>
                  <td><strong><?php echo $results['name'] ?></strong><br>
                      <strong>Authors:<?php echo $results['author'] ?> </strong><br></td>
                  <td><?php echo $results['category'] ?></td>
                  <td class="sorting_1">1</td>
                  <td><?php echo $results['book_copies'] ?></td>
                  <td><?php echo $results['isbn'] ?></td>
                  <td>Not Available</td>
                  <td><div class="text-center">
                    <div class="btn-group text-left">
                    <button type="button" class="btn btn-default btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">
                      Actions <span class="caret"></span>
                    </button>
                 <ul class="dropdown-menu pull-right" role="menu">
                 <li>
                 <a href="#" class="tip po " title="<b>Delete</b>" data-content="<p>Are you Sure!</p><a class='btn btn-danger po-delete1' id='a__1800' href=''>Yes</a> 
                 <button class='btn po-close'>No</button>" rel="popover">
                  <i class="fa fa-trash-o"></i>
                    Delete
                    </a>
                    </li><li></li><li><a href="https://www.otsglobal.org/lms/panel/books/edit/1800"><i class="fa fa-edit"></i>Edit Book</a></li><li><a href="https://www.otsglobal.org/lms/panel/books/print_barcodes/1800"><i class="fa fa-print"></i> Print Barcode</a>
                 </li></ul></div></div></td>
                 </tr>
                <?php } ?>
                <tfoot>
                <tr>
                <th rowspan="1" colspan="1">Image</th>
                <th rowspan="1" colspan="1">Book</th>
                <th rowspan="1" colspan="1">Categories</th>
                <th rowspan="1" colspan="1">Qty.</th>
                <th rowspan="1" colspan="1">Available</th>
                <th rowspan="1" colspan="1">Price</th>
                <th rowspan="1" colspan="1">Read</th>
                <th rowspan="1" colspan="1">Actions</th>
                </tr>
                </tfoot>
              </table><div id="PRData_processing" class="dataTables_processing panel panel-default" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="PRData_info" role="status" aria-live="polite">Showing 11 to 20 of 5,159 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="PRData_paginate"><ul class="pagination"><li class="paginate_button previous" id="PRData_previous"><a href="#" aria-controls="PRData" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button "><a href="#" aria-controls="PRData" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button active"><a href="#" aria-controls="PRData" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="PRData" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="PRData" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="PRData" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button disabled" id="PRData_ellipsis"><a href="#" aria-controls="PRData" data-dt-idx="6" tabindex="0">…</a></li><li class="paginate_button "><a href="#" aria-controls="PRData" data-dt-idx="7" tabindex="0">516</a></li><li class="paginate_button next" id="PRData_next"><a href="#" aria-controls="PRData" data-dt-idx="8" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <!-- <b>Version</b> 2.3.6 -->
    </div>
    <strong>Copyright <?php echo date('Y')?> <a href="http://johntekhub.com">SLMS</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
