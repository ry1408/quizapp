  <!-- Navbar -->
  @include('admin.layouts.menu')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('design/adminLte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('design/adminLte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{admins()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item">
            <a href="{{aurl()}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                {{ trans('admin.main') }}
                <span class="right badge badge-danger d-none">New</span>
              </p>
            </a>
          </li> --}}
          <li class="nav-item has-treeview {{activate_menu('admin')[0]}}">
            <a href="#" class="nav-link {{activate_menu('admin')[1]}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                {{ trans('admin.main')}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="{{ activate_menu('admin')[2] }}">
              <li class="nav-item">
                <a href="{{aurl()}}" class="nav-link">
                  <i class="fa fa-chart-line nav-icon"></i>
                  <p>{{ trans('admin.main')}}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{activate_menu('admin')[0]}}">
            <a href="#" class="nav-link {{activate_menu('admin')[1]}}">
              <i class="nav-icon fa fa-users-cog"></i>
              <p>
                {{ trans('admin.adminPanel')}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="{{ activate_menu('admin')[2] }}">
              <li class="nav-item">
                <a href="{{aurl('admin')}}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>{{ trans('admin.admins')}}</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview" style="{{ activate_menu('manage_banner')[2] }}">
              <li class="nav-item">
                <a href="{{aurl('banner')}}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>{{ trans('Manage Banner')}}</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview" style="{{ activate_menu('manage_review')[2] }}">
              <li class="nav-item">
                <a href="{{aurl('review')}}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>{{ trans('Manage Review')}}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{activate_menu('student')[0]}}">
            <a href="#" class="nav-link {{activate_menu('student')[1]}}">
              <i class="nav-icon fa fa-users"></i>
              <p>
                {{ trans('admin.userPanel')}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="{{ activate_menu('student')[2] }}">
              <li class="nav-item">
                <a href="{{aurl('student')}}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>{{ trans('admin.userPanel')}}</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview {{activate_menu('board')[0]}}">
            <a href="#" class="nav-link {{activate_menu('board')[1]}}">
                <i class="nav-icon fa fa-user"></i>
                <p>
                    {{ trans('Board Panel')}}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="{{ activate_menu('board')[2] }}">
                <li class="nav-item">
                    <a href="{{aurl('board')}}" class="nav-link mb-0 {{lang() == 'ar' ? 'mr-3' : 'ml-3'}}">
                        <p>{{ trans('Board')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{aurl('class')}}" class="nav-link mb-0 {{lang() == 'ar' ? 'mr-3' : 'ml-3'}}">
                        <p>{{ trans('Class')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{aurl('subject')}}" class="nav-link mb-0 {{lang() == 'ar' ? 'mr-3' : 'ml-3'}}">
                        <p>{{ trans('Subject')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{aurl('chapter')}}" class="nav-link mb-0 {{lang() == 'ar' ? 'mr-3' : 'ml-3'}}">
                      <p>{{ trans('Chapter')}}</p>
                  </a>
              </li>
            </ul>
        </li>

            <li class="nav-item has-treeview {{activate_menu('exam')[0]}}">
                <a href="#" class="nav-link {{activate_menu('exam')[1]}}">
                    <i class="nav-icon far fa-file-alt"></i>
                    <p>
                        {{ trans('admin.examPanel')}}
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="{{ activate_menu('exam')[2] }}">
                    <li class="nav-item">
                        <a href="{{aurl('exam')}}" class="nav-link mb-0 {{lang() == 'ar' ? 'mr-3' : 'ml-3'}}">
                            <p>{{ trans('admin.exam')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{aurl('question/create')}}" class="nav-link mb-0 {{lang() == 'ar' ? 'mr-3' : 'ml-3'}}">
                            <p>{{ trans('admin.new_question')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{aurl('answer/create')}}" class="nav-link mb-0 {{lang() == 'ar' ? 'mr-3' : 'ml-3'}}">
                            <p>{{ trans('admin.new_answer')}}</p>
                        </a>
                    </li>
                </ul>
            </li>







            <li class="nav-item">
                <a href="{{aurl('answer')}}" class="nav-link mb-0">
                    <i class="nav-icon far fa-file-alt"></i>
                    <p>{{ trans('admin.answers')}}</p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
