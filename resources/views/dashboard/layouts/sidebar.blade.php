 <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
        <a href="" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="https://mdybayresort.com/wp-content/uploads/2022/04/MDY-Bay-resort-logo-01.png" alt="" width="100" height="100">
        </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('accommodation.index') }}" class="menu-link">
            <i class="fas fa-hotel"></i>
            <div data-i18n="Basic" class="ms-3">Accomdation</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('nearby_attraction.index') }}" class="menu-link">
            <i class="fas fa-tasks"></i>
          <div data-i18n="Basic" class="ms-3">Nearby Attraction</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('facilities.index') }}" class="menu-link">
            <i class="fa-solid fa-hand-holding-heart"></i>
          <div data-i18n="Basic" class="ms-3">Recreational Facilities</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('users.index') }}" class="menu-link">
            <i class="fas fa-users"></i>
          <div data-i18n="Basic" class="ms-3">Users</div>
        </a>
      </li>

    </ul>
  </aside>
  <!-- / Menu -->
