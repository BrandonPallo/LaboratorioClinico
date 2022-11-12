<div id="sidebar-disable" class="sidebar-disable hidden"></div>

<div id="sidebar" class="sidebar-menu transform -translate-x-full ease-in">
    <div class="flex items-center justify-center mt-4">
        <div class="flex items-center">
            <!-- <span class="text-white text-2xl mx-2 font-semibold">{{ trans('panel.site_title') }}</span> -->
            <img src="https://www.seius.com.ec/wp-content/uploads/2020/04/SEIUS-S.A-L.COLOR-Fondo-Transparente.png">
        </div>
    </div>
    <nav class="mt-4">
        <a class="nav-link{{ request()->is('admin') ? ' active' : '' }}" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="mx-4">Home</span>
        </a>
        {{-- usuarios --}}
        @can('user_management_access')
            <div class="nav-dropdown">
                <a class="nav-link" href="#">
                    <i class="fa-fw fas fa-users"></i>
                    <span class="mx-4">{{ trans('cruds.userManagement.title') }}</span>
                    <i class="fa fa-caret-down ml-auto" aria-hidden="true"></i>
                </a>
                <div class="dropdown-items mb-1 hidden">
                    @can('permission_access')
                        <a class="nav-link{{ request()->is('admin/permissions*') ? ' active' : '' }}"
                            href="{{ route('admin.permissions.index') }}">
                            <i class="fa-fw fas fa-unlock-alt"></i>
                            <span class="mx-4">{{ trans('cruds.permission.title') }}</span>
                        </a>
                    @endcan
                    @can('role_access')
                        <a class="nav-link{{ request()->is('admin/roles*') ? ' active' : '' }}"
                            href="{{ route('admin.roles.index') }}">
                            <i class="fa-fw fas fa-briefcase"></i>
                            <span class="mx-4">{{ trans('cruds.role.title') }}</span>
                        </a>
                    @endcan
                    @can('user_access')
                        <a class="nav-link{{ request()->is('admin/users*') ? ' active' : '' }}"
                            href="{{ route('admin.users.index') }}">
                            <i class="fa-fw fas fa-user"></i>
                            <span class="mx-4">{{ trans('cruds.user.title') }}</span>
                        </a>
                    @endcan
                </div>
            </div>
        @endcan

        {{-- proyect --}}
        {{-- <div class="nav-dropdown">
            <a class="nav-link" href="#">
                <i class="fa-fw fas fa-project-diagram">

                </i>

                <span class="mx-4">{{ trans('cruds.createProject.title') }}</span>
                <i class="fa fa-caret-down ml-auto" aria-hidden="true"></i>
            </a>

            <div class="dropdown-items mb-1 hidden">
                @can('project_access')
                    <a class="nav-link{{ request()->is('admin/projects*') ? ' active' : '' }}"
                        href="{{ route('admin.projects.index') }}">
                        <i class="fa-fw fas fa-project-diagram">

                        </i>

                        <span class="mx-4">{{ trans('cruds.project.title') }}</span>
                    </a>
                @endcan --}}
        {{-- <a class="nav-link{{ request()->is('admin/form*') ? ' active' : '' }}"
                        href=" //">
                        <i class="fa-fw fas fa-download"></i>
                        <span class="mx-4">{{ trans('cruds.form.title') }}</span>
                        {{-- <i class="fa fa-caret-down ml-auto" aria-hidden="true"></i> --}}
        {{-- </a> --}}
        {{-- form --}}
        {{-- <div>
                        <a class="nav-link" href="#">
                            <i class="fa-fw fas fa-download"></i>
                            <span class="mx-4">{{ trans('cruds.form.title') }}</span>
                            <i class="fa fa-caret-down ml-auto" aria-hidden="true"></i>
                        </a>

                        <div class="dropdown-items mb-1 hidden">
                            <a class="nav-link{{ request()->is('admin/form*') ? ' active' : '' }}"
                                href=" //">
                                <i class="fa-fw fas fa-download"></i>
                                <span class="mx-4">{{ trans('cruds.form.title1') }}</span>
                            </a>

                        </div>
                    </div>
            </div>
        </div> --}}

        {{-- projects --}}
        @can('project_access')
            <a class="nav-link{{ request()->is('admin/projects*') ? ' active' : '' }}"
                href="{{ route('admin.projects.index') }}">
                <i class="fa-fw fas fa-project-diagram"></i>
                <span class="mx-4">{{ trans('cruds.project.title') }}</span>
            </a>
        @endcan


        {{-- form --}}

        <div class="nav-dropdown">
            <a class="nav-link" href="#">
                <i class="fa-fw fas fa-users"></i>
                <span class="mx-4">{{ trans('cruds.form.title') }}</span>
                <i class="fa fa-caret-down ml-auto" aria-hidden="true"></i>
            </a>

            <div class="dropdown-items mb-1 hidden">

                <a class="nav-link{{ request()->is('admin/forms*') ? ' active' : '' }}" href="//">
                    <i class="fa-fw fas fa-file-word-o"></i>
                    <span class="mx-4">{{ trans('cruds.form.title1') }}</span>
                </a>
                <a class="nav-link{{ request()->is('admin/forms*') ? ' active' : '' }}" href="//">
                    <i class="fa-fw fas fa-file-word-o"></i>
                    <span class="mx-4">{{ trans('cruds.form.title2') }}</span>
                </a>
                <a class="nav-link{{ request()->is('admin/forms*') ? ' active' : '' }}" href="//">
                    <i class="fa-fw fas fa-file-word-o">

                    </i>

                    <span class="mx-4">{{ trans('cruds.form.title3') }}</span>
                </a>

                <a class="nav-link{{ request()->is('admin/forms*') ? ' active' : '' }}" href="//">
                    <i class="fa-fw fas fa-file-word-o">

                    </i>

                    <span class="mx-4">{{ trans('cruds.form.title4') }}</span>
                </a>


            </div>
        </div>

        {{-- Services --}}
        
        @can('service_access')
            
            <a class="nav-link{{ request()->is('admin/services*') ? ' active' : '' }}"
                href="{{ route('admin.services.index') }}">
                <i class="fas fa-clipboard"></i>
                <span class="mx-4">{{ trans('cruds.service.title_singular2') }}</span>
            </a> 
            
        @endcan

        @can('folder_access')
            <a class="nav-link{{ request()->is('admin/folders*') ? ' active' : '' }}"
                href="{{ route('admin.folders.index') }}">
                <i class="fa-fw fas fa-folder"></i>
                <span class="mx-4">{{ trans('cruds.folder.title') }}</span>
            </a>
        @endcan

        @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            <a class="nav-link{{ request()->is('profile/password') ? ' active' : '' }}"
                href="{{ route('profile.password.edit') }}">
                <i class="fa-fw fas fa-key"></i>
                <span class="mx-4">{{ trans('global.change_password') }}</span>
            </a>
        @endif
        <a class="nav-link" href="#"
            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
            <i class="fa-fw fas fa-sign-out-alt"></i>
            <span class="mx-4">{{ trans('global.logout') }}</span>
        </a>
    </nav>
</div>
