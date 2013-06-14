<?php
$this->load->view("includes/header");   
if(isset($roles))
{
    if (in_array(1, $roles))
    {
        $this->load->view("student/student_menu");
    }
    if (in_array(2 && 3 && 4, $roles))
    {
        $this->load->view("teacher/teacher_menu");
    }
}
?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php $this->load->view($main_content); ?>
    </div>
</div>
<?php
$this->load->view("includes/footer");
?>
