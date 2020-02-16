<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <title>Ephis</title>
</head>

<!-- goalbol js function -->
<script>
  // get users
  function get_users(id = null) {
    let json_sync;
    $.ajax({
      type: "post",
      url: "<?php echo base_url('Ephis_users_service_ajax/select_users') ?>",
      async: false,
      data: {
        id: id
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

  
</script>
<!-- goalbol js function -->

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url('Ephis_alert/show') ?>">Ephis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item <?php echo isset($method)?$method=='monitor'?'active':'':'' ?>">
          <a class="nav-link" href="<?php echo base_url('Ephis_alert/show') ?>">Monitoring <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?php echo isset($method)?$method=='authen'?'active':'':'' ?>">
          <a class="nav-link" href="<?php echo base_url('Ephis_alert/authen') ?>">Authen</a>
        </li>

      </ul>
    </div>
  </nav>