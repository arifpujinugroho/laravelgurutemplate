<div class="">
    <div class="main-menu-header">
        <img class="img-40 img-radius" src="{{url('assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
        <div class="user-details">
            <span>John Doe</span>
            <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
        </div>
    </div>

    <div class="main-menu-content">
        <ul>
            <li class="more-details">
                <a href="{{url('user-profile')}}"><i class="ti-user"></i>View Profile</a>
                <a href="#!"><i class="ti-settings"></i>Settings</a>
                <a href="{{url('auth-normal-sign-in')}}"><i class="ti-layout-sidebar-left"></i>Logout</a>
            </li>
        </ul>
    </div>
</div>
<div class="pcoded-search">
    <span class="searchbar-toggle">  </span>
    <div class="pcoded-search-box ">
        <input type="text" placeholder="Search">
        <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
    </div>
</div>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu {{ (Request::is('dashboard/*')) ? 'active' : '' }} pcoded-trigger">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="{{ (Request::path() == 'dashboard/default') ? 'active' : '' }}">
                <a href="{{url('dashboard/default')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.default">Default</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ (Request::path() == 'dashboard/ecommerce') ? 'active' : '' }}">
                <a href="{{url('dashboard/ecommerce')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Ecommerce</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ (Request::path() == 'dashboard/crm') ? 'active' : '' }}">
                <a href="{{url('dashboard/crm')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.crm">CRM</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ (Request::path() == 'dashboard/analytics') ? 'active' : '' }}">
                <a href="{{url('dashboard/analytics')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Analytics</span>
                    <span class="pcoded-badge label label-info ">NEW</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ (Request::path() == 'dashboard/project') ? 'active' : '' }}">
                <a href="{{url('dashboard/project')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.project">Project</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu {{ (Request::is('pagelayout/*')) ? 'active' : '' }}">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
            <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Page layouts</span>
            <span class="pcoded-badge label label-warning">NEW</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">

            <li class=" pcoded-hasmenu {{ (Request::is('pagelayout/vertical/*')) ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                    <span class="pcoded-mtext">Vertical</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{url('menu-static')}}">
                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.static-layout">Static Layout</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('menu-header-fixed')}}">
                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.header-fixed">Header Fixed</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('menu-compact')}}">
                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.compact">Compact</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('menu-sidebar')}}">
                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.sidebar-fixed">Sidebar Fixed</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class=" pcoded-hasmenu {{ (Request::is('pagelayout/horizontal/*')) ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.main">Horizontal</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{url('menu-horizontal-static')}}" target="_blank">
                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.static-layout">Static Layout</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('menu-horizontal-fixed')}}" target="_blank">
                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.fixed-layout">Fixed layout</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('menu-horizontal-icon')}}" target="_blank">
                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                            <span class="pcoded-mtext"  data-i18n="nav.page_layout.horizontal.static-with-icon">Static With Icon</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('menu-horizontal-icon-fixed')}}" target="_blank">
                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.fixed-with-icon">Fixed With Icon</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" ">
                <a href="{{url('menu-bottom')}}">
                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.bottom-menu">Bottom Menu</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('box-layout')}}" target="_blank">
                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Box Layout</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('menu-rtl')}}" target="_blank">
                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.rtl">RTL</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
    </li>
    <li class="">
        <a href="{{url('navbar-light')}}">
            <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
            <span class="pcoded-mtext" data-i18n="nav.navigate.main">Navigation</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class="pcoded-hasmenu {{ (Request::is('widget/*')) ? 'active' : '' }}">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-view-grid"></i><b>W</b></span>
            <span class="pcoded-mtext"  data-i18n="nav.widget.main">Widget</span>
            <span class="pcoded-badge label label-danger">100+</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('widget-statistic')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.navigate.navbar">Statistic</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('widget-data')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.navigate.navbar-inverse">Data</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('widget-chart')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.navigate.navbar-with-elements">Chart Widget</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('widget-chart-advance')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.navigate.navbar-with-elements">Advance Widgets</span>
                    <span class="pcoded-badge label label-info">25+</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element">UI Element</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Basic Components</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('alert')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Alert</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('breadcrumb')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('button')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.button">Button</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('box-shadow')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.box-shadow">Box-Shadow</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('accordion')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.collapse–accordion">Accordion</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('generic-class')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.generic-class">Generic Class</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('tabs')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.tabs">Tabs</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('color')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.color">Color</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('label-badge')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext">Label Badge</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('progress-bar')}}" data-i18n="nav.basic-components.progress-bar">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.label-badge">Progress Bar</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('preloader')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.pre-loader">Pre-Loader</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('list')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.list">List</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('tooltip')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.tooltip-popover">Tooltip And Popover</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('typography')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.typography">Typography</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('other')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.other">Other</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-crown"></i><b>AC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.advance-components.main">Advance Components</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('draggable')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.draggable">Draggable</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('bs-grid')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.grid-stack">Grid Stack</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('light-box')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.light-box">Light Box</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('modal')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.modal">Modal</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class=" ">
                <a href="{{url('notification')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.notifications">Notifications</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('notify')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.advance-components.pnotify">PNOTIFY</span>
                    <span class="pcoded-badge label label-info">NEW</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('rating')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.advance-components.rating">Rating</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('range-slider')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.advance-components.range-slider">Range Slider</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('slider')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.slider">Slider</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('syntax-highlighter')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.advance-components.syntax-highlighter">Syntax Highlighter</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('tour')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.tour">Tour</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('treeview')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.tree-view">Tree View</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('nestable')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.nestable">Nestable</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('toolbar')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.toolbar">Toolbar</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('x-editable')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.x-editable">X-Editable</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-gift"></i><b>EC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.extra-components.main">Extra Components</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('session-timeout')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.extra-components.session-timeout">Session Timeout</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('session-idle-timeout')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.extra-components.session-idle-timeout">Session Idle Timeout</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('offline')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.extra-components.offline">Offline</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
    </li>
    <li class=" ">
        <a href="{{url('animation')}}">
            <span class="pcoded-micon"><i class="ti-reload rotate-refresh"></i><b>A</b></span>
            <span class="pcoded-mtext" data-i18n="nav.animations.main">Animations</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class=" ">
        <a href="{{url('sticky')}}">
            <span class="pcoded-micon"><i class="ti-layers-alt"></i><b>S</b></span>
            <span class="pcoded-mtext" data-i18n="nav.sticky-notes.main">Sticky Notes</span>
            <span class="pcoded-badge label label-danger">HOT</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-star"></i><b>I</b></span>
            <span class="pcoded-mtext" data-i18n="nav.icons.main">Icons</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('icon-font-awesome')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.font-awesome">Font Awesome</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('icon-themify')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.themify">Themify</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('icon-simple-line')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.simple-line-icon">Simple Line Icon</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('icon-ion')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.ion-icon">Ion Icon</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('icon-material-design')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.material-design">Material Design</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('icon-icofonts')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.ico-fonts">Ico Fonts</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('icon-weather')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.weather-icon">Weather Icon</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('icon-typicons')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.typicons">Typicons</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('icon-flags')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.flags">Flags</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Forms</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Form Components</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('form-elements-component')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.form-components">Form Components</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('form-elements-add-on')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.form-elements-add-on">Form-Elements-Add-On</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('form-elements-advance')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.form-components.form-elements-advance">Form-Elements-Advance</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('form-validation')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.form-validation">Form Validation</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
    </li>
    <li class=" ">
        <a href="{{url('form-picker')}}">
            <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b>FP</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-pickers.main">Form Picker</span>
            <span class="pcoded-badge label label-warning">NEW</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>

    <li class=" ">
        <a href="{{url('form-select')}}">
            <span class="pcoded-micon"><i class="ti-shortcode"></i><b>FS</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-select.main">Form Select</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class=" ">
        <a href="{{url('form-masking')}}">
            <span class="pcoded-micon"><i class="ti-write"></i><b>FM</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-masking.main">Form Masking</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class=" ">
        <a href="{{url('form-wizard')}}">
            <span class="pcoded-micon"><i class="ti-archive"></i><b>F</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-wizard.main">Form Wizard</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-receipt"></i><b>R</b></span>
            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.main">Ready To Use</span>
            <span class="pcoded-badge label label-danger">HOT</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('ready-cloned-elements-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.cloned-elements-form">Cloned Elements Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-currency-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.currency-form">Currency Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-form-booking')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.booking-form">Booking Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-form-booking-multi-steps')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.booking-multi-steps-form">Booking Multi Steps Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-form-comment')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.comment-form">Comment Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-form-contact')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.contact-form">Contact Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-job-application-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.ready-to-use.job-application-form">Job Application Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-js-addition-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.jS-addition-form">JS Addition Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-login-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.login-form">Login Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-popup-modal-form')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.popup-modal-form">Popup Modal Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-registration-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.registration-form">Registration Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-review-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.review-form">Review Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-subscribe-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.subscribe-form">Subscribe Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-suggestion-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.suggestion-form">Suggestion Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('ready-tabs-form')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.tabs-form">Tabs Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.tables">Tables</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
            <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.main">Bootstrap Table</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('bs-basic-table')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.basic-table">Basic Table</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('bs-table-sizing')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.sizing-table">Sizing Table</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('bs-table-border')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.border-table">Border Table</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('bs-table-styling')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.styling-table">Styling Table</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-widgetized"></i><b>DT</b></span>
            <span class="pcoded-mtext" data-i18n="nav.data-table.main">Data Table</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('dt-basic')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table.basic-initialization">Basic Initialization</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-advance')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table.advance-initialization">Advance Initialization</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-styling')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table.styling">Styling</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-api')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table.api">API</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-ajax')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table.ajax">Ajax</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-server-side')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table.server-side">Server Side</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-plugin')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table.plug-in">Plug-In</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-data-sources')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table.data-sources">Data Sources</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-loop"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.main">Data Table Extensions</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{url('dt-ext-autofill')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.autofill">AutoFill</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.main">Button</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{url('dt-ext-basic-buttons')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.basic-button">Basic Button</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{url('dt-ext-buttons-html-5-data-export')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button')}}-data-export">Html-5 Data Export</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class=" ">
                <a href="{{url('dt-ext-col-reorder')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.col-reorder">Col Reorder</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-ext-fixed-columns')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.fixed-columns">Fixed Columns</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-ext-fixed-header')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.fixed-header">Fixed Header</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-ext-key-table')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.key-table">Key Table</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-ext-responsive')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.responsive">Responsive</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-ext-row-reorder')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.row-recorder">Row Reorder</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-ext-scroller')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.data-table-extensions.scroller">Scroller</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="{{url('dt-ext-select')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.select-tbl">Select Table</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class=" ">
        <a href="{{url('foo-table')}}">
            <span class="pcoded-micon"><i class="ti-view-list-alt"></i><b>F</b></span>
            <span class="pcoded-mtext" data-i18n="nav.foo-table.main">FooTable</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-view-list"></i><b>HT</b></span>
            <span class="pcoded-mtext" data-i18n="nav.handson-table.main">Handson Table</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('handson-appearance')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.handson-table.appearance">Appearance</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('handson-data-operation')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.handson-table.data-operation">Data Operation</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('handson-rows-cols')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.handson-table.rows-columns">Rows Columns</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('handson-columns-only')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.handson-table.columns-Only">Columns Only</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('handson-cell-features')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.handson-table.cell-features">Cell Features</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('handson-cell-types')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.handson-table.cell-types">Cell Types</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('handson-integrations')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.handson-table.integrations">Integrations</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('handson-rows-only')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.handson-table.rows-Only">Rows Only</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('handson-utilities')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.handson-table.utilities">Utilities</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="{{url('editable-table')}}">
            <span class="pcoded-micon"><i class="ti-write"></i><b>E</b></span>
            <span class="pcoded-mtext" data-i18n="nav.editable-table.main">Editable Table</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.chart-and-maps">Chart And Maps</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>C</b></span>
            <span class="pcoded-mtext" data-i18n="nav.charts.main">Charts</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('chart-google')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.google-chart">Google Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-echart')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.echarts">Echarts</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-chartjs')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.chartjs">ChartJs</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-list')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.list-chart">List Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-float')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.float-chart">Float Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-knob')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.know-chart">Knob chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-morris')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.morris-chart">Morris Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-nvd3')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.nvd3-chart">Nvd3 Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-peity')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.peity-chart">Peity Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-radial')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.radial chart">Radial Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-rickshaw')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.rickshaw-chart">Rickshaw Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-sparkline')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.sparkline-chart">Sparkline Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('chart-c3')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.charts.c3-chart">C3 Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-map-alt"></i><b>M</b></span>
            <span class="pcoded-mtext" data-i18n="nav.maps.main">Maps</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('map-google')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.maps.google-maps">Google Maps</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('map-vector')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.maps.vector-map">Vector Maps</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('map-api')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.maps.google-map-api">Google Map Search API</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('location')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.maps.location">Location</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="{{url('index')}}" target="_blank">
            <span class="pcoded-micon"><i class="ti-mobile"></i><b>LP</b></span>
            <span class="pcoded-mtext" data-i18n="nav.landing-page.main">Landing Page</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.pages">Pages</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
            <span class="pcoded-mtext" data-i18n="nav.authentication.main">Authentication</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('auth-normal-sign-in')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.login-bg-image">Login With BG Image</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-sign-in-social')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.login-soc-icon">Login With Social Icon</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-sign-in-social-header-footer')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.login-soc-h-f">Login Social With Header And Footer</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-normal-sign-in-header-footer')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.login-h-f">Login With Header And Footer</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-sign-up')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.registration-bg-image">Registration BG Image</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-sign-up-social')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.registration-soc-icon">Registration Social Icon</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-sign-up-social-header-footer')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.registration-soc-h-f">Registration Social With Header And Footer</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-sign-up-header-footer')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.registration-h-f">Registration With Header And Footer</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-multi-step-sign-up')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.multi-step-registration">Multi Step Registration</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-reset-password')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.forgot-password">Forgot Password</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-lock-screen')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.lock-screen">Lock Screen</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('auth-modal')}}" target="_blank">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.authentication.modal">Modal</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-settings"></i><b>M</b></span>
            <span class="pcoded-mtext" data-i18n="nav.maintenance.main">Maintenance</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('error')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.maintenance.error">Error</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('comming-soon')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.maintenance.comming-soon">Comming Soon</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('offline-ui')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.maintenance.offline-ui">Offline UI</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-user"></i><b>UP</b></span>
            <span class="pcoded-mtext" data-i18n="nav.user-profile.main">User Profile</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('timeline')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.user-profile.timeline">Timeline</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('timeline-social')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.user-profile.timeline-social">Timeline Social</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('user-profile')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.user-profile.user-profile">User Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('user-card')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">User Card</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>

    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-shopping-cart"></i><b>E</b></span>
            <span class="pcoded-mtext" data-i18n="nav.e-commerce.main">E-Commerce</span>
            <span class="pcoded-badge label label-danger">NEW</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('product')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.e-commerce.product">Product</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('product-list')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-list">Product List</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('product-edit')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-edit">Product Edit</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('product-detail')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-detail">Product Detail</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('product-cart')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-card">Product Card</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('product-payment')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.e-commerce.credit-card-form">Credit Card Form</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-email"></i><b>E</b></span>
            <span class="pcoded-mtext" data-i18n="nav.email.main">Email</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('email-compose')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.email.compose-mail">Compose Email</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('email-inbox')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.email.inbox">Inbox</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('email-read')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.email.read-read-mail">Read Mail</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-email"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.email.email-template.main">Email Template</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{url('email-templates/email-welcome')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.email.email-template.welcome-email">Welcome Email</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('email-templates/email-password')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"  data-i18n="nav.email.email-template.reset-password">Reset Password</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('email-templates/email-newsletter')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"  data-i18n="nav.email.email-template.newsletter-email">Newsletter Email</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('email-templates/email-launch')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.email.email-template.app-launch">App Launch</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('email-templates/email-activation')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.email.email-template.activation-code">Activation Code</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.app">App</div>
<ul class="pcoded-item pcoded-left-item">
    <li class=" ">
        <a href="{{url('chat')}}">
            <span class="pcoded-micon"><i class="ti-comments"></i><b>C</b></span>
            <span class="pcoded-mtext" data-i18n="nav.chat.main">Chat</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>

    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-dribbble"></i><b>S</b></span>
            <span class="pcoded-mtext" data-i18n="nav.social.main">Social</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('fb-wall')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.social.fb-wall">Wall</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('message')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.social.messages">Messages</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-check-box"></i><b>T</b></span>
            <span class="pcoded-mtext" data-i18n="nav.task.main">Task</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('task-list')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.task.task-list">Task List</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('task-board')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.task.task-board">Task Board</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('task-detail')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.task.task-detail">Task Detail</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('issue-list')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.task.issue list">Issue List</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-notepad"></i><b>T</b></span>
            <span class="pcoded-mtext" data-i18n="nav.to-do.main">To-Do</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('todo')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.to-do.todo">To-Do</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('notes')}}" data-i18n="nav.to-do.notes">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext">Notes</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-gallery"></i><b>G</b></span>
            <span class="pcoded-mtext" data-i18n="nav.gallery.main">Gallery</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('gallery-grid')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.gallery.gallery-grid">Gallery-Grid</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('gallery-masonry')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.gallery.masonry-gallery">Masonry Gallery</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('gallery-advance')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.gallery.advance-gallery">Advance Gallery</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-search"></i><b>S</b></span>
            <span class="pcoded-mtext" data-i18n="nav.search.main">Search</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('search-result')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.search.simple-search">Simple Search</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('search-result2')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.search.grouping-search">Grouping Search</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-medall-alt"></i><b>JS</b></span>
            <span class="pcoded-mtext" data-i18n="nav.job-search.main">Job Search</span>
            <span class="pcoded-badge label label-danger">NEW</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('job-card-view')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.job-search.card-view">Card View</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('job-details')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.job-search.job-detailed">Job Detailed</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('job-find')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.job-search.job-find">Job Find</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('job-panel-view')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.job-search.job-panel-view">Job Panel View</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.extension">Extension</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b>E</b></span>
            <span class="pcoded-mtext" data-i18n="nav.editor.main">Editor</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('ck-editor')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.editor.ck-editor">CK-Editor</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('wysiwyg-editor')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.editor.wysiwyg-editor">WYSIWYG Editor</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('ace-editor')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.editor.ace-editor">Ace Editor</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <li class="">
                <a href="{{url('long-press-editor')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.editor.long-press-editor">Long Press Editor</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>I</b></span>
            <span class="pcoded-mtext" data-i18n="nav.invoice.main">Invoice</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('invoice')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.invoice.invoice">Invoice</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('invoice-summary')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.invoice.invoice-summery">Invoice Summary</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('invoice-list')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.invoice.invoice-list">Invoice List</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-calendar"></i><b>EC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.event-calendar.main">Event Calendar</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('event-full-calender')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.full-calendar.full-calendar">Full Calendar</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('event-clndr')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.clnder.clnder">CLNDER</span>
                    <span class="pcoded-badge label label-info">NEW</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="{{url('image-crop')}}">
            <span class="pcoded-micon"><i class="ti-cut"></i><b>IC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.image-cropper.main">Image Cropper</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class="">
        <a href="{{url('file-upload')}}">
            <span class="pcoded-micon"><i class="ti-cloud-up"></i><b>FU</b></span>
            <span class="pcoded-mtext" data-i18n="nav.file-upload.main">File Upload</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-world"></i><b>I</b></span>
            <span class="pcoded-mtext" data-i18n="nav.internationalize.main">Internationalize</span>
            <span class="pcoded-badge label label-danger">HOT</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="{{url('internationalization/internationalization-after-init')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.internationalize.after-init">After Init</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('internationalization/internationalization-fallback')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.internationalize.fallback">Fallback</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('internationalization/internationalization-on-init')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.internationalize.on-int">On Init</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('internationalization/internationalization-resources')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.internationalize.resources">Resources</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{url('internationalization/internationalization-xhr-backend')}}">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.internationalize.xhr-backend">XHR Backend</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="{{url('change-loges')}}">
            <span class="pcoded-micon"><i class="ti-list"></i><b>CL</b></span>
            <span class="pcoded-mtext" data-i18n="nav.change-loges.main">Change Loges</span>
            <span class="pcoded-badge label label-warning">1.0</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Other</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
            <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
    </li>
    <li class="">
        <a href="javascript:void(0)" class="disabled">
            <span class="pcoded-micon"><i class="ti-na"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.disabled-menu.main" >Disabled Menu</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class="">
        <a href="{{url('sample-page')}}">
            <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
            <span class="pcoded-mtext" data-i18n="nav.sample-page.main">Sample Page</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.support">Support</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{url('/')}}" target="">
            <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.documentation.main">Documentation</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
    <li class="">
        <a href="#" target="_blank">
            <span class="pcoded-micon"><i class="ti-layout-list-post"></i><b>SI</b></span>
            <span class="pcoded-mtext" data-i18n="nav.submit-issue.main">Submit Issue</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>