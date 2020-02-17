<script>
  // inital value to users
  let users = get_users();

  console.log(users)

  // jquery document ready
  $(document).ready(function() {

    create_new_monitor(users); // monitoring
    setInterval(ajax_call_monitor_users, 1000); //1000 MS == 1 sec

    // momitoring logic
    function ajax_call_monitor_users() {
      let new_users = get_users();
      if (new_users.length == users.length) {
        console.log("not change length")
        let check_infor = users.some(function(user, index) {
          return (users[index].id != new_users[index].id) || (users[index].usr_sta != new_users[index].usr_sta)
        })
        if (check_infor) {
          console.log("change status")
          users = new_users;
          create_new_monitor(users);
        }
      } else {
        console.log("change length")
        users = new_users;
        create_new_monitor(users);
      }
    }
    // momitoring logic


    // append to container
    function create_new_monitor(users) {
      remove_childs('.users-cards');
      users.map(function(user, index) {
        // template card
        let template_card = `<div class="card mt-5 mb-5 mr-5" style="width: 18rem;">
        <img src="<?php echo base_url('assets/images/avatar.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">${user.usr_pfname}${user.usr_fname} ${user.usr_lname}</h5>
          <p class="card-text">ผู้โดยสารโซน B</p>
          <a href="#" class="btn ${get_zones_class(user.usr_sta)}">${get_zones_def(user.usr_sta)}</a>
        </div>
      </div>`;
        // template card
        $('.users-cards').append(template_card);
        console.log(user)
      })
    }
    // append to container

  });
  // jquery document ready
</script>

<!-- html  -->
<section>
  <div class="container">
    <div class="d-flex justify-content-center mt-5 users-cards flex-wrap">
      <!--  -->
      <!-- append content -->
      <!--  -->
    </div>
  </div>
</section>
<!-- html  -->
