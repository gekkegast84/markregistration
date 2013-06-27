<?php
$session_data = $this->session->userdata('logged_in');
foreach($session_data['roles'] as $role)
{    
?>
     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo base_url(); ?>home">Markregistration</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
               <a href="<?php echo base_url(); ?>home" class="navbar-link">Welcome student!</a>
            </p>
            <ul class="nav">
                <li><a href='<?php echo base_url(); ?>home'>students homepage</a></li>               
                <li><a href='<?php echo base_url(); ?>student/student_info'>personal info</a></li>
                <li><a href='<?php echo base_url(); ?>student/student_grade'>my grades</a></li>
                <li><a href='<?php echo base_url(); ?>home/logout'>Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<?php
}
?>