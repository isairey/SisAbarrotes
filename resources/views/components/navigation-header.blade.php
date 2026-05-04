<div class="main-header-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
            <img src="{{asset('img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand" height="20" />
        </a>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <ipan class="gg-menu-right"></ipan </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
        </div>
        <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
        </button>
    </div>
    <!-- End Logo Header -->
</div>

<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                        <i class="fa fa-search search-icon"></i>
                    </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control" />
            </div>
        </nav>

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false" aria-haspopup="true">
                    <i class="fa fa-search"></i>
                </a>
                <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                        <div class="input-group">
                            <input type="text" placeholder="Search ..." class="form-control" />
                        </div>
                    </form>
                </ul>
            </li>
            <li class="nav-item topbar-icon dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-envelope"></i>
                </a>
                <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                    <li>
                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                            Mensajes
                            <a href="#" class="small">Marcar todo como leído</a>
                        </div>
                    </li>
                    <li>
                        <div class="message-notif-scroll scrollbar-outer">
                            <div class="notif-center">
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="{{asset('img/jm_denis.jpg')}}" alt="Img Profile" />
                                    </div>
                                    <div class="notif-content">
                                        <span class="subject">Jimmy Denis</span>
                                        <span class="block"> ¿Cómo estás? </span>
                                        <span class="time">Hace 5 minutos</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="{{asset('img/chadengle.jpg')}}" alt="Img Profile" />
                                    </div>
                                    <div class="notif-content">
                                        <span class="subject">Chad</span>
                                        <span class="block"> Bueno, gracias! </span>
                                        <span class="time">Hace 12 minutos</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="{{asset('img/mlane.jpg')}}" alt="Img Profile" />
                                    </div>
                                    <div class="notif-content">
                                        <span class="subject">Jhon Doe</span>
                                        <span class="block">
                                            Listos para la reunión de hoy...
                                        </span>
                                        <span class="time">Hace 12 minutos</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="{{asset('img/talha.jpg')}}" alt="Img Profile" />
                                    </div>
                                    <div class="notif-content">
                                        <span class="subject">Carlos</span>
                                        <span class="block"> Hola, Luis Cueva ? </span>
                                        <span class="time">Hace 17 minutos</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="see-all" href="javascript:void(0);">Ver todos los mensajes<i
                                class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item topbar-icon dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="notification">4</span>
                </a>
                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                    <li>
                        <div class="dropdown-title">
                            Tienes 4 nuevas notificaciones
                        </div>
                    </li>
                    <li>
                        <div class="notif-scroll scrollbar-outer">
                            <div class="notif-center">
                                <a href="#">
                                    <div class="notif-icon notif-primary">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <div class="notif-content">
                                        <span class="block">Nuevo usuario registrado </span>
                                        <span class="time">Hace 5 minutos</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-icon notif-success">
                                        <i class="fa fa-comment"></i>
                                    </div>
                                    <div class="notif-content">
                                        <span class="block">
                                            Lionel comentó en Admin
                                        </span>
                                        <span class="time">Hace 12 minutos</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="{{asset('img/profile2.jpg')}}" alt="Img Profile" />
                                    </div>
                                    <div class="notif-content">
                                        <span class="block">
                                            Juan te envía mensajes
                                        </span>
                                        <span class="time">Hace 12 minutos</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="notif-icon notif-danger">
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="notif-content">
                                        <span class="block"> A Juan le gustó el administrador </span>
                                        <span class="time">Hace 17 minutos</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="see-all" href="javascript:void(0);">Ver todas las notificaciones<i
                                class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item topbar-icon dropdown hidden-caret">
                <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fas fa-layer-group"></i>
                </a>
                <div class="dropdown-menu quick-actions animated fadeIn">
                    <div class="quick-actions-header">
                        <span class="title mb-1">Acciones rápidas</span>
                        <span class="subtitle op-7">Atajos</span>
                    </div>
                    <div class="quick-actions-scroll scrollbar-outer">
                        <div class="quick-actions-items">
                            <div class="row m-0">
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <div class="avatar-item bg-danger rounded-circle">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <span class="text">Calendario</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <div class="avatar-item bg-warning rounded-circle">
                                            <i class="fas fa-map"></i>
                                        </div>
                                        <span class="text">Mapas</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <div class="avatar-item bg-info rounded-circle">
                                            <i class="fas fa-file-excel"></i>
                                        </div>
                                        <span class="text">Reportes</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <div class="avatar-item bg-success rounded-circle">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <span class="text">Emails</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <div class="avatar-item bg-primary rounded-circle">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                        </div>
                                        <span class="text">Factura</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <div class="avatar-item bg-secondary rounded-circle">
                                            <i class="fas fa-credit-card"></i>
                                        </div>
                                        <span class="text">Pagos</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item topbar-user dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="{{asset('img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle" />
                    </div>
                    <span class="profile-username">
                        <span class="op-7">Hola,</span>
                        <span class="fw-bold">Luis Cueva</span>
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg">
                                    <img src="{{asset('img/profile.jpg')}}" alt="image profile"
                                        class="avatar-img rounded" />
                                </div>
                                <div class="u-text">
                                    <h4>Luis Cueva</h4>
                                    <p class="text-muted">luis.cueva@gmail.com</p>
                                    <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">Ver
                                        Perfil</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Mi Perfil</a>
                            <a class="dropdown-item" href="#">Mi Saldo</a>
                            <a class="dropdown-item" href="#">Bandeja de entrada</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Configuración de Cuenta</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cerrar Sesión</a>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>