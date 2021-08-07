<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{-- Simple-Nav-Item --}}
        <li class="nav-item ">
            <a href="{{ url('admin-dashboard') }}" class="nav-link @if (Request::is('admin-dashboard')) active @endif">
                <i class="nav-icon fas fa-th"></i>
                <p>Dashboard</p>
            </a>
        </li>

        {{-- Nav-Item Blog --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fab fa-blogger"></i>
                <p> Blog <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('posts')}}" class="nav-link @if (Request::is('posts')) active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('posts/create')}}" class="nav-link @if (Request::is('posts/create')) active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create Post</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Contact Us --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fas fa-mail-bulk"></i>
                <p> Contact Us <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item FQA --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-question-circle"></i>
                <p> FQA  <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Landing --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Landing Page   <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Orders --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p> Orders <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Addresses--}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-address-card"></i>
                <p> Addresses <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Users--}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-users"></i>
                <p> Users <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Products --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tshirt"></i>
                <p> Products <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Sizes --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fab fa-product-hunt"></i>
                <p> Sizes <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Colors --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-palette"></i>
                <p> Colors <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Product Category --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-industry"></i>
                <p> Product Category  <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>

        {{-- Nav-Item Product Images --}}
        <li class="nav-item has-treeview ">
            {{--  --}}
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-images"></i>
                <p> Product Images <i class="right fas fa-angle-left"></i> </p>
            </a>
            {{--  --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
            {{--  --}}
        </li>
        
    </ul>
</nav>