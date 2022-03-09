<div class="container">	
	<div class="row shadow">
        <div class="col-md-6 mx-auto my-5">
            <!--<h2 class="text-center text-purple font-weight-bold mb-5">สร้างบัญชีใหม่</h2>-->
            <div class="alert-message"></div>
            <form id="frm-register">
                <div class="form-group">
                    <label class="font-weight-bold">ชื่อ<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" required placeholder="กรอกชื่อ">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">นามสกุล<span class="text-danger">*</span></label>
                    <input type="text" name="lastname" class="form-control" required placeholder="กรอกนามสกุล">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">เบอร์มือถือ<span class="text-danger">*</span> <span class="font14 font-weight-normal text-muted">(เฉพาะตัวเลขเท่านั้น)</span></label>
                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="กรอกเบอร์มือถือ 08xxxxxxxx" pattern="[0-9]*">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">อีเมล<span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" required placeholder="กรอกอีเมล">
                </div>                            
                <div class="form-group">
                    <label class="font-weight-bold">รหัสผ่าน<span class="text-danger">*</span></label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="กรอกรหัสผ่าน" required pattern="[A-Za-z0-9]+">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">รหัสผ่านอีกครั้ง<span class="text-danger">*</span></label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="กรอกรหัสผ่านอีกครั้ง" required pattern="[A-Za-z0-9]+">
                </div>
                <div class="form-group">
                    <p class="my-2">โปรดอ่าน <a href="#" target="_blank">ข้อกำหนดและเงื่อนไข  นโยบายความเป็นส่วนตัว  นโยบายการใช้คุกกี้</a> และข้าพเจ้า</p>
                    <div class="form-check font-weight-bold">
                        <input type="checkbox" name="subscribe" class="form-check-input" checked value="1"> ยินยอมรับข่าวสารและสิทธิประโยชน์ ผ่านทางอีเมล เอสเอ็มเอส โซเชียลมีเดีย โทรศัพท์
                    </div>
                    <div class="form-check font-weight-bold">
                        <input type="checkbox" name="consent_personal" class="form-check-input" checked value="1">ยินยอมให้ส่งข้อมูลส่วนบุคคลให้โมริช กรุ๊ป ตามตารางแนบท้ายนโยบายความเป็นส่วนตัว เพื่อรับข่าวสารและสิทธิประโยชน์ ผ่านทางอีเมล เอสเอ็มเอส โซเชียลมีเดีย โทรศัพท์
                    </div>
                    <p class="my-2">ทั้งนี้ ข้าพเจ้ารับทราบว่า ความยินยอมดังกล่าวข้าพเจ้าสามารถยกเลิกได้ตลอดเวลา ข้าพเจ้าเข้าใจข้อกำหนดและเงื่อนไข รวมทั้งเข้าใจถึงเรื่องการเก็บ การใช้ การเปิดเผยข้อมูลส่วนบุคคลแล้ว</p>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-purple btn-register">สร้างบัญชีใหม่</button>
                </div>
                <div class="form-group text-center text-secondary">มีบัญชีอยู่แล้ว? <a href="#">เข้าสู่ระบบที่นี่</a></div>
            </form>
        </div>
    </div>
</div>