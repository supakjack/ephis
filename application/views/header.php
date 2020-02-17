<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">
  <!-- jquery -->
  <script src="<?php echo base_url('assets/jquery-3.4.1.min.js') ?>"></script>
  <!-- sweetalert -->
  <script src="<?php echo base_url('assets/sweetalert2@9.js') ?>"></script>
  <title>Ephis</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url('Ephis_alert/') ?>">Ephis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item <?php echo isset($method) ? $method == 'monitor' ? 'active' : '' : '' ?>">
          <a class="nav-link" href="<?php echo base_url('Ephis_alert/show') ?>">Monitoring <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?php echo isset($method) ? $method == 'authen' ? 'active' : '' : '' ?>">
          <a class="nav-link" href="<?php echo base_url('Ephis_alert/authen') ?>">Authen</a>
        </li>
        <?php if (isset($this->session->id)) { ?>
          <li class="nav-item  ml-auto  active">
            <a class="nav-link" href="<?php echo base_url('Ephis_alert/index/logout') ?>">Logout</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </nav>

  <!-- goalbol js function -->
  <script>
    // get users
    function get_users(id = null) {
      console.log('id : ' + id)
      let json_sync;
      $.ajax({
        type: "post",
        url: "<?php echo base_url('Ephis_users_service_ajax/select_users') ?>",
        async: false,
        data: {
          usr_id: id
        },
        dataType: "json",
        success: function(response) {
          json_sync = response
        }
      });
      return json_sync;
    }
    // get users

    // get users
    function get_user_login(usr_username, usr_pass) {
      let json_sync;
      $.ajax({
        type: "post",
        url: "<?php echo base_url('Ephis_users_service_ajax/select_users_by_usr_username_and_usr_password') ?>",
        async: false,
        data: {
          usr_username: usr_username,
          usr_pass: usr_pass
        },
        dataType: "json",
        success: function(response) {
          json_sync = response
        }
      });
      return json_sync;
    }
    // get users

    // get zones_class
    function get_zones_class(status) {
      let class_name;
      if (status == "y") {
        class_name = 'btn-primary'
      } else {
        class_name = 'btn-danger'
      }
      return class_name;
    }
    // get zones_class

    // get zones_def
    function get_zones_def(status) {
      let def_name;
      if (status == "y") {
        def_name = 'ปลอดภัย'
      } else {
        def_name = 'ขอความช่วยเหลือ'
      }
      return def_name;
    }
    // get zones_def

    // remove childs node
    function remove_childs(selector) {
      const myNode = document.querySelector(selector);
      while (myNode.firstChild) {
        myNode.removeChild(myNode.firstChild);
      }
    }
    // remove childs node

    // inittial sweeta alert for boostrap
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })
    // inittial sweeta alert for boostrap

    // get and use function
    function get_value_and_do(input, func) {
      func(input.value)
    }
    // get and use function
  </script>
  <!-- goalbol js function -->