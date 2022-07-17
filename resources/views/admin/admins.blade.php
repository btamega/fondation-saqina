<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>
    <link rel="shortcut icon" href="{{ asset("images/favicon.ico")}}">
    <!-- Custom fonts for this template-->
    <link href="{{asset("vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("css/admin/sb-admin-2.min.css")}}" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{URL::to('')}}">
                <div class="sidebar-brand-text mx-6">FONDATION SAQINA</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{URL::to('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de board</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Ecole SAQINA
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <span>Events</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Volumes:</h6>
                        <a class="collapse-item" href="{{URL::to('news')}}">Actualités</a>
                        <a class="collapse-item" href="{{URL::to('archives')}}">Archives</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Les leçons :</h6>
                        <a class="collapse-item" href="{{URL::to('/admin/hadith')}}">HADITH</a>
                        <a class="collapse-item" href="{{URL::to('/admin/chahada')}}">CHAHADA</a>
                        <a class="collapse-item" href="{{URL::to('/admin/salat')}}">SALAT</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/admin/invocations')}}">
                    <i class="fas fa-praying-hands"></i>
                    <span>INVOCATIONS</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/admin/fatwas')}}">
                    <i class="fas fa-star-and-crescent"></i>
                    <span>FATWAS</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/admin/sante')}}">
                    <i class="fas fa-medkit"></i>
                    <span>PASS SANTE</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/admin')}}">
                    <i class="fas fa-user-cog"></i>
                    <span>ADMINS</span></a>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">{{$nombreMessages}}</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Tous les messages
                                </h6>
                                @foreach($messages as $item)
                                <a class="dropdown-item d-flex align-items-center" href="{{URL::to('notification/'.$item->id_commentaire)}}">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">{{$item->created_at}}</div>
                                        <span class="font-weight-bold text-truncate">{{$item->Message}}</span>
                                    </div>
                                </a>
                                @endforeach
                                <a class="dropdown-item text-center small text-gray-500" href="{{URL::to('showAllMessages')}}">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">{{$nombreMessageNonLu}}</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Notifications
                                </h6>
                                @foreach($lastMessages as $item)
                                    <a class="dropdown-item d-flex align-items-center" href="{{URL::to('notification/'.$item->id_commentaire)}}">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="{{asset("images/dashboard/undraw_profile_1.svg")}}"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">{{$item->Message}}</div>
                                            <div class="small text-gray-500">{{$item->Nom}} . {{$item->created_at}}</div>
                                        </div>
                                    </a>
                                @endforeach
                                <a class="dropdown-item text-center small text-gray-500" href="{{URL::to('showAllMessages')}}">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$user->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset("images/dashboard/undraw_profile.svg")}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::to('logout')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            @if(Session::has('update'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('update')}}
                            </div>
                            @endif
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Les administrateurs du site</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Email</th>
                                                        <th>Retirer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($admins as $admin)
                                                    <tr>
                                                        <td>{{$admin->name}}</td>
                                                        <td>{{$admin->email}}</td>
                                                        <td>
                                                            <a style="width: 0.5rem; height: 1.5rem;" href="{{URL::to('admin/delete/'.$admin->id)}}" class="btn btn-danger btn-circle">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="col-8">
                                        @if(Session::has('deleted'))
                                        <div class="alert alert-danger" role="alert">
                                            {{Session::get('deleted')}}
                                        </div>
                                        @elseif(Session::has('notDeleted'))
                                        <div class="alert alert-danger" role="alert">
                                            {{Session::get('notDeleted')}}
                                        </div>
                                        @elseif(Session::has('passwordNotMatch'))
                                        <div class="alert alert-danger" role="alert">
                                            {{Session::get('passwordNotMatch')}}
                                        </div>
                                        @elseif(Session::has('emailExist'))
                                        <div class="alert alert-danger" role="alert">
                                            {{Session::get('emailExist')}}
                                        </div>
                                        @elseif(Session::has('adminAdded'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('adminAdded')}}
                                        </div>
                                        @endif
                                    </div>
                                    <h6 class="m-0 font-weight-bold text-primary">Ajouter un nouvel administrateur</h6>
                                </div>
                                <div class="card-body">
                                    <a href="#newUser" class="d-block card-header py-3" data-toggle="collapse"
                                        role="button" aria-expanded="true" aria-controls="newUser">
                                        <h6 class="m-0 font-weight-bold text-primary">Nouvel utilisateur</h6>
                                    </a>
                                    <div class="collapse show" id="newUser"> <br>
                                        <div class="container">
                                            <form class="user" action="/addAdmin" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" name="firstName" class="form-control form-control-user" id="exampleFirstName"
                                                            placeholder="Nom" required>
                                                    </div>
                                                    <div class="col-sm-6">                                    
                                                        <input type="text" name="lastName" class="form-control form-control-user" id="exampleFirstName"
                                                        placeholder="Prénom" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="email" name="email" class="form-control form-control-user" id="exampleFirstName"
                                                            placeholder="Email" required>
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="tel" name="phone" class="form-control form-control-user" id="exampleFirstName"
                                                            placeholder="Téléphone">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">                                    
                                                        <input type="password" name="password" class="form-control form-control-user" id="exampleFirstName"
                                                        placeholder="Mot de passe" required>
                                                    </div>
                                                    <div class="col-sm-6">                                    
                                                        <input type="password" name="confirmPassword" class="form-control form-control-user" id="exampleFirstName"
                                                        placeholder="Confirmez le mot de passe" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="reset" class="btn btn-google btn-user btn-block">Annuler</button>
                                                    </div>
                                                  </div>
                                            </form>
                                        </div>
                                    </div>
                                    <a href="#user" class="d-block card-header py-3" data-toggle="collapse"
                                        role="button" aria-expanded="true" aria-controls="user">
                                        <h6 class="m-0 font-weight-bold text-primary">Utilisateurs existants</h6>
                                    </a>
                                    <div class="collapse show" id="user">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Email</th>
                                                        <th>Ajouter</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                    <tr>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>
                                                            <a style="width: 0.5rem; height: 1.5rem;" href="{{URL::to('user/'.$user->id)}}" class="btn btn-info btn-circle">
                                                                <i class="fa fa-plus-circle"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span class="sp-copyright">© 2021. All Rights Reserved. Fondation SAQINA</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Se déconnecter ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Confirmez votre déconnexion en cliquant sur logout.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{URL::to('login')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset("vendor/jquery-easing/jquery.easing.min.js")}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset("js/admin/sb-admin-2.min.js")}}"></script>

</body>

</html>