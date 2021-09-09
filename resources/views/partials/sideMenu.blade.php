<div class="side-menu">
    <h1>DASHBOARD</h1>
    <ul class="menu">
        <li>Empresas</li>
        <li><a href="{{ route('admin.companies.list') }}">Listar empresas</a></li>
        <li><a href="{{ route('admin.companies.add') }}">Adicionar empresa</a></li>
    </ul>
    <ul class="menu">
        <li>Funcionários</li>
        <li><a href="{{ route('admin.employees.list') }}">Listar funcionários</a></li>
        <li><a href="{{ route('admin.employees.add') }}">Adicionar funcionário</a></li>
    </ul>
    <div class="logout-container">
        <a href="{{ route('admin.logout') }}">Logout</a>
    </div>
</div>