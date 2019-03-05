<nav class="hk-nav hk-nav-dark">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                        <span class="feather-icon"><i data-feather="activity"></i>
                    </span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                    <!-- <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="dashboard1.html">CRM</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard2.html">Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard3.html">Statistics</a>
                                </li>
                            </ul>
                        </li>
                    </ul> -->
                </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/category')}}">
                            <span class="feather-icon"><i data-feather="list"></i></span>


                            <span class="nav-link-text">Category</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/customers')}}">
                            <span class="feather-icon"><i data-feather="user-plus"></i></span>

                                <span class="nav-link-text">Customers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/logs')}}">
                            <span class="feather-icon"><i data-feather="archive"></i></span>

                                <span class="nav-link-text">Logs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/product')}}">
                            <span class="feather-icon"><i data-feather="shopping-bag"></i></span>

                                <span class="nav-link-text">Products</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/user')}}">
                            <span class="feather-icon"><i data-feather="user-check"></i></span>

                                <span class="nav-link-text">Users</span>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                            
                            <span class="feather-icon"><i data-feather="codepen"></i></span>

                            <span class="nav-link-text">Languages</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/manufacturer')}}">
                            <span class="feather-icon"><i data-feather="bar-chart-2"></i></span>

                                <span class="nav-link-text">Manufacturer</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/user')}}">
                            <span class="feather-icon"><i data-feather="book-open"></i></span>

                                <span class="nav-link-text">News</span>
                            </a>
                        </li> -->

                        
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/product')}}">
                            <span class="feather-icon"><i data-feather="dollar-sign"></i></span>

                            <span class="nav-link-text">Tax/Location</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/coupons')}}">
                            <span class="feather-icon"><i data-feather="gift"></i></span>

                                <span class="nav-link-text">Coupons</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/reviews')}}">
                            <span class="feather-icon"><i data-feather="gift"></i></span>

                                <span class="nav-link-text">Reviews</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/notification')}}">
                            <span class="feather-icon"><i data-feather="bell"></i></span>

                            <span class="nav-link-text">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/order')}}">
                            <span class="feather-icon"><i data-feather="shopping-cart"></i></span>

                                <span class="nav-link-text">Orders</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/user')}}">
                                <span class="icon-people mr-3"></span>
                                <span class="nav-link-text">Shipping Methods</span>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/payment')}}">
                            <span class="icon-layers mr-3"></span>

                            <span class="nav-link-text">Payments</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/product')}}">
                            <span class="icon-menu mr-3"></span>
                                <span class="nav-link-text">Reports</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/agents')}}">
                            <span class="feather-icon"><i data-feather="award"></i></span>
                                <span class="nav-link-text">Manage Agents</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/websettings')}}">
                            <span class="feather-icon"><i data-feather="file-plus"></i></span>
                                <span class="nav-link-text">Settings(Website)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/user')}}">
                                <span class="icon-settings mr-3"></span>
                                <span class="nav-link-text">General Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('admin/manage')}}">
                                <span class="icon-people mr-3"></span>
                                <span class="nav-link-text">Manage Admin</span>
                            </a>
                        </li>
                        
                
            </ul>
            <!-- <hr class="nav-separator">
            <div class="nav-header">
                <span>User Interface</span>
                <span>UI</span>
            </div> -->
            
            <!-- <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
                        <span class="feather-icon"><i data-feather="layout"></i></span>
                        <span class="nav-link-text">Settings</span>
                    </a>
                    <ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('admin/category')}}">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('admin/product')}}">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('admin/user')}}">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons.html">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cards.html">Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="carousel.html">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="collapse.html">Collapse</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dropdowns.html">Dropdown</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="list-group.html">List Group</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="modal.html">Modal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="nav.html">Nav</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="navbar.html">Navbar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="nestable.html">Nestable</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pagination.html">Pagination</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="popovers.html">Popovers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="progress.html">Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tooltip.html">Tooltip</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                
            </ul> -->



{{--            <hr class="nav-separator">
            <div class="nav-header">
                <span>Getting Started</span>
                <span>GS</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="https://hencework.gitbook.io/pangong/" target="_blank">
                        <span class="feather-icon"><i data-feather="book"></i></span>
                        <span class="nav-link-text">Documentation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-with-badge" href="https://hencework.gitbook.io/pangong/changelog" target="_blank">
                        <span class="feather-icon"><i data-feather="eye"></i></span>
                        <span class="nav-link-text">Changelog</span>
                        <span class="badge badge-sm badge-success badge-pill">v 1.0</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://hencework.ticksy.com/" target="_blank">
                        <span class="feather-icon"><i data-feather="headphones"></i></span>
                        <span class="nav-link-text">Support</span>
                    </a>
                </li>
            </ul>--}}
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>