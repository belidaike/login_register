<li class="nav-item">
    <a href="{{ route('studentinformations.index') }}"
       class="nav-link {{ Request::is('studentinformations*') ? 'active' : '' }}">
        <p>Studentinformations</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


