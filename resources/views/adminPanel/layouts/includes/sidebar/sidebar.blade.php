<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('website/admin/assets/img/sidebar-2.jpg') }}">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ isActive('home') }}">
          <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-solar-panel material-icons"></i>
            <p>Dashboard</p>
          </a>
        </li>
           <li class="nav-item {{ isActive('users') }}">
          <a class="nav-link" href="{{ url('admin/users') }}">
            <i class="fas fa-users"></i>
            <p>Users</p>
          </a>
        </li>
           <li class="nav-item {{ isActive('muslims') }}">
          <a class="nav-link" href="{{ route('admin.muslims') }}">
            <i class="fas fa-kaaba"></i>
            <p>Muslims</p>
          </a>
        </li>

        <li class="nav-item {{ isActive('cats') }}">
            <a class="nav-link" href="{{ route('admin.cat') }}">
                <i class="fas fa-clipboard"></i>
              <p>Cats</p>
            </a>
          </li>

        <li class="nav-item {{ isActive('tags') }}">
            <a class="nav-link" href="{{ route('admin.tags') }}">
                <i class="fas fa-tags"></i>
              <p>Tags</p>
            </a>
          </li>

          <li class="nav-item {{ isActive('pages') }}">
            <a class="nav-link" href="{{ route('admin.page') }}">
                <i class="fas fa-pager"></i>
              <p>Pages</p>
            </a>
          </li>

           <li class="nav-item {{ isActive('videos') }}">
            <a class="nav-link" href="{{ route('admin.video') }}">
                <i class="fas fa-video"></i>
              <p>Videos</p>
            </a>
          </li>
             <li class="nav-item {{ isActive('contact') }}">
            <a class="nav-link" href="{{ route('contact.index') }}">
                <i class="fas fa-phone"></i>
              <p>Contact Us</p>
            </a>
          </li>


        <!-- your sidebar here -->
      </ul>
    </div>
  </div>
