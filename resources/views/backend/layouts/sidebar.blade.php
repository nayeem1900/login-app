
@php
$prefix=Request::route()->getPrefix();
$route=Route::current()->getName();

@endphp

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}} ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage User
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="" class="nav-link  ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View User</p>
                    </a>
                </li>



            </ul>
        </li>


        <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Profile
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="{{route('profiles.password.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Change Your password</p>
                    </a>
                </li>

            </ul>
        </li>
        @isset(auth()->user()->role->permission['permission']['logo']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Logo
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('logos.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Logo</p>
                    </a>
                </li>

            </ul>
        </li>
        @endisset
        @isset(auth()->user()->role->permission['permission']['slider']['view'])

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Slider
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('sliders.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Slider</p>
                    </a>
                </li>

            </ul>

        </li>

        @endisset

        @isset(auth()->user()->role->permission['permission']['gallery']['view'])

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Gallery
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('gallerys.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Gallery</p>
                    </a>
                </li>



            </ul>
        </li>

        @endisset


        @isset(auth()->user()->role->permission['permission']['etender']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Etender
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('etenders.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Etender</p>
                    </a>
                </li>



            </ul>
        </li>
        @endisset
        @isset(auth()->user()->role->permission['permission']['carrier']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Carrier
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('carriers.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Carrier</p>
                    </a>
                </li>



            </ul>
        </li>
        @endisset

        @isset(auth()->user()->role->permission['permission']['role']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Role
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('role.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Role</p>
                    </a>
                </li>



            </ul>
        </li>
        @endisset

        @isset(auth()->user()->role->permission['permission']['permission']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Permission
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('permission.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Permission</p>
                    </a>
                </li>



            </ul>
        </li>
        @endisset

        @isset(auth()->user()->role->permission['permission']['subadmin']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Sub Admin Management
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('subadmin.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View subadmin</p>
                    </a>
                </li>


            </ul>
        </li>
        @endisset
        @isset(auth()->user()->role->permission['permission']['ibchkdept']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    IBCHK Dept
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('ibchk.dept.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Dept</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('ibchk.doctor.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Doctor</p>
                    </a>
                </li>

            </ul>
        </li>
        @endisset
        @isset(auth()->user()->role->permission['permission']['branch']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Branch
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('branch.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>B_Branch</p>
                    </a>
                </li>


            </ul>
        </li>
        @endisset
        @isset(auth()->user()->role->permission['permission']['dep']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Department
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('dep.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Department</p>
                    </a>
                </li>


            </ul>
        </li>
        @endisset
        @isset(auth()->user()->role->permission['permission']['doctor_reg']['view'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Assign Doctor
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('assign.doctor.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Assign Doctor</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('doctor.registration.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Assign Doctor1</p>
                    </a>
                </li>

            </ul>
        </li>
        @endisset



    </ul>
</nav>