<div class="sidebar" data-color="orange" data-background-color="black" data-image="{{ asset('img/sidebar-2.jpg') }}">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{Auth::user()->nome}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" data-toggle="collapse" href="#administrativo" role="button" aria-expanded="false" aria-controls="administrativo" href="#">
                    <i class="material-icons">dashboard</i>
                    <p>Administrativo</p>
                </a>
            </li>
            <li class="nav-item collapse" id="administrativo">
                <a class="nav-link" href="#">
                    <i class="material-icons">person</i>
                    <p>Receitas</p>
                </a>
            </li>
            <li class="nav-item collapse" id="administrativo">
                <a class="nav-link" href="{{ route('dashboard.administrativo.unidades.index') }}">
                    <i class="material-icons">person</i>
                    <p>Unidades</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./tables.html">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('dashboard.administrativo.receitas.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
          </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
        </ul>
    </div>
</div>