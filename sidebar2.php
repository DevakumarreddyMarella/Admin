<?php
$activePage = basename($_SERVER['PHP_SELF']);
?>

<!-- <nav id="sidebar" class="bg-light"> -->
<nav id="sidebar" class="bg-white text-dark vh-100 position-fixed d-flex flex-column shadow-sm" style="width: 250px;">
  <div class="text-center  border-bottom">
    <img src="assets/Profile_pic.png" alt="User" class="rounded-circle mb-" width="80" height="80">
    <h5 class="mb-0">Deva</h5>
    <small class="text-muted">Software Engineer</small>
  </div>
   <!-- Menu -->
  <ul class="nav flex-column p-3" id="sidebarAccordion">
    <li class="text-uppercase text-muted small mb-2">Main</li>

    <li class="nav-item mb-1">
        <a href="dashboard2.php" class="nav-link d-flex justify-content-between align-items-center <?php echo ($activePage === 'dashboard2.php') ? 'active bg-primary text-white rounded' : 'text-dark'; ?>">
        <span><i class="bi bi-house-door me-2"></i> Dashboards</span>
        <i class="bi bi-chevron-right small"></i>
      </a>
    </li>

    <li class="nav-item mb-1">
      <a href="#pagesSubmenu" class="nav-link text-dark d-flex justify-content-between align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="false">
        <span><i class="bi bi-file-earmark-text me-2"></i> Pages</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
      <div class="collapse ps-3" id="pagesSubmenu" data-bs-parent="#sidebarAccordion">
        <a href="about.php" class="nav-link <?= $activePage == 'about.php' ? 'active text-primary' : 'text-muted' ?>">About</a>
        <a href="contact.php" class="nav-link <?= $activePage == 'contact.php' ? 'active text-primary' : 'text-muted' ?>">Contact</a>
      </div>
    </li>

    <li class="nav-item mb-1">
      <a href="#authSubmenu" class="nav-link text-dark d-flex justify-content-between align-items-center" data-bs-toggle="collapse" role="button">
        <span><i class="bi bi-box-arrow-in-right me-2"></i> Auth</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
      <div class="collapse ps-3" id="authSubmenu" data-bs-parent="#sidebarAccordion">
        <a href="login.php" class="nav-link <?= $activePage == 'login.php' ? 'active text-primary' : 'text-muted' ?>">Login</a>
        <a href="register.php" class="nav-link <?= $activePage == 'register.php' ? 'active text-primary' : 'text-muted' ?>">Register</a>
      </div>
    </li>

    <li class="text-uppercase text-muted small mt-4 mb-2">Elements</li>

    <li class="nav-item mb-1">
      <a href="charts.php" class="nav-link d-flex justify-content-between align-items-center <?= $activePage == 'charts.php' ? 'active bg-primary text-white rounded' : 'text-dark' ?>">
        <span><i class="bi bi-pie-chart me-2"></i> Charts</span>
        <span class="badge bg-primary">New</span>
      </a>
    </li>

    <li class="nav-item mb-1">
      <a href="forms.php" class="nav-link text-dark <?= $activePage == 'forms.php' ? 'active bg-primary text-white rounded' : '' ?>">
        <i class="bi bi-check-square me-2"></i> Forms
      </a>
    </li>

    <li class="nav-item mb-1">
      <a href="tables.php" class="nav-link text-dark <?= $activePage == 'tables.php' ? 'active bg-primary text-white rounded' : '' ?>">
        <i class="bi bi-table me-2"></i> Tables
      </a>
    </li>

    <li class="nav-item mt-auto">
      <a href="logout.php" class="nav-link text-dark">
        <i class="bi bi-box-arrow-right me-2"></i> Logout
      </a>
    </li>
  </ul>
</nav>
<script>
  
</script>
