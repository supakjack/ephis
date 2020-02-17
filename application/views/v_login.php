<script>
    let login_component = {
        usr_username: null,
        usr_pass: null,
        set_username(username) {
            login_component.usr_username = username
            console.log(login_component.usr_username)
        },
        set_pass(pass) {
            login_component.usr_pass = pass
            console.log(login_component.usr_pass)
        },
        log_in() {
            event.preventDefault();
            if (!(login_component.usr_username && login_component.usr_pass)) {
                console.log("ยังกรอกข้อมูลไม่ครบ")
                $('.status_log').text('ยังกรอกข้อมูลไม่ครบ')
            } else {
                console.log(login_component.usr_username)
                console.log(login_component.usr_pass)
                let user_data = get_user_login(login_component.usr_username, login_component.usr_pass);
                console.log(user_data)
                if (user_data) {
                    console.log("pass")
                    console.log(user_data)
                    location.href = '<?php echo base_url('Ephis_alert/show') ?>'
                } else {
                    $('.status_log').text('username หรือ password ไม่ถูกต้อง')
                    console.log("not pass")
                }
            }
        }
    }
</script>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Ephis เข้าสู่ระบบ</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" onkeyup="get_value_and_do(this,login_component.set_username)" class="form-control" placeholder="กรอก username">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" onkeyup="get_value_and_do(this,login_component.set_pass)" class="form-control" placeholder="กรอก  password">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">จดจำฉัน
                    </div>
                    <div class="form-group">
                        <input type="submit" onclick="login_component.log_in()" value="Login" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links status_log">
                    การุณา login ก่อนเข้าใช้งาน
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Made with love by Mutiullah Samim*/

    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,
    body {
        background-image: url('<?php echo base_url('assets/images/b5.jpg') ?>');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
    }

    .container {
        height: 100%;
        align-content: center;
    }

    .card {
        height: 370px;
        margin-top: auto;
        margin-bottom: auto;
        width: 400px;
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .social_icon span {
        font-size: 60px;
        margin-left: 10px;
        color: #FFC312;
    }

    .social_icon span:hover {
        color: white;
        cursor: pointer;
    }

    .card-header h3 {
        color: white;
    }

    .social_icon {
        position: absolute;
        right: 20px;
        top: -45px;
    }

    .input-group-prepend span {
        width: 50px;
        background-color: #FFC312;
        color: black;
        border: 0 !important;
    }

    input:focus {
        outline: 0 0 0 0 !important;
        box-shadow: 0 0 0 0 !important;

    }

    .remember {
        color: white;
    }

    .remember input {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
    }

    .login_btn {
        color: black;
        background-color: #FFC312;
        width: 100px;
    }

    .login_btn:hover {
        color: black;
        background-color: white;
    }

    .links {
        color: white;
    }

    .links a {
        margin-left: 4px;
    }
</style>