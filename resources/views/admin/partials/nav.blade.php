

<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="{{ setActiveRoute('dashboard') }}">
        <a href="{{ route('dashboard') }}">
            <i class="fa fa-home"></i> <span>Inicio</span>
        </a>
    </li>
    <li class="treeview {{ setActiveRoute('admin.posts.index') }}">
        <a href="#"><i class="fa fa-bars"></i> <span>Blog</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ setActiveRoute('admin.posts.index') }}">
                <a href="{{ route('admin.posts.index') }}">
                    <i class="fa fa-eye"> Ver todos los posts</i>
                </a>
            </li>
            <li>
                @if (request()->is('admin/posts/*'))
                    <a href="{{ route('admin.posts.index', '#create') }}"><i class="fa fa-pencil"> Crear un post</i></a>
                @else
                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil"> Crear un post</i></a>
                @endif
            </li>
        </ul>
    </li>

    <li class="treeview {{ setActiveRoute(['admin.users.index', 'admin.users.create']) }}">
        <a href="#"><i class="fa fa-users"></i> <span>Usuarios</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ setActiveRoute('admin.users.index') }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-eye"> Ver todos los usuarios</i>
                </a>
            </li>
            <li class="{{ setActiveRoute('admin.users.create') }}">
                <a href="{{ route('admin.users.create') }}"><i class="fa fa-pencil"> Crear un usuario</i></a>
            </li>
        </ul>
    </li>
</ul>