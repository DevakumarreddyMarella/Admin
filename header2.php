<nav class="navbar navbar-dark bg-primary px-2" id="main-navbar" style="height: 56px;">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <!-- Left: Toggle + Brand -->
    <div class="d-flex align-items-center gap-1 flex-shrink-0">
      <button class="btn btn-light d-lg-none p-1 m-0" id="sidebarToggle" style="width: 32px; height: 32px;">
        <i class="bi bi-list fs-6 m-0 p-0"></i>
      </button>
      <span class="navbar-brand mb-0 fs-4 text-white">Admin</span>
    </div>

    <!-- Right: Icons (tight spacing, small size) -->
    <div class="d-flex align-items-center gap-2 flex-shrink-0">

      <!-- Mail -->
      <div class="nav-item dropdown position-relative">
        <a class="nav-link p-2 " data-bs-toggle="dropdown" title="Messages">
          <i class="bi bi-envelope fs-5 text-white"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;">4</span>
        </a>

        <!-- <ul class="dropdown-menu dropdown-menu-end shadow-sm"  style="max-width: 95vw; width: 260px;">
          <li class="dropdown-header">Messages</li>
          <li>
            <a class="dropdown-item d-flex align-items-start" href="#">
              <i class="bi bi-person-lines-fill text-primary me-2 fs-5"></i>
              <div>
                <strong>John Doe</strong><br>
                <small class="text-muted">Can we reschedule the call?</small>
              </div>
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-start" href="#">
              <i class="bi bi-person-lines-fill text-success me-2 fs-5"></i>
              <div>
              <strong>Support Team</strong><br>
              <small class="text-muted">Your ticket has been resolved.</small>
              </div>
            </a>
          </li>
          <li>
            <a class="dropdown-item text-center text-primary fw-semibold" href="#">View All Messages</a>
          </li>
        </ul> -->
        <ul class="dropdown-menu dropdown-menu-end shadow-sm"
          style="max-width: 95vw; width: 260px;">
        <li class="dropdown-header">Messages</li>

        <li>
          <a class="dropdown-item d-flex align-items-start gap-2" href="#">
            <i class="bi bi-person-lines-fill text-primary fs-5"></i>
            <div class="text-truncate" style="min-width: 0;">
              <strong class="d-block">John Doe</strong>
              <small class="text-muted">Can we reschedule the call?</small>
            </div>
          </a>
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-start gap-2" href="#">
            <i class="bi bi-person-lines-fill text-success fs-5"></i>
            <div class="text-truncate" style="min-width: 0;">
              <strong class="d-block">Support Team</strong>
              <small class="text-muted">Your ticket has been resolved.</small>
            </div>
          </a>
        </li>

        <li>
          <a class="dropdown-item text-center text-primary fw-semibold" href="#">View All Messages</a>
        </li>
      </ul>

      </div>

      <!-- Notifications -->
      <div class="nav-item dropdown position-relative">
        <a class="nav-link p-2 " data-bs-toggle="dropdown" title="Notifications">
          <i class="bi bi-bell fs-5 text-white"></i>
          <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle" style="width: 8px; height: 8px;"></span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end shadow-sm"  style="max-width: 95vw; width: 260px;">
          <li class="dropdown-header">Notifications</li>
          <li>
            <a class="dropdown-item d-flex align-items-start" href="#">
              <i class="bi bi-info-circle text-primary me-2"></i>
              <div>
                <small><strong>Server rebooted</strong></small><br>
                <small class="text-muted">5 mins ago</small>
              </div>
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-start" href="#">
              <i class="bi bi-person-check text-success me-2"></i>
              <div>
                <small><strong>New user registered</strong></small><br>
                <small class="text-muted">12 mins ago</small>
              </div>
            </a>
          </li>
          <li>
            <a class="dropdown-item text-center text-primary fw-semibold" href="#">View all</a>
          </li>
        </ul>
      </div>

      <!-- Settings -->
      <div class="nav-item dropdown">
        <a class="nav-link p-2 " data-bs-toggle="dropdown" title="Settings">
          <i class="bi bi-gear fs-5 text-white"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-sliders me-2"></i> Account Settings
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-person-circle me-2"></i>View Profile
            </a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="logout.php">
              <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</nav>
