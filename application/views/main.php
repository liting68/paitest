<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>信息管理</title>
    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <!--<link rel="stylesheet" href="css/ace-fonts.css" />-->
    <link rel="stylesheet" href="css/iframe.css" />

    <!--[if lte IE 9]><link rel="stylesheet" href="css/ace-part2.css" class="ace-main-stylesheet" />
    <![endif]-->
    <!--[if lte IE 9]> <link rel="stylesheet" href="css/ace-ie.css" /> <![endif]-->
    <!-- ace settings handler -->
    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <!--[if lte IE 8]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.js"></script>
    <![endif]-->
</head>

<body class="no-skin">
<!--头部代码-->
<div id="navbar" class="navbar navbar-default">

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand"><img src="images/logo01.png" alt=""></a>
        </div>

        <div class=" pull-right">
            <ul class="top-nav">
                <li>
                    <a href="#"><i class="fa fa-bell" aria-hidden="true"></i>消息</a>
                </li>
                <li>
                    <a href="#">客服中心</a>
                </li>
                <li>
                    <a href="#">帮助文档</a>
                </li>
                <li>
                    <a href="<?php echo site_url('center/index/1') ?>" data-toggle="dropdown" class="dropdown-toggle"><i></i><?php echo $loginInfo['real_name'] ?><em class="iUp"></em></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo site_url('center/index/2') ?>"><span class="icon-circle"></span>修改密码</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/loginout') ?>"><span class="icon-circle"></span>退出</a>
                        </li>
                    </ul>

                </li>
            </ul>
        </div>
    </div>
</div>

<!--头部代码end-->

<div class="main-container" id="main-container">

    <!--sideBar-->

    <!-- #section:basics/sidebar -->
    <div id="sidebar" class="sidebar responsive  ">

        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'fixed')
            } catch(e) {}
        </script>
        <a href="#" class="iRight sidebar-collapse" id="sidebar-collapse" data-target="#sidebar"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'collapsed')
            } catch(e) {}
        </script>

        <!-- /.sidebar-shortcuts -->
        <div class="sidebar-scroll-box">
            <p class="companyNum">公司编号：<?php echo $loginInfo['company_code'] ?></p>
            <ul class="nav nav-list">
                <li>
                    <a href="<?php echo site_url('index/main') ?>" target="backFramework"><span class="menu-text"><i class="fa fa-home"></i><s>首页</s></span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('course/courselist') ?>" target="backFramework"><span class="menu-text"><i class="fa fa-book"></i><s>课程管理</s></span></a>
                </li>
                <li>
                    <a href="#" target="backFramework" class="dropdown-toggle"><span class="menu-text"><i class="fa fa-users"></i><s>人员管理</s></span> <b class="fa fa-angle-right arrow "></b> </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo site_url('teacher/teacherlist') ?>" target="backFramework">&middot;讲师管理 </a>
                        </li>
                        <?php if($loginInfo['role']==1||$roleInfo['department']==1||$roleInfo['student']==1){ ?>
                            <li>
                                <a href="<?php echo site_url('department/index') ?>" target="backFramework">&middot;组织架构 </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('center/index/3') ?>" target="backFramework">&middot;权限设置 </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('ability/index') ?>" target="backFramework"><span class="menu-text"><i class="fa fa-cubes"></i><s>能力模型</s></span><b class="fa fa-angle-right arrow "></b> </a>
                </li>
                <li>
                    <a href="#" target="backFramework" class="dropdown-toggle"><span class="menu-text"><i class="fa fa-line-chart"></i><s>年度培训计划</s></span><b class="fa fa-angle-right arrow "></b></a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo site_url('annualsurvey/index') ?>" target="backFramework">&middot;年度调研 </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('annualplan/index') ?>" target="backFramework">&middot;培训计划 </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

    <!--sideBar end-->

    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <div class="main-content-inner">

            <iframe width="100%" height="99%" frameborder="0" id="backFramework" scrolling="auto" allowtransparency="true" name="backFramework" src="<?php echo site_url('index/main') ?>"></iframe>

        </div>
    </div>

</div>

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='js/jquery.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='js/jquery1x.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script src="js/jquery.slimscroll.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var h = $('.main-container').height();
        $('.sidebar-scroll-box').slimScroll({
            height: h,
            railVisible: true,
            alwaysVisible: true
        });
        $('.sidebar li').click(function(){
            if($('.sidebar').hasClass('menu-min')){
                $(this).closest('.sidebar').removeClass('menu-min');
            }
        })
    })
</script>

<script src="js/bootstrap.js"></script>

<!-- ace scripts -->
<script src="js/ace/elements.scroller.js"></script>
<script src="js/ace/elements.colorpicker.js"></script>
<script src="js/ace/elements.fileinput.js"></script>
<script src="js/ace/elements.typeahead.js"></script>
<script src="js/ace/elements.wysiwyg.js"></script>
<script src="js/ace/elements.treeview.js"></script>
<script src="js/ace/elements.wizard.js"></script>
<script src="js/ace/elements.aside.js"></script>
<script src="js/ace/ace.js"></script>
<script src="js/ace/ace.ajax-content.js"></script>
<script src="js/ace/ace.touch-drag.js"></script>
<script src="js/ace/ace.sidebar.js"></script>
<script src="js/ace/ace.sidebar-scroll-1.js"></script>
<script src="js/ace/ace.submenu-hover.js"></script>
<script src="js/ace/ace.widget-box.js"></script>
<script src="js/ace/ace.widget-on-reload.js"></script>
<script src="js/ace/ace.searchbox-autocomplete.js"></script>
</body>

</html>