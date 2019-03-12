<!-- Sidebar -->
            <div class="site-overlay"></div>
            <div class="site-sidebar">
                <div class="custom-scroll custom-scroll-light">
                    <ul class="sidebar-menu">
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="{{url('home')}}" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-anchor"></i></span>
                                <span class="s-text">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('create_employee')}}" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-layout-tab"></i></span>
                                <span class="s-text">Employees </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('projects')}}" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-layout-tab"></i></span>
                                <span class="s-text">Projects</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('client')}}" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-layout-tab"></i></span>
                                <span class="s-text">Clients</span>
                            </a>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <!-- <span class="tag tag-danger">100</span> -->
                                <span class="s-icon"><i class="ti-package"></i></span>
                                <span class="s-text">Training & Career Development</span>
                            </a>
                            <ul>
                                <li><a href="{{ route('training_dev')}}">Training Metrics</a></li>
                                <li><a href="{{ route('training_types')}}">Training Types</a></li>
                                <li><a href="{{ route('trainings_register')}}">Training Register</a></li>
                                <li><a href="{{ route('training_recommendations')}}">Training Recommendations</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('support_maintenance')}}" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-layout-tab"></i></span>
                                <span class="s-text">Support</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ ('/compliance_policy/'.Session::get('comp_or_bra_id').'/'.Session::get('polID')) }}" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-palette"></i></span>
                                <span class="s-text">Policy & Compliance</span>
                            </a>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <!-- <span class="tag tag-danger">100</span> -->
                                <span class="s-icon"><i class="ti-package"></i></span>
                                <span class="s-text">Asset Management</span>
                            </a>
                            <ul>
                                <li><a href="{{ ('/asset_man/'.Session::get('comp_or_bra_id')) }}">Asset Metrics</a></li>
                                <li><a href="{{ ('/asset_types/'.Session::get('comp_or_bra_id')) }}">Asset Types</a></li>
                                <li><a href="{{ ('/assets_register/'.Session::get('comp_or_bra_id')) }}">Asset Register</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <!-- <span class="tag tag-danger">100</span> -->
                                <span class="s-icon"><i class="ti-package"></i></span>
                                <span class="s-text">Payroll</span>
                            </a>
                            <ul>
                                <li><a href="{{ route('employee_fin_data')}}">Employee Data</a></li>
                                <li><a href="{{ route('payslips')}}">Payslips</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-paint-bucket"></i></span>
                                <span class="s-text">Attendance</span>
                            </a>
                            <ul>
                                <li><a href="{{ route('attendance_register')}}">Attendance Register</a></li>
                                <li><a href="{{ route('attendance_settings')}}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-paint-bucket"></i></span>
                                <span class="s-text">Marketing Campaigns</span>
                            </a>
                            <ul>
                                <li><a href="{{ route('marketing_campaign')}}">Campaign Metrics</a></li>
                                <li><a href="{{ route('campaigns')}}">All Campaigns</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('email_manager')}}" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-layout-tab"></i></span>
                                <span class="s-text">Email</span>
                            </a>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-menu-alt"></i></span>
                                <span class="s-text">Tables</span>
                            </a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                <li><a href="tables-editable.html">Editable Tables</a></li>
                                <li><a href="tables-jsgrid.html">jsGrid Tables</a></li>
                                <li><a href="tables-responsive.html">Responsive Tables</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="tag tag-success">3</span>
                                <span class="s-icon"><i class="ti-gallery"></i></span>
                                <span class="s-text">Pages</span>
                            </a>
                            <ul>
                                <li><a href="pages-blank.html">Blank</a></li>
                                <li><a href="pages-contactform.html">Contact Form</a></li>
                                <li><a href="pages-403.html">Error 403</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                                <li><a href="pages-faq.html">FAQ</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-profile.html">Profile</a></li>
                                <li><a href="pages-reset-password.html">Reset Password</a></li>
                                <li><a href="pages-sign-in.html">Sign In</a></li>
                                <li><a href="pages-sign-in2.html">Sign In 2</a></li>
                                <li><a href="pages-sign-up.html">Sign Up</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-view-grid"></i></span>
                                <span class="s-text">Apps</span>
                            </a>
                            <ul>
                                <li><a href="apps-chat.html">Chat</a></li>
                                <li><a href="apps-contacts.html">Contacts</a></li>
                                <li><a href="apps-inbox.html">Inbox</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-star"></i></span>
                                <span class="s-text">Icons</span>
                            </a>
                            <ul>
                                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                <li><a href="icons-ionicons.html">Ionicons</a></li>
                                <li><a href="icons-material.html">Material Design</a></li>
                                <li><a href="icons-pe7.html">Pe7 Icons</a></li>
                                <li><a href="icons-themify.html">Themify Icons</a></li>
                                <li><a href="icons-typicons.html">Typicons</a></li>
                                <li><a href="icons-weather.html">Weather Icons</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-settings"></i></span>
                                <span class="s-text">Settings</span>
                            </a>
                            <ul>
                                <li><a href="{{url('Company_setting')}}">Company settings</a></li>
                                <li><a href="{{url('Department')}}">Department</a></li>
                                <li><a href="{{url('Department')}}">Department</a></li>
                                <li><a href="utilities-color.html">System settings</a></li>
                                <li><a href="utilities-other.html">Other utilities</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">More</li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-location-arrow"></i></span>
                                <span class="s-text">Extra</span>
                            </a>
                            <ul>
                                <li><a href="extra-animations.html">Animations</a></li>
                                <li><a href="extra-comments.html">Comments</a></li>
                                <li><a href="extra-crop.html">Image Crop</a></li>
                                <li><a href="extra-lightbox.html">Lightbox</a></li>
                                <li><a href="extra-loading-progress.html">Loading Progress</a></li>
                                <li><a href="extra-nestable.html">Nestable</a></li>
                                <li><a href="extra-prices.html">Prices</a></li>
                                <li><a href="extra-scrollbar.html">Scroll Bar</a></li>
                                <li><a href="extra-search.html">Search</a></li>
                                <li><a href="extra-timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-new-window"></i></span>
                                <span class="s-text">Frontend</span>
                            </a>
                            <ul>
                                <li><a href="frontend.html">Frontend 1</a></li>
                                <li><a href="frontend2.html">Frontend 2</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="tag tag-info">6</span>
                                <span class="s-icon"><i class="ti-bar-chart-alt"></i></span>
                                <span class="s-text">Charts</span>
                            </a>
                            <ul>
                                <li><a href="charts-chartjs.html">Chart.js</a></li>
                                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                <li><a href="charts-easy.html">Easy Pie Chart</a></li>
                                <li><a href="charts-flot.html">Flot Chart</a></li>
                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                <li><a href="charts-peity.html">Peity Chart</a></li>
                                <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-email"></i></span>
                                <span class="s-text">Email Templates</span>
                            </a>
                            <ul>
                                <li><a href="email-alert.html">Alert</a></li>
                                <li><a href="email-basic.html">Basic</a></li>
                                <li><a href="email-ecommerce.html">Ecommerce</a></li>
                            </ul>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-location-pin"></i></span>
                                <span class="s-text">Maps</span>
                            </a>
                            <ul>
                                <li><a href="maps-google.html">Google Map</a></li>
                                <li><a href="maps-vector.html">Vector Map</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-calendar"></i></span>
                                <span class="s-text">Calendar</span>
                            </a>
                        </li>
                        <li class="with-sub compact-hide">
                            <a href="javascript: void(0);" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-menu"></i></span>
                                <span class="s-text">Menu Levels</span>
                            </a>
                            <ul>
                                <li class="with-sub">
                                    <a href="javascript: void(0);">
                                        <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                        <span class="s-text">Level 1</span>
                                    </a>
                                    <ul>
                                        <li class="with-sub">
                                            <a href="javascript: void(0);">
                                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                                <span class="s-text">Level 1.2</span>
                                            </a>
                                            <ul>
                                                <li class="with-sub">
                                                    <a href="javascript: void(0);">
                                                        <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                                        <span class="s-text">Level 1.2.3</span>
                                                    </a>
                                                    <ul>
                                                        <li><a href="javascript: void(0);">Level 1.2.3.4</a></li>
                                                        <li><a href="javascript: void(0);">Level 1.2.3.4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript: void(0);">Level 1.2.3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript: void(0);">Level 1.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript: void(0);">Level 1</a></li>
                            </ul>
                        </li>
                        <li class="menu-title compact-hide">System usage</li>
                        <li class="compact-hide">
                            <div class="progress-widget progress-widget-light">
                                <div class="mb-0-5">
                                    SSD
                                    <span class="float-xs-right">5 GB</span>
                                </div>
                                <progress class="progress progress-rounded progress-success progress-sm" value="60" max="100">100%</progress>
                                <div class="mb-0-5">
                                    CPU
                                    <span class="float-xs-right">80%</span>
                                </div>
                                <progress class="progress progress-rounded progress-danger progress-sm mb-0-5" value="80" max="100">100%</progress>
                            </div>
                        </li>
                        <li class="menu-title compact-hide">Tags</li>
                        <li class="compact-hide">
                            <a href="javascript: void(0);" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="fa fa-circle-o text-danger"></i></span>
                                <span class="s-text">Ideas</span>
                            </a>
                        </li>
                        <li class="compact-hide">
                            <a href="javascript: void(0);" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="fa fa-circle-o text-warning"></i></span>
                                <span class="s-text">Projects</span>
                            </a>
                        </li>
                        <li class="compact-hide">
                            <a href="documentation.html" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="fa fa-circle-o text-primary"></i></span>
                                <span class="s-text">Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sidebar second -->
            <div class="site-sidebar-second custom-scroll custom-scroll-dark">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">Todo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab">Settings</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-1" role="tabpanel">
                        <div class="sidebar-chat animated fadeIn">
                            <div class="sidebar-group">
                                <h6>Favorites</h6>
                                <a class="text-black" href="#">
                                    <span class="sc-status bg-success"></span>
                                    <span class="sc-name">John Doe</span>
                                    <span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
                                </a>
                                <a class="text-black" href="#">
                                    <span class="sc-status bg-success"></span>
                                    <span class="sc-name">Vance Osborn</span>
                                </a>
                                <a class="text-black" href="#">
                                    <span class="sc-status bg-danger"></span>
                                    <span class="sc-name">Wolfe Stevie</span>
                                    <span class="tag tag-primary">7</span>
                                </a>
                                <a class="text-black" href="#">
                                    <span class="sc-status bg-warning"></span>
                                    <span class="sc-name">Jonathan Mel</span>
                                </a>
                                <a class="text-black" href="#">
                                    <span class="sc-status bg-secondary"></span>
                                    <span class="sc-name">Carleton Josiah</span>
                                </a>
                            </div>
                            <div class="sidebar-group">
                                <h6>Work</h6>
                                <a class="text-black" href="#">
                                    <span class="sc-status bg-secondary"></span>
                                    <span class="sc-name">Larry Hal</span>
                                </a>
                                <a class="text-black" href="#">
                                    <span class="sc-status bg-success"></span>
                                    <span class="sc-name">Ron Carran</span>
                                    <span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
                                </a>
                            </div>
                            <div class="sidebar-group">
                                <h6>Social</h6>
                                <a class="text-black" href="#">
                                    <span class="sc-status bg-success"></span>
                                    <span class="sc-name">Lucius Skyler</span>
                                    <span class="tag tag-primary">3</span>
                                </a>
                                <a class="text-black" href="#">
                                    <span class="sc-status bg-danger"></span>
                                    <span class="sc-name">Landon Graham</span>
                                </a>
                            </div>
                        </div>
                        <div class="sidebar-chat-window animated fadeIn">
                            <div class="scw-header clearfix">
                                <a class="text-grey float-xs-left" href="#"><i class="ti-angle-left"></i> Back</a>
                                <div class="float-xs-right">
                                    <strong>Jonathan Mel</strong>
                                    <div class="avatar box-32">
                                        <img src="img/avatars/5.jpg" alt="">
                                        <span class="status bg-success top right"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="scw-item">
                                <span>Hello!</span>
                            </div>
                            <div class="scw-item self">
                                <span>Meeting at 16:00 in the conference room. Remember?</span>
                            </div>
                            <div class="scw-item">
                                <span>No problem. Thank's for reminder!</span>
                            </div>
                            <div class="scw-item self">
                                <span>Prepare to be amazed.</span>
                            </div>
                            <div class="scw-item">
                                <span>Good. Can't wait!</span>
                            </div>
                            <div class="scw-form">
                                <form>
                                    <input class="form-control" type="text" placeholder="Type...">
                                    <button class="btn btn-secondary" type="button"><i class="ti-angle-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2" role="tabpanel">
                        <div class="sidebar-activity animated fadeIn">
                            <div class="notifications">
                                <div class="n-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar box-48">
                                                <img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
                                                <span class="n-icon bg-danger"><i class="ti-pin-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="n-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">uploaded <a class="text-black" href="#">monthly report</a></div>
                                            <div class="text-muted font-90">12 minutes ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="n-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar box-48">
                                                <img class="b-a-radius-circle" src="img/avatars/3.jpg" alt="">
                                                <span class="n-icon bg-success"><i class="ti-comment"></i></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="n-text"><a class="text-black" href="#">Vance Osborn</a> <span class="text-muted">commented </span> <a class="text-black" href="#">Project</a></div>
                                            <div class="n-comment my-0-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
                                            <div class="text-muted font-90">3 hours ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="n-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar box-48">
                                                <img class="b-a-radius-circle" src="img/avatars/2.jpg" alt="">
                                                <span class="n-icon bg-danger"><i class="ti-email"></i></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="n-text"><a class="text-black" href="#">Ron Carran</a> <span class="text-muted">send you files</span></div>
                                            <div class="row row-sm my-0-5">
                                                <div class="col-xs-4">
                                                    <img class="img-fluid" src="img/photos-1/1.jpg" alt="">
                                                </div>
                                                <div class="col-xs-4">
                                                    <img class="img-fluid" src="img/photos-1/2.jpg" alt="">
                                                </div>
                                                <div class="col-xs-4">
                                                    <img class="img-fluid" src="img/photos-1/3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="text-muted font-90">30 minutes ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="n-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar box-48">
                                                <img class="b-a-radius-circle" src="img/avatars/4.jpg" alt="">
                                                <span class="n-icon bg-primary"><i class="ti-plus"></i></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="n-text"><a class="text-black" href="#">Larry Hal</a> <span class="text-muted">invited you to </span><a class="text-black" href="#">Project</a></div>
                                            <div class="text-muted font-90">10:58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3" role="tabpanel">
                        <div class="sidebar-todo animated fadeIn">
                            <div class="sidebar-group">
                                <h6>Important</h6>
                                <div class="st-item">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Mock up</span>
                                    </label>
                                </div>
                                <div class="st-item">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Prototype iPhone</span>
                                    </label>
                                </div>
                                <div class="st-item">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Build final version</span>
                                    </label>
                                </div>
                                <div class="st-item">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Approval docs</span>
                                    </label>
                                </div>
                            </div>
                            <div class="sidebar-group">
                                <h6>Secondary</h6>
                                <div class="st-item">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Website redesign</span>
                                    </label>
                                </div>
                                <div class="st-item">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Skype call</span>
                                    </label>
                                </div>
                                <div class="st-item">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Blog post</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4" role="tabpanel">
                        <div class="sidebar-settings animated fadeIn">
                            <div class="sidebar-group">
                                <h6>Main</h6>
                                <div class="ss-item">
                                    <div class="text-truncate">Anyone can register</div>
                                    <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                                </div>
                                <div class="ss-item">
                                    <div class="text-truncate">Allow commenting</div>
                                    <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
                                </div>
                                <div class="ss-item">
                                    <div class="text-truncate">Allow deleting</div>
                                    <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
                                </div>
                            </div>
                            <div class="sidebar-group">
                                <h6>Notificatiоns</h6>
                                <div class="ss-item">
                                    <div class="text-truncate">Commits</div>
                                    <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
                                </div>
                                <div class="ss-item">
                                    <div class="text-truncate">Messages</div>
                                    <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                                </div>
                            </div>
                            <div class="sidebar-group">
                                <h6>Security</h6>
                                <div class="ss-item">
                                    <div class="text-truncate">Daily backup</div>
                                    <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                                </div>
                                <div class="ss-item">
                                    <div class="text-truncate">API Access</div>
                                    <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
