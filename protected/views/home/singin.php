<div class="">	
	<div class="row">
        <div class="col-md-6 mx-auto mt-5 mb-3">
            <!--<h2 class="text-center text-purple font-weight-bold mb-5">เข้าสู่ระบบ</h2>-->
            <div class="alert-message"></div>
            <form id="frm-login" action="" method="" id="frm-login">
                <div class="form-group">
                    <input type="text" id="member-user" name="member_user" class="form-control" placeholder="Email / Phone Number" required>
                </div>
                <div class="form-group">
                    <input type="password" id="member-password" name="member_password" class="form-control" placeholder="password" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" onclick="javascript:openModal('Register','register');"><small class="form-text letter-spacing07" style="letter-spacing:0.5px;"><i class="far fa-user"></i> Create New Account</small></a>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#" onclick="javascript:openModal('Forgot password','forgotpass')"><small class="form-text letter-spacing07" style="letter-spacing:0.5px;">Forgot password<sup> <i class="far fa-question-circle"></i></sup></small></a>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-purple btn-login"><i class="fas fa-sign-in-alt"></i> Log In</button>
                </div>
            </form>
        </div>
    </div>
</div>