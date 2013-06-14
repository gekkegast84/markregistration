<div class='center-wrapper'>
    <center><h1>markregistration</h1></center>
    <div class='offset3 span6'>
        <?php echo validation_errors(); ?>
        <?php echo form_open('verifylogin', array('class' => 'form-horizontal well')); ?>
        <div class="control-group">
            <b>Login to enter:</b>
            <div class='page-header'></div>
            <label class="control-label" for="inputEmail">Username</label>
            <div class="controls">
                <input type="text" id="inputEmail" name="username" placeholder="Username">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Password</label>
            <div class="controls">
                <input type="password" id="inputPassword" name="password"  placeholder="Password">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button type="submit" name="submit" value="login" class='btn btn-inverse'>Login</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>