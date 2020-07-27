<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      Echannel
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons" >dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">contacts</i>
          <p>{{ __('User Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse hide" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      {{-- doctime management --}}
      <li class="nav-item {{ ($activePage == 'doctime' || $activePage == 'addtime') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#expanddoctime" aria-expanded="true">
          {{-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> --}}
          <i class="material-icons">assignment_ind</i>
          <p>{{ __('Doctor Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse hide" id="expanddoctime">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'doctime' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('doctimes.index') }}">
                <i class="material-icons">assignment</i>
                <span class="sidebar-normal">{{ __('Doctor List') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'addtime' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('doctimes.create') }}">
                <i class="material-icons">alarm_add</i>
                <span class="sidebar-normal"> {{ __('Schedule TimeSlot') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      {{-- end doctime management --}}

      <li class="nav-item {{ ($activePage == 'presciadd' || $activePage == 'prescishow') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#expandmedhis" aria-expanded="true">
          <i class="material-icons">speaker_notes</i>
          <p>{{ __('Medical History') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse hide" id="expandmedhis">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'prescishow' ? ' active' : '' }}">
              <a class="nav-link" href="/prescriptions/{{auth()->user()->id}}">
                <i class="material-icons">favorite_border</i>
                <span class="sidebar-normal">{{ __('My Histry') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'presciadd' ? ' active' : '' }}">
              <a class="nav-link" href="/prescriptions/create">
                <i class="material-icons">addchart</i>
                <span class="sidebar-normal"> {{ __('Add Prescription') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      {{-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li> --}}
      {{-- <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li> --}}
      {{-- <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li> --}}
      {{-- <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li> --}}
      {{-- <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li> --}}
      {{-- <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('upgrade') }}">
          <i class="material-icons">medical_services</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>