<script src="{{ BASE_URL . 'public/admin/js/jquery-1.11.1.min.js' }}"></script>
<script src="{{ BASE_URL . 'public/admin/js/script.js' }}"></script>
<script src="{{ BASE_URL . 'public/admin/js/bootstrap.min.js' }}"></script>

<script>
    $(".show_change_pass").click(function(){
        $(".show_change_pass").hide();
        $(".change_pass").show();
        Validator({
        form: '#edit-user',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#name', 'Họ tên không được để trống!'),
            Validator.isEmail('#email'),
            Validator.isRequired('#password'),
            Validator.minLength('#password', 6),
            Validator.isRequired('#re_password'),
            Validator.isConfirmed('#re_password', function() {
                return document.querySelector('#edit-user #password').value;
            }, 'Mật khẩu nhập lại không chính xác')
            ],
        });
    });

    $(".hide_change_pass").click(function(){
        $(".show_change_pass").show();
        $(".change_pass").hide();
        Validator({
        form: '#edit-user',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#name', 'Họ tên không được để trống!'),
            Validator.isEmail('#email'),
            ],
        });

    });
    function del(name) {
        return confirm('Bạn có chắc chắn muốn xóa: ' + name + '?');
    }

    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    Validator({
        form: '#add-user',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#name', 'Họ tên không được để trống!'),
            Validator.isEmail('#email'),
            Validator.isRequired('#avatar', 'Bạn hãy chọn ảnh!'),
            Validator.minLength('#password', 6),
            Validator.isRequired('#re_password'),
            Validator.isConfirmed('#re_password', function() {
                return document.querySelector('#add-user #password').value;
            }, 'Mật khẩu nhập lại không chính xác')
        ],
    });

    if($('.change_pass').css("display") == 'none' ){
        Validator({
        form: '#edit-user',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#name', 'Họ tên không được để trống!'),
            Validator.isEmail('#email'),
            ],
        });
    }
    Validator({
        form: '#add-cate',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#cate_name', 'Tên thể loại không được để trống!'),
            Validator.isRequired('input[name="show_menu"]', 'Hãy chọn 1 mục!'),
        ],
    });
    Validator({
        form: '#edit-cate',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#cate_name', 'Tên thể loại không được để trống!'),
        ],
    });
    Validator({
        form: '#add-prd',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#name', 'Tên sách không được để trống!'),
            Validator.isRequired('#price', 'Giá bán không được để trống!'),
            Validator.isRequired('#cate_id', 'Chọn 1 thể loại!'),
            Validator.isRequired('#image', 'Hãy chọn 1 hình ảnh!'),
            Validator.isRequired('input[name="star"]', 'Hãy chọn 1 mục!'),
        ],
    });
    Validator({
        form: '#edit-prd',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#name', 'Tên sách không được để trống!'),
            Validator.isRequired('#price', 'Giá bán không được để trống!'),
        ],
    });
</script>
