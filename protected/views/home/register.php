<div class="">	
	<div class="row">
        <div class="col-md-6 mx-auto my-5">
            <!--<h2 class="text-center text-purple font-weight-bold mb-5">สร้างบัญชีใหม่</h2>-->
            <div class="alert-message"></div>
            <form id="frm-register">
                <div class="form-group">
                    <label class="font-weight-bold">First Name<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" required placeholder="Fill in first name">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="lastname" class="form-control" required placeholder="Fill in last name">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Mobile Number<span class="text-danger">*</span> <span class="font14 font-weight-normal text-muted">(Only numbers)</span></label>
                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="Fill in mobile number 08xxxxxxxx" pattern="[0-9]*">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Email<span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" required placeholder="Fill in Email">
                </div>                            
                <div class="form-group">
                    <label class="font-weight-bold">Password<span class="text-danger">*</span></label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Fill in Password" required pattern="[A-Za-z0-9]+">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Confirm Password<span class="text-danger">*</span></label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Fill in Confirm Password" required pattern="[A-Za-z0-9]+">
                </div>
                <div class="form-group">
                    <p class="my-2">Please read <a href="#" target="_blank">Terms and Conditions Privacy Policy Cookie Policy</a> and me</p>
                    <div class="form-check font-weight-bold">
                        <input type="checkbox" name="subscribe" class="form-check-input" checked value="1"> Consent to receive news and benefits via email, SMS, social media, telephone
                    </div>
                    <div class="form-check font-weight-bold">
                        <input type="checkbox" name="consent_personal" class="form-check-input" checked value="1">Consent to submit personal data to Morich Group as per the table attached to the Privacy Policy. to receive news and benefits via email, SMS, social media, telephone
                    </div>
                    <p class="my-2">In this regard, I acknowledge that Such consent I can cancel at any time. I understand the terms and conditions including understanding the collection, use and disclosure of personal information</p>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-purple btn-register">Create New Account</button>
                </div>
                <div class="form-group text-center text-secondary">Already have an account? <a href="#" onClick="javascript:openModal('Sing In','singin');">Login here</a></div>
            </form>
        </div>
    </div>
</div>