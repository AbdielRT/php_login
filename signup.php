<div class="row">
    <div class="col-sm-10 col-md-4 col-lg-4">
      <form action='register.php' method='post'>
        <fieldset>
            <legend>Sign Up to MyService</legend>
            <div class="form-group">
                <label for="RegisterUser" class="form-label mt-4">Create Username</label>
                <input type="email" class="form-control" id="RegisterUser" 
                    aria-describedby="emailHelp" placeholder="example@mail.com" name='signUpUser' required>
                <small id="emailHelp" class="form-text text-muted">Your username is your email address.</small>
            </div>
            <div class="form-group">
                <label for="RegisterPassword" class="form-label mt-4">Create Password</label>
                <input type="password" class="form-control" id="RegisterPassword" placeholder="Password" name='signUpPassword' required>
                <small id="emailHelp" class="form-text text-muted">No restrictions (for now) for your password strenght ;)</small>
            </div>
            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary" name="signin" value="Sign In">
            </div>
        </fieldset>
      </form>
    </div>
</div>
