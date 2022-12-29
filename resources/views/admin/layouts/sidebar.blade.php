        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('/') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Departments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                @if(isset(auth()->user()->role->permission['name']['department']['can-add']))
                                    <a class="nav-link" href="{{ route('departments.create') }}">Create</a>
                                @endif
                                @if(isset(auth()->user()->role->permission['name']['department']['can-list']))
                                    <a class="nav-link" href="{{ route('departments.index') }}">View</a>
                                @endif
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Role
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        @if(isset(auth()->user()->role->permission['name']['role']['can-list']))
                                            <a class="nav-link" href="{{ route('roles.index') }}">View Role</a>
                                        @endif
                                        @if(isset(auth()->user()->role->permission['name']['role']['can-add']))
                                            <a class="nav-link" href="{{ route('roles.create') }}">Create Role</a>
                                        @endif
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        User
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        @if(isset(auth()->user()->role->permission['name']['user']['can-list']))
                                            <a class="nav-link" href="{{ route('users.index') }}">View User</a>
                                        @endif
                                        @if(isset(auth()->user()->role->permission['name']['user']['can-add']))
                                            <a class="nav-link" href="{{ route('users.create') }}">Create User</a>
                                        @endif
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError1" aria-expanded="false" aria-controls="pagesCollapseError1">
                                        Permissions
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        @if(isset(auth()->user()->role->permission['name']['permission']['can-list']))
                                            <a class="nav-link" href="{{ route('permissions.index') }}">View Permissions</a>
                                        @endif
                                        @if(isset(auth()->user()->role->permission['name']['permission']['can-add']))
                                            <a class="nav-link" href="{{ route('permissions.create') }}">Create Permissions</a>
                                        @endif
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapsenotice" aria-expanded="false" aria-controls="pagesCollapsenotice">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Staff Notice
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapsenotice" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                @if(isset(auth()->user()->role->permission['name']['department']['can-add']))
                                    <a class="nav-link" href="{{ route('notices.create') }}">Create Notice</a>
                                @endif
                                @if(isset(auth()->user()->role->permission['name']['department']['can-list']))
                                    <a class="nav-link" href="{{ route('notices.index') }}">View Notice</a>
                                @endif
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#pagesCollapseLeave" aria-expanded="false" aria-controls="pagesCollapseLeave">
                                <div class="sb-nav-link-icon"><i class="fas fa-pencil-alt"></i></div>
                                Staff Leave
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseLeave" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('leaves.create') }}">Create Leave</a>
                                @if (isset(auth()->user()->role->permission['name']['leave']['can-list']))
                                    <a class="nav-link" href="{{ route('leaves.index') }}">Approve Leave</a>
                                @endif
                                </nav>
                            </div>

                            <a class="nav-link" href="{{ url('/mail') }}" style="font-size: 18px">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope" style="font-size: 16px"></i></div>
                                Mail
                            </a>

                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
