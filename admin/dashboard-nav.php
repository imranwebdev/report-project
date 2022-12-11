 <!-- top nav-bar -->
 <nav class="navbar navbar-expand border">
    <!-- collapse btn for offcanvas menu -->
    <div class="container-fluid">
      <a class="d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        <i class="bi bi-list " style="font-size:28px;"></i>
      </a>
      <!-- --------------- -->
      <!-- logo  -->
      <a class="navbar-brand" href="#"></a>
      <!-- ------------------------------------------- -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <!-- ------------------ -->
        <li class="nav-item mx-3 mt-2">
          <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-bell position-relative">
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
                <span class="visually-hidden">unread messages</span>
            </i>
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end m-3">
            <li style="width:280px; cursor:pointer;" class="notify-hover p-2">
              <div class="notification d-flex  justify-content-between ">
                <i class="bi bi-app-indicator"></i>
                <span class="px-2">you have changed your password few hours ago</span>
                <span class="small">5 min ago</span>
              </div>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li style="width:280px; cursor:pointer;" class="notify-hover p-2">
              <div class="notification d-flex  justify-content-between ">
                <i class="bi bi-app-indicator"></i>
                <span class="px-2">you have changed your password few hours ago</span>
                <span class="small">5 min ago</span>
              </div>
            </li>

            <li style="width:280px; cursor:pointer;" class="notify-hover p-2">
              <div class="notification d-flex  justify-content-center">
                <a href="#" class="text-decoration-none">view all</a>
              </div>
            </li>



          </ul>
        </li>
        <!-- ------------------------------- -->
        <li class="nav-item dropdown-center ">
          <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="images/avatar-s-1.png" class="fluid rounded-circle" style="width:30px;" alt="" srcset=""><small
              class="h6 p-1">Jhon doe</small>
          </a>
          <ul class="dropdown-menu  dropdown-menu-end ">
            <li><a class="dropdown-item " href="#"><i class="bi bi-person-circle me-2"></i>my account</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>setting</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>log out</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- -------------------- -->

  <!-- offcanvas sidebar nav -->
  <div class="offcanvas-lg offcanvas-start bg-dark offcanvas-custom-design position-fixed" tabindex="-1"
    id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header poation-relative">
      <button type="button" class="btn-close bg-white position-absolute top-0  end-0 m-3 " data-bs-dismiss="offcanvas"
        aria-label="Close" href="#offcanvasExample" role="button"></button>
    </div>
    <div class="offcanvas-body ">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              Home
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>

            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              workspace
            </div>
          </li>
          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#report">
              <span class="me-2"><i class="bi bi-layout-split"></i></span>
              <span>view report</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="report">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"></span>
                    <span>my report</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"></span>
                    <span>inline report</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
              <span class="me-2"><i class="bi bi-layout-split"></i></span>
              <span>report layout</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="layouts">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-columns"></i></span>
                    <span>layout 1</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-columns"></i></span>
                    <span>layout 2</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-graph-up"></i></span>
              <span>Charts</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Tables</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-app-indicator"></i></span>
              <span>Notice board</span>

            </a>
          </li>

          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              more
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-people"></i>
                <span>useres</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>