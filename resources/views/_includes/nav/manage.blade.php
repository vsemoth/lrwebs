<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
    </ul>

     <button class="dropdown is-aligned-right nav-item is-tab" >
      <p>{{ Auth::user()->name }}'s Administration</p>
        <ul class="dropdown-menu" style="overflow: visible;">

          <li><a href="{{route('users.index')}}">Manage Users</a></li>
          <li>
            <a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
            <ul>
              <li><a href="{{route('roles.index')}}">Roles</a></li>
              <li><a href="{{route('permissions.index')}}">Permissions</a></li>
            </ul>
          </li>
          <li class="seperator"></li>

        </ul>
      </button>

  </aside>
</div>