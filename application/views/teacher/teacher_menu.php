<?php

$session_data = $this->session->userdata('logged_in');
foreach($session_data['roles'] as $role)
{    
    if ($role['role_id'] == 2 || $role['role_id'] == 3 || $role['role_id'] == 4)
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
               <a href="<?php echo base_url(); ?>home" class="navbar-link">Welcome teacher!</a>
            </p>
            <ul class="nav">
                <li><a href='<?php echo base_url(); ?>home'>teachers homepage</a></li>
                <li><a href='<?php echo base_url(); ?>teacher/give_marks'>give marks</a></li>
          <?php if ($role['role_id'] == 3 || $role['role_id'] == 4) {?>
                <li><a href='<?php echo base_url(); ?>teacher/change_student_info'>change student info</a></li>
          <?php } ?>
                <li><a href='<?php echo base_url(); ?>home/logout'>Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<?php
    }
}
?>