<ul id="slide-out" class="sidenav" >
    <li>
        <div class="user-view">
            <div class="background"></div>
            <a href="#"><img class="circle" src="/assets/img/user.jpg"></a>
            <a href="#"><span class="white-text name">{{auth()->user()->firstName .' '. auth()->user()->lastName}}</span></a>
            <a href="#"><span class="white-text email">{{auth()->user()->email}}</span></a>
        </div>
    </li>

    <li><a href="{{route('admin.dashboard')}}"><i class="material-icons">dashboard</i>Painel de Controle</a></li>
    {{-- <li><a href="{{route('admin.fretes.index')}}"><i class="material-icons">local_shipping</i>Fretes</a></li> --}}
    <li><a href="{{route('admin.usuarios.index')}}"><i class="material-icons">group</i>Usuários</a></li>
    <li><a href="{{route('admin.caminhoneiros.index')}}"><i class="material-icons">person_apron</i>Caminhoneiros</a></li>
    <li><a href="{{route('admin.empresas.index')}}"><i class="material-icons">storefront</i>Empresas</a></li>
</ul>
