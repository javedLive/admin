<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li>
          <a href="{{asset('/home')}}" class="active">
            <i class="lnr lnr-home">
            </i> 
            <span>Dashboard
            </span>
          </a>
        </li>
@can('list_school')        
        <li>
          <a href="#schools" data-toggle="collapse" class="collapsed">
            <i class="lnr lnr-code">
            </i> 
            <span>School
            </span> 
            <i class="icon-submenu lnr lnr-chevron-left">
            </i>
          </a>
          <div id="schools" class="collapse ">
            <ul class="nav">
              <li>
                <a href="{{asset('schools/create')}}" class="">Create School
                </a>
              </li>
              <li>
                <a href="{{asset('schools
                         ')}}" class="">School list
                </a>
              </li>
            </ul>
          </div>
        </li>
@endcan

@can('list_restaurant') 
        <li>
          <a href="#restaurants" data-toggle="collapse" class="collapsed">
            <i class="lnr lnr-code">
            </i> 
            <span>Restaurant
            </span> 
            <i class="icon-submenu lnr lnr-chevron-left">
            </i>
          </a>
          <div id="restaurants" class="collapse ">
            <ul class="nav">
              <li>
                <a href="{{asset('restaurants/create')}}" class="">Create Restaurant
                </a>
              </li>
              <li>
                <a href="{{asset('restaurants
                         ')}}" class="">Restaurant list
                </a>
              </li>
            </ul>
          </div>
        </li>
@endcan

@can('list_food')
          <li>
          <a href="#foods" data-toggle="collapse" class="collapsed">
            <i class="lnr lnr-code">
            </i> 
            <span>Food
            </span> 
            <i class="icon-submenu lnr lnr-chevron-left">
            </i>
          </a>
          <div id="foods" class="collapse ">
            <ul class="nav">
              <li>
                <a href="{{asset('foods/create')}}" class="">Create Food
                </a>
              </li>
              <li>
                <a href="{{asset('foods
                         ')}}" class="">Available Foods
                </a>
              </li>
            </ul>
          </div>
        </li>
@endcan
@can('permission_list')
        <li>
          <a href="#permissions" data-toggle="collapse" class="collapsed">
            <i class="lnr lnr-code">
            </i> 
            <span>Permission
            </span> 
            <i class="icon-submenu lnr lnr-chevron-left">
            </i>
          </a>
          <div id="permissions" class="collapse ">
            <ul class="nav">
              <li>
                <a href="{{asset('permissions')}}" class="">
                  Permissions
                </a>
              </li>
              <li>
                <a href="{{asset('assign-permission
                         ')}}" class="">
                  Assign Permissions
                </a>
              </li>
            </ul>
          </div>
        </li>
@endcan

@can('role_list')
        <li>
          <a href="#roles" data-toggle="collapse" class="collapsed">
            <i class="lnr lnr-code">
            </i> 
            <span>Roles
            </span> 
            <i class="icon-submenu lnr lnr-chevron-left">
            </i>
          </a>
          <div id="roles" class="collapse ">
            <ul class="nav">
              <li>
                <a href="{{asset('roles')}}" class="">
                  Roles
                </a>
              </li>
              <li>
                <a href="{{asset('assign-role
                         ')}}" class="">
                  Assign Role
                </a>
              </li>
            </ul>
          </div>
        </li>
@endcan
@can('user_list')
        <li>
          <a href="#users" data-toggle="collapse" class="collapsed">
            <i class="lnr lnr-code">
            </i> 
            <span>Users
            </span> 
            <i class="icon-submenu lnr lnr-chevron-left">
            </i>
          </a>
          <div id="users" class="collapse ">
            <ul class="nav">
              <li>
                <a href="{{asset('users')}}" class="">
                  Users
                </a>
              </li>
              <li>
                <a href="{{asset('users/create
                         ')}}" class="">
                  Create User
                </a>
              </li>
            </ul>
          </div>
        </li>
@endcan       
      </ul>
    </nav>
  </div>
</div>
<!-- END LEFT SIDEBAR -->
