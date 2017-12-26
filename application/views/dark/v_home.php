<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Grid | Data Grid</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/dark-theme/') ?>images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/dark-theme/') ?>images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/dark-theme/') ?>images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/dark-theme/') ?>images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/jquery.news-ticker.css">
     <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/jplist-custom.css">
</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
        <div id="theme-setting">
            <a href="#" data-toggle="dropdown" data-step="1" data-intro="&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!"
                data-position="left" class="btn-theme-setting"><i class="fa fa-cog"></i></a>
            <div class="content-theme-setting">
                <select id="list-style" class="form-control">
                    <option value="style1">Flat Squared style</option>
                    <option value="style2">Flat Rounded style</option>
                    <option value="style3" selected="selected">Flat Border style</option>
                </select>
            </div>
        </div>
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">KAdmin</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>
                        
                    </li>
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="<?php echo base_url('assets/dark-theme/') ?>images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php echo $bio->name; ?></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="Login.html"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    <li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-config" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                &times;</button>
                            <h4 class="modal-title">
                                Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                Close</button>
                            <button type="button" class="btn btn-primary">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <?php $this->load->view('dark/menus') ?>
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Data Grid</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Data Grid</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Data Grid</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <?php $this->load->view($page); ?>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery-ui.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/html5shiv.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/respond.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.cookie.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/icheck.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/custom.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.news-ticker.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.menu.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/pace.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/holder.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/responsive-tabs.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.flot.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.flot.tooltip.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.flot.fillbetween.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/zabuto_calendar.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/index.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/highcharts.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/data.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/drilldown.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/exporting.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/highcharts-more.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/charts-highchart-pie.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/charts-highchart-more.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/modernizr.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jplist.min.js"></script>
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/jplist.js"></script>

    <!--CORE JAVASCRIPT-->
    <script src="<?php echo base_url('assets/dark-theme/') ?>script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
