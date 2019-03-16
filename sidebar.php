 <!-- sidebar menu: : style can be found in sidebar.less -->
 <ul class="sidebar-menu">
        <!-- <li class="header">MAIN NAVIGATION</li>
 -->        <li class="active treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_user.php"><i class="fa fa-circle-o"></i> Add User</a></li>
            <li><a href="current_user.php"><i class="fa fa-circle-o"></i> View Users</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="members.php">
            <i class="fa fa-users"></i> <span>Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Circulation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="borrowing.php"><i class="fa fa-circle-o"></i> Borrowed Books</a></li>
            <li><a href="return.php"><i class="fa fa-circle-o"></i> Returned Books</a></li>
            <li><a href="lost.php"><i class="fa fa-circle-o"></i> Lost Books</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Library Visits</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="daily_visit.php"><i class="fa fa-circle-o"></i> Daily Visit</a></li>
            <li><a href="weekend_visit.php"><i class="fa fa-circle-o"></i> Weekends Visit</a></li>
            <li><a href="holiday_visit.php"><i class="fa fa-circle-o"></i> Holidays Visit</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Books</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="book_descrypt.php"><i class="fa fa-circle-o"></i> Book Description</a></li>
            <li><a href="Add_books.php"><i class="fa fa-circle-o"></i> Add Books</a></li>
            <li><a href="store_books.php"><i class="fa fa-circle-o"></i> Books in store</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
</ul>