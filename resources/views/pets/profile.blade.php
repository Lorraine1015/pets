<h1>Perfil</h1>
@if (Auth:: check())
    {{Auth:: user()->name}}
    <a href="{{ route('pets.logout') }}">
@else
    El usuario no tiene cuenta
    <ul>
        <li><a href="{{ route('users.register') }}">Registrarse aqui</a></li>
    </ul>
@endif