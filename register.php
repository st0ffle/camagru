<?php include('header.php') ?>
<div class="fake-row"></div>

<div class="box-sign-in">
    <form action="#" method="post" class="sign-in">
        <div class="form-group">
            <input type="text" autofocus="autofocus" required="required" placeholder="Username" name="user[username]" id="user_username">
        </div>
        <div class="form-group">
            <input type="text" required="required" placeholder="Email" name="user[email]" id="user_email">
        </div>
        <div class="form-group">
            <input type="password" required="required" placeholder="Password" name="user[password]" id="user_password">
        </div>
        <div class="form-group">
            <input type="password" required="required" placeholder="Password confirm" name="user[password_confirm]" id="user_password_confirm">
        </div>
        <div class="form-group">
            <input type="submit" name="commit" value="Register">
        </div>
    </form>
</div>

<div class="box-center text-big">
    Already have an account? <a href="#">Sign in</a>
</div>

<div class="fake-row"></div>
<div class="fake-row"></div>
<div class="fake-row"></div>
<div class="fake-row"></div>
<div class="fake-row"></div>
<div class="fake-row"></div>
<div class="fake-row"></div>
<?php include('footer.php') ?>