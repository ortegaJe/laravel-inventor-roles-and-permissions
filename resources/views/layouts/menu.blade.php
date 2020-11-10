@canany(['edit_books','delete_books','view_books','create_books'])
<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{{ route('books.index') }}"><i class="glyphicon glyphicon-home"></i><span>Books</span></a>
</li>
@endcan

@canany(['edit_roles','delete_roles','view_roles','create_roles'])
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endcan
@canany(['edit_users','delete_users','view_users','create_users'])
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
@endcan
@canany(['edit_users','delete_users','view_users','create_users'])
<li class="treeview active menu-open" style="height: auto;">
    <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('campus*') ? 'active' : '' }}">
            <a href="{{url('campus')}}"><i class="fa fa-building-o"></i> Sedes
                <?php $campus_count = DB::table('campus')->count(); ?>
                <span class="pull-right-container">
                    <span class="label label-primary pull-right">{{ $campus_count ?? '0' }}</span>
                </span>
            </a>
        </li>
        <li>
            <a href="/docs/2.4/sidebar"><i class="fa fa-circle-o"></i> Sidebar</a>
        </li>
        <li>
            <a href="/docs/2.4/control-sidebar"><i class="fa fa-circle-o"></i> Control Sidebar</a>
        </li>
        <li>
            <a href="/docs/2.4/boxes"><i class="fa fa-circle-o"></i> Box</a>
        </li>
        <li>
            <a href="/docs/2.4/info-box"><i class="fa fa-circle-o"></i> Info Box</a>
        </li>
        <li>
            <a href="/docs/2.4/direct-chat"><i class="fa fa-circle-o"></i> Direct Chat</a>
        </li>
    </ul>
</li>
@endcan