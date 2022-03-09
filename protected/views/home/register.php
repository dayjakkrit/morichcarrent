<div class="col-md-12 text-center my-3"><h4 class="text-purple font-weight-bold">Create new account</h4></div>
<div class="col-md-12"><div class="alert-message"></div></div>
<form id="frm-register">
    <div class="form-group row mx-auto">
        <div class="col-md-6">
            <label class="font-weight-bold">First Name<span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" required placeholder="First Name">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold">Last Name<span class="text-danger">*</span></label>
            <input type="text" name="lastname" class="form-control" required placeholder="Last Name">
        </div>
    </div>
    <div class="form-group row mx-auto">
        <div class="col-md-6">
            <label class="font-weight-bold">Mobile Number<span class="text-danger">*</span> <span class="font14 font-weight-normal text-muted">(Only numbers)</span></label>
            <input type="text" id="phone" name="phone" class="form-control" required placeholder="Mobile number 08xxxxxxxx" pattern="[0-9]*">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold">Email<span class="text-danger">*</span></label>
            <input type="email" id="email" name="email" class="form-control" required placeholder="Email">
        </div>   
    </div>                         
    <div class="form-group row mx-auto">
        <div class="col-md-6">
            <label class="font-weight-bold">Password<span class="text-danger">*</span></label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required pattern="[A-Za-z0-9]+">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold">Confirm Password<span class="text-danger">*</span></label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" required pattern="[A-Za-z0-9]+">
        </div>
    </div>
    <div class="col-md-12 mt-4">
         I agree to Morich Group 's <span class="text-purple">Terms of Use and Privacy Policy</span>
    </div>
    <div class="col-md-12 text-center my-4">
        <button type="submit" class="btn btn-purple btn-register">Create New Account</button>
    </div>
    <div class="col-md-12 text-center text-secondary mb-3">Already have an account? <a href="#" onClick="javascript:openModal('Sing In','singin');">Log In</a></div>
    </div>
</form>
