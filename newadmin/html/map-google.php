<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, easyearn admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, easyearn admin lite design, easyearn admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Easyearn</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/easyearn-lite/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../../user/assets/images/logo.png"
    />
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand ms-4" href="index.php">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="../../user/assets/images/logo.png"
                  alt="homepage"
                  class="dark-logo" width="70"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <h3 class="dark-logo" style="color:white">Easyearn</h3>
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <ul class="navbar-nav d-lg-none d-md-block">
              <li class="nav-item">
                <a
                  class="nav-toggler nav-link waves-effect waves-light text-white"
                  href="javascript:void(0)"
                  ><i class="ti-menu ti-close"></i
                ></a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto mt-md-0">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->

              <li class="nav-item search-box">
                <a class="nav-link text-muted" href="javascript:void(0)"
                  ><i class="ti-search"></i
                ></a>
                <form class="app-search" style="display: none">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="ti-close"></i></a>
                </form>
              </li>
            </ul>

            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-muted waves-effect waves-dark"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="../assets/images/users/1.jpg"
                    alt="user"
                    class="profile-pic me-2"
                  />Markarn Doe
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi me-2 mdi-gauge"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="pages-profile.php"
                  aria-expanded="false"
                >
                  <i class="mdi me-2 mdi-account-check"></i
                  ><span class="hide-menu">Profile</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-basic.php"
                  aria-expanded="false"
                  ><i class="mdi me-2 mdi-table"></i
                  ><span class="hide-menu">Table</span></a
                >
              </li>
              <!-- <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="icon-material.php"
                  aria-expanded="false"
                  ><i class="mdi me-2 mdi-emoticon"></i
                  ><span class="hide-menu">Icon</span></a
                >
              </li> -->
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="map-google.php"
                  aria-expanded="false"
                  ><i class="mdi me-2 mdi-earth"></i
                  ><span class="hide-menu">Google Map</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="pages-blank.php"
                  aria-expanded="false"
                  ><i class="mdi me-2 mdi-book-open-variant"></i
                  ><span class="hide-menu">Videos</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="pages-error-404.php"
                  aria-expanded="false"
                  ><i class="mdi me-2 mdi-help-circle"></i
                  ><span class="hide-menu">Error 404</span></a
                >
              </li>
              <li class="text-center p-20 upgrade-btn">
                <a
                  href="../../user/logout.php"
                  class="btn btn-warning text-white mt-4"
                  target="_blank"
                  >Logout</a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <div class="sidebar-footer">
          <div class="row">
            <div class="col-4 link-wrap">
              <!-- item-->
              <a
                href=""
                class="link"
                data-toggle="tooltip"
                title=""
                data-original-title="Settings"
                ><i class="ti-settings"></i
              ></a>
            </div>
            <div class="col-4 link-wrap">
              <!-- item-->
              <a
                href=""
                class="link"
                data-toggle="tooltip"
                title=""
                data-original-title="Email"
                ><i class="mdi mdi-gmail"></i
              ></a>
            </div>
            <div class="col-4 link-wrap">
              <!-- item-->
              <a
                href="../../user/logout.php"
                class="link"
                data-toggle="tooltip"
                title=""
                data-original-title="Logout"
                ><i class="mdi mdi-power"></i
              ></a>
            </div>
          </div>
        </div>
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
              <h3 class="page-title mb-0 p-0">Google map</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Google map
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
              <div class="text-end upgrade-btn">
                <a
                  href="../../user/logout.php"
                  class="btn btn-danger d-none d-md-inline-block text-white"
                  target="_blank"
                  >Logout</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Simple Basic Map</h4>
                  <div
                    id="gmaps-simple"
                    class="gmaps"
                    style="position: relative; overflow: hidden"
                  >
                    <div
                      style="
                        height: 100%;
                        width: 100%;
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        background-color: rgb(229, 227, 223);
                      "
                    >
                      <div
                        class="gm-style"
                        style="
                          position: absolute;
                          z-index: 0;
                          left: 0px;
                          top: 0px;
                          height: 100%;
                          width: 100%;
                          padding: 0px;
                          border-width: 0px;
                          margin: 0px;
                        "
                      >
                        <div
                          tabindex="0"
                          style="
                            position: absolute;
                            z-index: 0;
                            left: 0px;
                            top: 0px;
                            height: 100%;
                            width: 100%;
                            padding: 0px;
                            border-width: 0px;
                            margin: 0px;
                            cursor: url('https://maps.gstatic.com/mapfiles/openhand_8_8.cur'),
                              default;
                            touch-action: pan-x pan-y;
                          "
                        >
                          <div
                            style="
                              z-index: 1;
                              position: absolute;
                              left: 50%;
                              top: 50%;
                              width: 100%;
                              transform: translate(0px, 0px);
                            "
                          >
                            <div
                              style="
                                position: absolute;
                                left: 0px;
                                top: 0px;
                                z-index: 100;
                                width: 100%;
                              "
                            >
                              <div
                                style="
                                  position: absolute;
                                  left: 0px;
                                  top: 0px;
                                  z-index: 0;
                                "
                              >
                                <div
                                  style="
                                    position: absolute;
                                    z-index: 995;
                                    transform: matrix(1, 0, 0, 1, -1, -199);
                                  "
                                >
                                  <div
                                    style="
                                      position: absolute;
                                      left: 0px;
                                      top: 256px;
                                      width: 256px;
                                      height: 256px;
                                    "
                                  >
                                    <div
                                      style="width: 256px; height: 256px"
                                    ></div>
                                  </div>
                                  <div
                                    style="
                                      position: absolute;
                                      left: -256px;
                                      top: 256px;
                                      width: 256px;
                                      height: 256px;
                                    "
                                  >
                                    <div
                                      style="width: 256px; height: 256px"
                                    ></div>
                                  </div>
                                  <div
                                    style="
                                      position: absolute;
                                      left: -256px;
                                      top: 0px;
                                      width: 256px;
                                      height: 256px;
                                    "
                                  >
                                    <div
                                      style="width: 256px; height: 256px"
                                    ></div>
                                  </div>
                                  <div
                                    style="
                                      position: absolute;
                                      left: 0px;
                                      top: 0px;
                                      width: 256px;
                                      height: 256px;
                                    "
                                  >
                                    <div
                                      style="width: 256px; height: 256px"
                                    ></div>
                                  </div>
                                  <div
                                    style="
                                      position: absolute;
                                      left: 256px;
                                      top: 0px;
                                      width: 256px;
                                      height: 256px;
                                    "
                                  >
                                    <div
                                      style="width: 256px; height: 256px"
                                    ></div>
                                  </div>
                                  <div
                                    style="
                                      position: absolute;
                                      left: 256px;
                                      top: 256px;
                                      width: 256px;
                                      height: 256px;
                                    "
                                  >
                                    <div
                                      style="width: 256px; height: 256px"
                                    ></div>
                                  </div>
                                  <div
                                    style="
                                      position: absolute;
                                      left: -512px;
                                      top: 256px;
                                      width: 256px;
                                      height: 256px;
                                    "
                                  >
                                    <div
                                      style="width: 256px; height: 256px"
                                    ></div>
                                  </div>
                                  <div
                                    style="
                                      position: absolute;
                                      left: -512px;
                                      top: 0px;
                                      width: 256px;
                                      height: 256px;
                                    "
                                  >
                                    <div
                                      style="width: 256px; height: 256px"
                                    ></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              style="
                                position: absolute;
                                left: 0px;
                                top: 0px;
                                z-index: 101;
                                width: 100%;
                              "
                            ></div>
                            <div
                              style="
                                position: absolute;
                                left: 0px;
                                top: 0px;
                                z-index: 102;
                                width: 100%;
                              "
                            ></div>
                            <div
                              style="
                                position: absolute;
                                left: 0px;
                                top: 0px;
                                z-index: 103;
                                width: 100%;
                              "
                            ></div>
                            <div
                              style="
                                position: absolute;
                                left: 0px;
                                top: 0px;
                                z-index: 0;
                              "
                            >
                              <div
                                style="
                                  position: absolute;
                                  z-index: 995;
                                  transform: matrix(1, 0, 0, 1, -1, -199);
                                "
                              >
                                <div
                                  style="
                                    position: absolute;
                                    left: 0px;
                                    top: 256px;
                                    width: 256px;
                                    height: 256px;
                                    transition: opacity 200ms linear 0s;
                                  "
                                >
                                  <img
                                    draggable="false"
                                    alt=""
                                    role="presentation"
                                    src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i5!2i9!3i13!4i256!2m3!1e0!2sm!3i526246104!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=69652"
                                    style="
                                      width: 256px;
                                      height: 256px;
                                      user-select: none;
                                      border: 0px;
                                      padding: 0px;
                                      margin: 0px;
                                      max-width: none;
                                    "
                                  />
                                </div>
                                <div
                                  style="
                                    position: absolute;
                                    left: -512px;
                                    top: 256px;
                                    width: 256px;
                                    height: 256px;
                                    transition: opacity 200ms linear 0s;
                                  "
                                >
                                  <img
                                    draggable="false"
                                    alt=""
                                    role="presentation"
                                    src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i5!2i7!3i13!4i256!2m3!1e0!2sm!3i526246188!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=36853"
                                    style="
                                      width: 256px;
                                      height: 256px;
                                      user-select: none;
                                      border: 0px;
                                      padding: 0px;
                                      margin: 0px;
                                      max-width: none;
                                    "
                                  />
                                </div>
                                <div
                                  style="
                                    position: absolute;
                                    left: -512px;
                                    top: 0px;
                                    width: 256px;
                                    height: 256px;
                                    transition: opacity 200ms linear 0s;
                                  "
                                >
                                  <img
                                    draggable="false"
                                    alt=""
                                    role="presentation"
                                    src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i5!2i7!3i12!4i256!2m3!1e0!2sm!3i526246188!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=1159"
                                    style="
                                      width: 256px;
                                      height: 256px;
                                      user-select: none;
                                      border: 0px;
                                      padding: 0px;
                                      margin: 0px;
                                      max-width: none;
                                    "
                                  />
                                </div>
                                <div
                                  style="
                                    position: absolute;
                                    left: -256px;
                                    top: 256px;
                                    width: 256px;
                                    height: 256px;
                                    transition: opacity 200ms linear 0s;
                                  "
                                >
                                  <img
                                    draggable="false"
                                    alt=""
                                    role="presentation"
                                    src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i5!2i8!3i13!4i256!2m3!1e0!2sm!3i526246188!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=9335"
                                    style="
                                      width: 256px;
                                      height: 256px;
                                      user-select: none;
                                      border: 0px;
                                      padding: 0px;
                                      margin: 0px;
                                      max-width: none;
                                    "
                                  />
                                </div>
                                <div
                                  style="
                                    position: absolute;
                                    left: -256px;
                                    top: 0px;
                                    width: 256px;
                                    height: 256px;
                                    transition: opacity 200ms linear 0s;
                                  "
                                >
                                  <img
                                    draggable="false"
                                    alt=""
                                    role="presentation"
                                    src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i5!2i8!3i12!4i256!2m3!1e0!2sm!3i526246188!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=104712"
                                    style="
                                      width: 256px;
                                      height: 256px;
                                      user-select: none;
                                      border: 0px;
                                      padding: 0px;
                                      margin: 0px;
                                      max-width: none;
                                    "
                                  />
                                </div>
                                <div
                                  style="
                                    position: absolute;
                                    left: 0px;
                                    top: 0px;
                                    width: 256px;
                                    height: 256px;
                                    transition: opacity 200ms linear 0s;
                                  "
                                >
                                  <img
                                    draggable="false"
                                    alt=""
                                    role="presentation"
                                    src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i5!2i9!3i12!4i256!2m3!1e0!2sm!3i526246104!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=33958"
                                    style="
                                      width: 256px;
                                      height: 256px;
                                      user-select: none;
                                      border: 0px;
                                      padding: 0px;
                                      margin: 0px;
                                      max-width: none;
                                    "
                                  />
                                </div>
                                <div
                                  style="
                                    position: absolute;
                                    left: 256px;
                                    top: 0px;
                                    width: 256px;
                                    height: 256px;
                                    transition: opacity 200ms linear 0s;
                                  "
                                >
                                  <img
                                    draggable="false"
                                    alt=""
                                    role="presentation"
                                    src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i5!2i10!3i12!4i256!2m3!1e0!2sm!3i526246104!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=30586"
                                    style="
                                      width: 256px;
                                      height: 256px;
                                      user-select: none;
                                      border: 0px;
                                      padding: 0px;
                                      margin: 0px;
                                      max-width: none;
                                    "
                                  />
                                </div>
                                <div
                                  style="
                                    position: absolute;
                                    left: 256px;
                                    top: 256px;
                                    width: 256px;
                                    height: 256px;
                                    transition: opacity 200ms linear 0s;
                                  "
                                >
                                  <img
                                    draggable="false"
                                    alt=""
                                    role="presentation"
                                    src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i5!2i10!3i13!4i256!2m3!1e0!2sm!3i526246104!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=66280"
                                    style="
                                      width: 256px;
                                      height: 256px;
                                      user-select: none;
                                      border: 0px;
                                      padding: 0px;
                                      margin: 0px;
                                      max-width: none;
                                    "
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="gm-style-pbc"
                            style="
                              z-index: 2;
                              position: absolute;
                              height: 100%;
                              width: 100%;
                              padding: 0px;
                              border-width: 0px;
                              margin: 0px;
                              left: 0px;
                              top: 0px;
                              opacity: 0;
                            "
                          >
                            <p class="gm-style-pbt"></p>
                          </div>
                          <div
                            style="
                              z-index: 3;
                              position: absolute;
                              height: 100%;
                              width: 100%;
                              padding: 0px;
                              border-width: 0px;
                              margin: 0px;
                              left: 0px;
                              top: 0px;
                              touch-action: pan-x pan-y;
                            "
                          >
                            <div
                              style="
                                z-index: 4;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                width: 100%;
                                transform: translate(0px, 0px);
                              "
                            >
                              <div
                                style="
                                  position: absolute;
                                  left: 0px;
                                  top: 0px;
                                  z-index: 104;
                                  width: 100%;
                                "
                              ></div>
                              <div
                                style="
                                  position: absolute;
                                  left: 0px;
                                  top: 0px;
                                  z-index: 105;
                                  width: 100%;
                                "
                              ></div>
                              <div
                                style="
                                  position: absolute;
                                  left: 0px;
                                  top: 0px;
                                  z-index: 106;
                                  width: 100%;
                                "
                              ></div>
                              <div
                                style="
                                  position: absolute;
                                  left: 0px;
                                  top: 0px;
                                  z-index: 107;
                                  width: 100%;
                                "
                              ></div>
                            </div>
                          </div>
                        </div>
                        <iframe
                          aria-hidden="true"
                          frameborder="0"
                          tabindex="-1"
                          style="
                            z-index: -1;
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            top: 0px;
                            left: 0px;
                            border: none;
                          "
                          __idm_frm__="671"
                        ></iframe>
                        <div
                          style="
                            margin-left: 5px;
                            margin-right: 5px;
                            z-index: 1000000;
                            position: absolute;
                            left: 0px;
                            bottom: 0px;
                          "
                        >
                          <a
                            target="_blank"
                            rel="noopener"
                            href="https://maps.google.com/maps?ll=34.05,-78.72&amp;z=5&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                            title="Open this area in Google Maps (opens a new window)"
                            style="
                              position: static;
                              overflow: visible;
                              float: none;
                              display: inline;
                            "
                          >
                            <div
                              style="width: 66px; height: 26px; cursor: pointer"
                            >
                              <img
                                alt=""
                                src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png"
                                draggable="false"
                                style="
                                  position: absolute;
                                  left: 0px;
                                  top: 0px;
                                  width: 66px;
                                  height: 26px;
                                  user-select: none;
                                  border: 0px;
                                  padding: 0px;
                                  margin: 0px;
                                "
                              />
                            </div>
                          </a>
                        </div>
                        <div
                          style="
                            background-color: white;
                            padding: 15px 21px;
                            border: 1px solid rgb(171, 171, 171);
                            font-family: Roboto, Arial, sans-serif;
                            color: rgb(34, 34, 34);
                            box-sizing: border-box;
                            box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px;
                            z-index: 10000002;
                            display: none;
                            width: 300px;
                            height: 180px;
                            position: absolute;
                            left: 355px;
                            top: 60px;
                          "
                        >
                          <div
                            style="
                              padding: 0px 0px 10px;
                              font-size: 16px;
                              box-sizing: border-box;
                            "
                          >
                            Map Data
                          </div>
                          <div style="font-size: 13px">
                            Map data ©2021 Google, INEGI
                          </div>
                          <button
                            draggable="false"
                            title="Close"
                            aria-label="Close"
                            type="button"
                            class="gm-ui-hover-effect"
                            style="
                              background: none;
                              display: block;
                              border: 0px;
                              margin: 0px;
                              padding: 0px;
                              position: absolute;
                              cursor: pointer;
                              user-select: none;
                              top: 0px;
                              right: 0px;
                              width: 37px;
                              height: 37px;
                            "
                          >
                            <img
                              src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                              style="
                                pointer-events: none;
                                display: block;
                                width: 13px;
                                height: 13px;
                                margin: 12px;
                              "
                            />
                          </button>
                        </div>
                        <div
                          class="gmnoprint"
                          style="
                            z-index: 1000001;
                            position: absolute;
                            right: 169px;
                            bottom: 0px;
                            width: 150px;
                          "
                        >
                          <div
                            draggable="false"
                            class="gm-style-cc"
                            style="
                              user-select: none;
                              height: 14px;
                              line-height: 14px;
                            "
                          >
                            <div
                              style="
                                opacity: 0.7;
                                width: 100%;
                                height: 100%;
                                position: absolute;
                              "
                            >
                              <div style="width: 1px"></div>
                              <div
                                style="
                                  background-color: rgb(245, 245, 245);
                                  width: auto;
                                  height: 100%;
                                  margin-left: 1px;
                                "
                              ></div>
                            </div>
                            <div
                              style="
                                position: relative;
                                padding-right: 6px;
                                padding-left: 6px;
                                box-sizing: border-box;
                                font-family: Roboto, Arial, sans-serif;
                                font-size: 10px;
                                color: rgb(68, 68, 68);
                                white-space: nowrap;
                                direction: ltr;
                                text-align: right;
                                vertical-align: middle;
                                display: inline-block;
                              "
                            >
                              <a
                                style="
                                  text-decoration: none;
                                  cursor: pointer;
                                  display: none;
                                "
                                >Map Data</a
                              ><span>Map data ©2021 Google, INEGI</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="gmnoscreen"
                          style="position: absolute; right: 0px; bottom: 0px"
                        >
                          <div
                            style="
                              font-family: Roboto, Arial, sans-serif;
                              font-size: 11px;
                              color: rgb(68, 68, 68);
                              direction: ltr;
                              text-align: right;
                              background-color: rgb(245, 245, 245);
                            "
                          >
                            Map data ©2021 Google, INEGI
                          </div>
                        </div>
                        <div
                          class="gmnoprint gm-style-cc"
                          draggable="false"
                          style="
                            z-index: 1000001;
                            user-select: none;
                            height: 14px;
                            line-height: 14px;
                            position: absolute;
                            right: 0px;
                            bottom: 0px;
                          "
                        >
                          <div
                            style="
                              opacity: 0.7;
                              width: 100%;
                              height: 100%;
                              position: absolute;
                            "
                          >
                            <div style="width: 1px"></div>
                            <div
                              style="
                                background-color: rgb(245, 245, 245);
                                width: auto;
                                height: 100%;
                                margin-left: 1px;
                              "
                            ></div>
                          </div>
                          <div
                            style="
                              position: relative;
                              padding-right: 6px;
                              padding-left: 6px;
                              box-sizing: border-box;
                              font-family: Roboto, Arial, sans-serif;
                              font-size: 10px;
                              color: rgb(68, 68, 68);
                              white-space: nowrap;
                              direction: ltr;
                              text-align: right;
                              vertical-align: middle;
                              display: inline-block;
                            "
                          >
                            <a
                              href="https://www.google.com/intl/en-US_US/help/terms_maps.html"
                              target="_blank"
                              rel="noopener"
                              style="
                                text-decoration: none;
                                cursor: pointer;
                                color: rgb(68, 68, 68);
                              "
                              >Terms of Use</a
                            >
                          </div>
                        </div>
                        <button
                          draggable="false"
                          title="Toggle fullscreen view"
                          aria-label="Toggle fullscreen view"
                          type="button"
                          class="gm-control-active gm-fullscreen-control"
                          style="
                            background: none rgb(255, 255, 255);
                            border: 0px;
                            margin: 10px;
                            padding: 0px;
                            position: absolute;
                            cursor: pointer;
                            user-select: none;
                            border-radius: 2px;
                            height: 40px;
                            width: 40px;
                            box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px;
                            overflow: hidden;
                            top: 0px;
                            right: 0px;
                          "
                        >
                          <img
                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                            style="height: 18px; width: 18px"
                          /><img
                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                            style="height: 18px; width: 18px"
                          /><img
                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                            style="height: 18px; width: 18px"
                          />
                        </button>
                        <div
                          draggable="false"
                          class="gm-style-cc"
                          style="
                            user-select: none;
                            height: 14px;
                            line-height: 14px;
                            display: none;
                            position: absolute;
                            right: 0px;
                            bottom: 0px;
                          "
                        >
                          <div
                            style="
                              opacity: 0.7;
                              width: 100%;
                              height: 100%;
                              position: absolute;
                            "
                          >
                            <div style="width: 1px"></div>
                            <div
                              style="
                                background-color: rgb(245, 245, 245);
                                width: auto;
                                height: 100%;
                                margin-left: 1px;
                              "
                            ></div>
                          </div>
                          <div
                            style="
                              position: relative;
                              padding-right: 6px;
                              padding-left: 6px;
                              box-sizing: border-box;
                              font-family: Roboto, Arial, sans-serif;
                              font-size: 10px;
                              color: rgb(68, 68, 68);
                              white-space: nowrap;
                              direction: ltr;
                              text-align: right;
                              vertical-align: middle;
                              display: inline-block;
                            "
                          >
                            <a
                              target="_blank"
                              rel="noopener"
                              title="Report errors in the road map or imagery to Google"
                              href="https://www.google.com/maps/@34.05,-78.72,5z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                              style="
                                font-family: Roboto, Arial, sans-serif;
                                font-size: 10px;
                                color: rgb(68, 68, 68);
                                text-decoration: none;
                                position: relative;
                              "
                              >Report a map error</a
                            >
                          </div>
                        </div>
                        <div
                          class="gmnoprint gm-bundled-control"
                          draggable="false"
                          controlwidth="40"
                          controlheight="81"
                          style="
                            margin: 10px;
                            user-select: none;
                            position: absolute;
                            left: 0px;
                            top: 0px;
                          "
                        >
                          <div
                            class="gmnoprint"
                            controlwidth="40"
                            controlheight="81"
                            style="position: absolute; left: 0px; top: 0px"
                          >
                            <div
                              draggable="false"
                              style="
                                user-select: none;
                                box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px;
                                border-radius: 2px;
                                cursor: pointer;
                                background-color: rgb(255, 255, 255);
                                width: 40px;
                                height: 81px;
                              "
                            >
                              <button
                                draggable="false"
                                title="Zoom in"
                                aria-label="Zoom in"
                                type="button"
                                class="gm-control-active"
                                style="
                                  background: none;
                                  display: block;
                                  border: 0px;
                                  margin: 0px;
                                  padding: 0px;
                                  position: relative;
                                  cursor: pointer;
                                  user-select: none;
                                  overflow: hidden;
                                  width: 40px;
                                  height: 40px;
                                  top: 0px;
                                  left: 0px;
                                "
                              >
                                <img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="height: 18px; width: 18px"
                                /><img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="height: 18px; width: 18px"
                                /><img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="height: 18px; width: 18px"
                                />
                              </button>
                              <div
                                style="
                                  position: relative;
                                  overflow: hidden;
                                  width: 30px;
                                  height: 1px;
                                  margin: 0px 5px;
                                  background-color: rgb(230, 230, 230);
                                  top: 0px;
                                "
                              ></div>
                              <button
                                draggable="false"
                                title="Zoom out"
                                aria-label="Zoom out"
                                type="button"
                                class="gm-control-active"
                                style="
                                  background: none;
                                  display: block;
                                  border: 0px;
                                  margin: 0px;
                                  padding: 0px;
                                  position: relative;
                                  cursor: pointer;
                                  user-select: none;
                                  overflow: hidden;
                                  width: 40px;
                                  height: 40px;
                                  top: 0px;
                                  left: 0px;
                                "
                              >
                                <img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="height: 18px; width: 18px"
                                /><img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="height: 18px; width: 18px"
                                /><img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="height: 18px; width: 18px"
                                />
                              </button>
                            </div>
                          </div>
                        </div>
                        <div
                          class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                          draggable="false"
                          controlwidth="0"
                          controlheight="0"
                          style="
                            margin: 10px;
                            user-select: none;
                            position: absolute;
                            display: none;
                            bottom: 14px;
                            right: 0px;
                          "
                        >
                          <div
                            class="gmnoprint"
                            controlwidth="40"
                            controlheight="40"
                            style="display: none; position: absolute"
                          >
                            <div style="width: 40px; height: 40px">
                              <button
                                draggable="false"
                                title="Rotate map 90 degrees"
                                aria-label="Rotate map 90 degrees"
                                type="button"
                                class="gm-control-active"
                                style="
                                  background: none rgb(255, 255, 255);
                                  display: none;
                                  border: 0px;
                                  margin: 0px 0px 32px;
                                  padding: 0px;
                                  position: relative;
                                  cursor: pointer;
                                  user-select: none;
                                  width: 40px;
                                  height: 40px;
                                  top: 0px;
                                  left: 0px;
                                  overflow: hidden;
                                  box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px;
                                  border-radius: 2px;
                                "
                              >
                                <img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="height: 18px; width: 18px"
                                /><img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="height: 18px; width: 18px"
                                /><img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="height: 18px; width: 18px"
                                /></button
                              ><button
                                draggable="false"
                                title="Tilt map"
                                aria-label="Tilt map"
                                type="button"
                                class="gm-tilt gm-control-active"
                                style="
                                  background: none rgb(255, 255, 255);
                                  display: block;
                                  border: 0px;
                                  margin: 0px;
                                  padding: 0px;
                                  position: relative;
                                  cursor: pointer;
                                  user-select: none;
                                  width: 40px;
                                  height: 40px;
                                  top: 0px;
                                  left: 0px;
                                  overflow: hidden;
                                  box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px;
                                  border-radius: 2px;
                                "
                              >
                                <img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="width: 18px"
                                /><img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="width: 18px"
                                /><img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="width: 18px"
                                />
                              </button>
                            </div>
                          </div>
                        </div>
                        <div
                          draggable="false"
                          class="gm-style-cc"
                          style="
                            position: absolute;
                            user-select: none;
                            height: 14px;
                            line-height: 14px;
                            right: 71px;
                            bottom: 0px;
                          "
                        >
                          <div
                            style="
                              opacity: 0.7;
                              width: 100%;
                              height: 100%;
                              position: absolute;
                            "
                          >
                            <div style="width: 1px"></div>
                            <div
                              style="
                                background-color: rgb(245, 245, 245);
                                width: auto;
                                height: 100%;
                                margin-left: 1px;
                              "
                            ></div>
                          </div>
                          <div
                            style="
                              position: relative;
                              padding-right: 6px;
                              padding-left: 6px;
                              box-sizing: border-box;
                              font-family: Roboto, Arial, sans-serif;
                              font-size: 10px;
                              color: rgb(68, 68, 68);
                              white-space: nowrap;
                              direction: ltr;
                              text-align: right;
                              vertical-align: middle;
                              display: inline-block;
                            "
                          >
                            <span>200 km&nbsp;</span>
                            <div
                              style="
                                position: relative;
                                display: inline-block;
                                height: 8px;
                                bottom: -1px;
                                width: 50px;
                              "
                            >
                              <div
                                style="
                                  width: 100%;
                                  height: 4px;
                                  position: absolute;
                                  left: 0px;
                                  top: 0px;
                                "
                              ></div>
                              <div
                                style="
                                  width: 4px;
                                  height: 8px;
                                  left: 0px;
                                  top: 0px;
                                  background-color: rgb(255, 255, 255);
                                "
                              ></div>
                              <div
                                style="
                                  width: 4px;
                                  height: 8px;
                                  position: absolute;
                                  background-color: rgb(255, 255, 255);
                                  right: 0px;
                                  bottom: 0px;
                                "
                              ></div>
                              <div
                                style="
                                  position: absolute;
                                  background-color: rgb(102, 102, 102);
                                  height: 2px;
                                  left: 1px;
                                  bottom: 1px;
                                  right: 1px;
                                "
                              ></div>
                              <div
                                style="
                                  position: absolute;
                                  width: 2px;
                                  height: 6px;
                                  left: 1px;
                                  top: 1px;
                                  background-color: rgb(102, 102, 102);
                                "
                              ></div>
                              <div
                                style="
                                  width: 2px;
                                  height: 6px;
                                  position: absolute;
                                  background-color: rgb(102, 102, 102);
                                  bottom: 1px;
                                  right: 1px;
                                "
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      style="
                        background-color: white;
                        font-weight: 500;
                        font-family: Roboto, sans-serif;
                        padding: 15px 25px;
                        box-sizing: border-box;
                        top: 5px;
                        border: 1px solid rgba(0, 0, 0, 0.12);
                        border-radius: 5px;
                        left: 50%;
                        max-width: 375px;
                        position: absolute;
                        transform: translateX(-50%);
                        width: calc(100% - 10px);
                        z-index: 1;
                      "
                    >
                      <div>
                        <img
                          alt=""
                          src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg"
                          draggable="false"
                          style="
                            padding: 0px;
                            margin: 0px;
                            border: 0px;
                            height: 17px;
                            vertical-align: middle;
                            width: 52px;
                            user-select: none;
                          "
                        />
                      </div>
                      <div style="line-height: 20px; margin: 15px 0px">
                        <span
                          style="color: rgba(0, 0, 0, 0.87); font-size: 14px"
                          >This page can't load Google Maps correctly.</span
                        >
                      </div>
                      <table style="width: 100%">
                        <tr>
                          <td style="line-height: 16px; vertical-align: middle">
                            <a
                              href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors"
                              target="_blank"
                              rel="noopener"
                              style="
                                color: rgba(0, 0, 0, 0.54);
                                font-size: 12px;
                              "
                              >Do you own this website?</a
                            >
                          </td>
                          <td style="text-align: right">
                            <button class="dismissButton">OK</button>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
          © 2021 Admin by
          <a href="">Easyearn</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- google maps api -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="../assets/plugins/gmaps/gmaps.min.js"></script>
    <script src="../assets/plugins/gmaps/jquery.gmaps.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
  </body>
</html>
