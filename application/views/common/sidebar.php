<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="<?=base_url('admin');?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub">
						<li><a href="<?=base_url('admin/typo');?>">Typography</a></li>
						<li><a href="<?=base_url('admin/glyphicon');?>">glyphicon</a></li>
                        <li><a href="<?=base_url('admin/grids');?>">Grids</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?=base_url('admin/fontawesome');?>">
                        <i class="fa fa-bullhorn"></i>
                        <span>Font awesome </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('admin/basicTable');?>">Basic Table</a></li>
                        <li><a href="<?=base_url('admin/responsiveTable');?>">Responsive Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('admin/frmComponent');?>">Form Elements</a></li>
                        <li><a href="<?=base_url('admin/frmValidations');?>">Form Validation</a></li>
						<li><a href="<?=base_url('admin/dropZone');?>">Dropzone</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('admin/inbox');?>">Inbox</a></li>
                        <li><a href="<?=base_url('admin/compose');?>">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('admin/chartJs');?>">Chart js</a></li>
                        <li><a href="<?=base_url('admin/flotChart');?>">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('admin/googleMap');?>">Google Map</a></li>
                        <li><a href="<?=base_url('admin/vectorMap');?>">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('admin/gallery');?>">Gallery</a></li>
						<li><a href="<?=base_url('admin/errorPg')?>">404 Error</a></li>
                        <li><a href="<?=base_url('admin/registration')?>">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?=base_url('admin/login')?>">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->