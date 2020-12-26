<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{!! asset('assets/images/faces/face1.jpg') !!}" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">David Grey. H</span>
          <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/icons/mdi.html">
        <span class="menu-title">Icons</span>
        <i class="mdi mdi-contacts menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Sample Pages</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href=""> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href=""> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href=""> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href=""> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href=""> 500 </a></li>
        </ul>
      </div>
    </li>
    
  </ul>
</nav>