@section('styles')

@endsection

<div class="sidebar" data-color="orange" data-background-color="black" data-image="{{ asset('img/sidebar-2.jpg') }}">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            MyCookPage
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="./tables.html">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">
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
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#administrativo" role="button" aria-expanded="false" aria-controls="administrativo" href="#">
                    <i class="material-icons">arrow_drop_down</i>
                    <p>Administrativo</p>
                </a>
            </li>
            <div class="collapse sub-item" id="administrativo">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard.administrativo.receita.index')}}">
                        <i class="material-icons">local_dining</i>
                        <p>Receitas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.administrativo.categorias.index') }}">
                        <i class="material-icons">kitchen</i>
                        <p>Categorias</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.administrativo.unidades.index') }}">
                        <i class="material-icons">fitness_center</i>
                        <p>Unidades</p>
                    </a>
                </li>
            </div>
        </ul>
    </div>
</div>