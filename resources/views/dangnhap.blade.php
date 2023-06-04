<html><head></head><body><form action="" method="post" name="dangnhap" id="dangnhap">
    <div class="ungtuyen_popup">
      <div class="title_bs">Thông tin <span>đăng nhập</span></div>
      <div class="col-md-3 row-frm">
        <input type="text" name="txt_email" class="form-control_3 cls_data_check_form_check_dangky" data-rong="1" data-email="1" data-msso="Chưa nhập địa chỉ email" data-msso1="Địa chỉ Email không hợp lệ!" placeholder="Email (*)">
      </div>
      <div class="col-md-3 row-frm">
        <input type="password" name="txt_pass" id="txt_pass" class="form-control_3 cls_data_check_form_check_dangky" data-rong="1" data-msso="Vui lòng nhập mật khẩu!" placeholder="Mật khẩu (*)">
      </div>
      <li class="bt-login">
        <a onclick="LOAD_popup_new(', '400px')" class=" dk_dangnhap_1 quenmatkhau cur">Quên mật khẩu</a>
        <a onclick="LOAD_popup_new(', '400px')" class="cur dk_dangnhap_2 ">Bạn chưa có tài khoản?</a>
        <div class="clr"></div>

      </li>

      <div class="box_dangnhap_popup">
        <h2><a class="cur" id="dangnhap" onclick="check_dangnhap()">Đăng Nhập <img class="img_load_from_dktv" src=""></a></h2>
      </div>
      <div class="clr"></div>
    </div>

    <script type="text/javascript">
      var send_d = 0;
      function check_dangnhap() {
        var check = 0;
        $(".cls_data_check_form_check_dangky").each(function(){
            var val     = $(this).val().trim();
            var id      = $(this).attr('id');
            var rong    = $(this).attr('data-rong');
            var email   = $(this).attr('data-email');
            var place   = $(this).attr('placeholder');

            var regex = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})*$/;
            if(rong == 1 && (val == "" || val == place)){
                alert($(this).attr('data-msso'));
                $(this).focus();
                $(".ajax_img_loading").hide();
                check = 1;
                send_d = 0;
                return false;
            }
            else if(email == 1 && !regex.test(val) && val != ""){
                alert($(this).attr('data-msso1'));
                $(this).focus();
                $(".ajax_img_loading").hide();
                check = 1;
                send_d = 0;
                return false;
            }
        });

        if(check == 0){
          if(send_d == 0){
            send_d = 1;
            $(".img_load_from_dktv").show();
            var dataString = $('#dangnhap').serializeArray();
            $.ajax({
                type: "POST",
                url: "",
                data: dataString,
                success: function(response)
                {
                  var obj = jQuery.parseJSON(response);
                  if(obj.error > 0){
                      alert("Email hoặc mật khẩu không chính xác!");
                  }else{
                    window.location.reload();
                  }
                  $(".img_load_from_dktv").hide();
                  send_d = 0;
                }
            });
          }
        }
      }

      $('.form-control_3').keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
              check_dangnhap();
            }
        });
    </script> </form></body></html>
