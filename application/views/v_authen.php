<script>
    let users = get_users();
    let usr_id;
    let usr_username;
    let usr_pass;
    let sweet_alret_status = 'opened';
    let user;

    $(document).on('input', '.usr_username,.usr_pass', function(e) {
        console.log(e.currentTarget)
        if ($(e.currentTarget).hasClass('usr_username')) {
            usr_username = e.currentTarget.value
            console.log(e.currentTarget.value)
            console.log('usr_username : ' + usr_username)
        }
        if ($(e.currentTarget).hasClass('usr_pass')) {
            usr_pass = e.currentTarget.value
            console.log(e.currentTarget.value)
            console.log('usr_pass : ' + usr_pass)
        }
    });

    function alert_is_closed() {
        sweet_alret_status = "closed";
    }
    setInterval(() => {
        console.log(sweet_alret_status)
    }, 1000);

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'คุณคือใคร?',
        text: "การุณาระบุตัวตนของคุณ!",
        icon: 'warning',
        width: '400px',
        html: `<input type="text"  class="form-control usr_username" placeholder="ชื่อผู้ใช้งาน" >
                <input type="password" class="form-control mt-2 usr_pass" placeholder="รหัสผ่าน" >`,
        showCancelButton: true,
        confirmButtonText: 'ยืนยันตัวตน',
        cancelButtonText: 'กลับสู่ monitoring',
        reverseButtons: true,
        onClose: alert_is_closed
    }).then((result) => {
        if (result.value) {
            if (usr_pass && usr_username) {
                let check_usr = users.some(function(user, index) {
                    return (user.usr_pass == usr_pass) && (user.usr_username == usr_username)
                })
                user = users.filter(function(user, index) {
                    return (user.usr_pass == usr_pass) && (user.usr_username == usr_username)
                })
                console.log(user)
                if (check_usr) {
                    swalWithBootstrapButtons.fire(
                        'ยืนยันตัวตนสำเร็จ!',
                        'ยินดีตอนรับ',
                        'สำเร็จ',
                    ).then(() => {
                        user.map(function(user, index) {
                            let user_template = `<div class="card" style="width: 22rem;">
                                                <img src="<?php echo base_url('assets/images/avatar.png') ?>" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">สถานะ : ${get_zones_def(user.usr_sta)}</h5>
                                                    <p class="card-text">ชื่อ ${user.usr_pfname}${user.usr_fname}  ${user.usr_lname}</p>
                                                    <a href="#" class="btn btn-primary y">ปลอดภัย </a>
                                                    <a href="#" class="btn btn-danger n">ขอความช่วยเหลือ</a>
                                                </div>
                                            </div>`;
                            $('.user').append(user_template);
                        })
                    })
                } else {
                    swalWithBootstrapButtons.fire({
                            title: 'ไม่พบผู้ใช้งาน',
                            text: 'กรุณาลองใหม่...ภายใน 3 วินาที',
                            icon: 'error',
                            timer: 2000,
                            buttons: false,
                        })
                        .then(() => {
                            location.href = `<?php echo base_url('Ephis_alert/authen') ?>`
                        })

                }
            } else {
                swalWithBootstrapButtons.fire({
                        title: 'ไม่พบผู้ใช้งาน',
                        text: 'กรุณาลองใหม่...ภายใน 3 วินาที',
                        icon: 'error',
                        timer: 2000,
                        buttons: false,
                    })
                    .then(() => {
                        location.href = `<?php echo base_url('Ephis_alert/authen') ?>`
                    })
            }

        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            sweet_alret_status = 'monitoring'
            swalWithBootstrapButtons.fire(
                'กลับสู่ monitoring',
                'กำลังพาคุณกลับ',
                'error',
            )
            location.href = `<?php echo base_url('Ephis_alert/show') ?>`
        }
    })

    $(document).ready(function() {
        $(document).on('click', '.y,.n', function(e) {

            if ($(e.currentTarget).hasClass('y')) {
                location.href = `<?php echo base_url('Ephis_alert/update_state_by_usr_id') ?>/${user[0].usr_id}/y`
            } else {
                location.href = `<?php echo base_url('Ephis_alert/update_state_by_usr_id') ?>/${user[0].usr_id}/n`
            }

        });
    });
</script>
<div class="d-flex justify-content-center user">



</div>