<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    #sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100%;
      background: #fff;
      transform: translateX(-100%);
      transition: transform 0.3s ease;
      z-index: 1050;
      padding-top: 60px;
    }

    #sidebar.show-sidebar {
      transform: translateX(0);
    }

    #main-navbar {
      height: 60px;
      z-index: 1030;
    }

    #main-content {
      padding: 20px;
      transition: margin-left 0.3s ease;
    }

    #overlay {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vw;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1040;
      display: none;
    }

    @media (min-width: 992px) {
      #sidebar {
        transform: translateX(0) !important;
      }

      #main-content {
        margin-left: 250px;
      }

      #main-navbar {
        margin-left: 250px;
      }

      #overlay {
        display: none !important;
      }
    }
  </style>
</head>
<body>

<?php include 'sidebar2.php'; ?>
<?php include 'header2.php'; ?>

<div id="overlay"></div>

<div id="main-content">
  <h1>Welcome to Dashboard</h1>
  <p>This is your main content.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const overlay = document.getElementById('overlay');

    sidebarToggle.addEventListener('click', function () {
      sidebar.classList.toggle('show-sidebar');
      overlay.style.display = sidebar.classList.contains('show-sidebar') ? 'block' : 'none';
    });

    overlay.addEventListener('click', function () {
      sidebar.classList.remove('show-sidebar');
      overlay.style.display = 'none';
    });
  });
  
</script>

</body>
</html>
