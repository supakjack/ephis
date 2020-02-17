<!-- html -->
<div class="d-flex justify-content-center user">
    <!-- render here -->
</div>
<!-- html -->

<script>
    let user = get_users(`<?php echo $this->session->id; ?>`); //for login user data
    console.log(user)

    //  render card user
    function rebder_user_card() {
        user.map(function(user, index) {
            console.log(user)
            let card_template = `<div class="card mt-5" style="width: 22rem;">
                                <img src="<?php echo base_url('assets/images/avatar.png') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">สถานะ : ${get_zones_def(user.usr_sta)}</h5>
                                    <p class="card-text">ชื่อ ${user.usr_pfname}${user.usr_fname} ${user.usr_lname}</p>
                                    <a href="#" class="btn btn-primary y">ปลอดภัย </a>
                                    <a href="#" class="btn btn-danger n">ขอความช่วยเหลือ</a>
                                </div>
                            </div>`;
            remove_childs('.user')
            $('.user').append(card_template);
        })
    }
    //  render card user

    // document ready wiil do it
    $(document).ready(function() {

        rebder_user_card()

        // when click on class y or n
        $(document).on('click', '.y,.n', function(e) {
            // check btn
            if ($(e.currentTarget).hasClass('y')) {
                user[0].usr_sta = 'y'
            } else {
                user[0].usr_sta = 'n'
            }
            // check btn

            // update 
            $.post("<?php echo base_url('Ephis_users_service_ajax/update_users') ?>", {
                    user: user[0]
                },
                function(data, textStatus, jqXHR) {
                    rebder_user_card()
                    console.log(data)
                },
                "json"
            );
            // update 

        });
        // when click on class y or n
    });
    // document ready wiil do it
</script>