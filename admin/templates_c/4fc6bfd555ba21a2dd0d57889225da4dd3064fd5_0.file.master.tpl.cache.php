<?php
/* Smarty version 3.1.30, created on 2017-10-31 16:53:43
  from "C:\xampp\htdocs\Coupon\admin\templates\master.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f89c87adb5c3_62816475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fc6bfd555ba21a2dd0d57889225da4dd3064fd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Coupon\\admin\\templates\\master.tpl',
      1 => 1509464916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f89c87adb5c3_62816475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '960459f89c87ac97d0_09826470';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Coupon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
    <!-- Bootstrap Core CSS -->
    <link href="public/css/table.css" rel='stylesheet' type='text/css' />
    <!--Table style-->
    <link href="public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="public/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="public/css/font-awesome.css" rel="stylesheet">

    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="public/css/icon-font.min.css" type='text/css' />
    <?php echo '<script'; ?>
 src="public/js/simpleCart.min.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/amcharts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/serial.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/light.js"><?php echo '</script'; ?>
>
    <!-- //lined-icons -->
    <?php echo '<script'; ?>
 src="public/js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
    <!--pie-chart--->
    <?php echo '<script'; ?>
 src="public/js/pie-chart.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    <?php echo '</script'; ?>
>
</head>
<body>
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="inner-content">
            <!-- header-starts -->
            <div class="header-section">
                <!-- top_bg -->
                <div class="top_bg">

                    <div class="header_top">
                        <div class="top_right">
                            <ul>
                                <li><a href="">help</a></li>|
                                <li><a href="">Contact</a></li>|
                                <li><a href="">Delivery information</a></li>
                            </ul>
                        </div>
                        <div class="top_left">
                            <h2><span></span> Call us : 028 3736 2323</h2>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div id="logo_coupon" align="center">
                        <a href="admin.php"><img  src="public/images/logo.png"></a>
                    </div>

                </div>
                <div class="clearfix"></div>
                <!-- /top_bg -->
            </div>
            <div class="header_bg">

                <div class="header">
                    <div class="head-t">
                        <!-- start header_right -->
                        <div class="clearfix"> </div>
                    </div>
                </div>

            </div>
            <!-- //header-ends -->

            <!--content-->
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2494159f89c87ad0886_71164057', "content");
?>

            <!--content-->
        </div>
    </div>
    <!--//content-inner-->
    <!--/sidebar-menu-->
    <div class="sidebar-menu">
        <header class="logo1">
            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
        </header>
        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
        <div class="menu">
            <ul id="menu" >
                <li id="menu-academico" ><a href="admin.php?c=coupon"><i class="fa fa-file-text-o"></i> <span>Coupon</span></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        
        <?php echo '<script'; ?>
>
            var toggle = true;

            $(".sidebar-icon").click(function() {
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position":"absolute"});
                }
                else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function() {
                        $("#menu span").css({"position":"relative"});
                    }, 400);
                }

                toggle = !toggle;
            });
        <?php echo '</script'; ?>
>
        <!--js -->
        <?php echo '<script'; ?>
 src="public/js/jquery.nicescroll.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/scripts.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap Core JavaScript -->
        <?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <!-- /Bootstrap Core JavaScript -->
        <!-- real-time -->
        <?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="public/js/jquery.flot.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function() {

                // We use an inline data source in the example, usually data would
                // be fetched from a server

                var data = [],
                    totalPoints = 300;

                function getRandomData() {

                    if (data.length > 0)
                        data = data.slice(1);

                    // Do a random walk

                    while (data.length < totalPoints) {

                        var prev = data.length > 0 ? data[data.length - 1] : 50,
                            y = prev + Math.random() * 10 - 5;

                        if (y < 0) {
                            y = 0;
                        } else if (y > 100) {
                            y = 100;
                        }

                        data.push(y);
                    }

                    // Zip the generated y values with the x values

                    var res = [];
                    for (var i = 0; i < data.length; ++i) {
                        res.push([i, data[i]])
                    }

                    return res;
                }

                // Set up the control widget

                var updateInterval = 30;
                $("#updateInterval").val(updateInterval).change(function () {
                    var v = $(this).val();
                    if (v && !isNaN(+v)) {
                        updateInterval = +v;
                        if (updateInterval < 1) {
                            updateInterval = 1;
                        } else if (updateInterval > 2000) {
                            updateInterval = 2000;
                        }
                        $(this).val("" + updateInterval);
                    }
                });

                var plot = $.plot("#placeholder", [ getRandomData() ], {
                    series: {
                        shadowSize: 0	// Drawing is faster without shadows
                    },
                    yaxis: {
                        min: 0,
                        max: 100
                    },
                    xaxis: {
                        show: false
                    }
                });

                function update() {

                    plot.setData([getRandomData()]);

                    // Since the axes don't change, we don't need to call plot.setupGrid()

                    plot.draw();
                    setTimeout(update, updateInterval);
                }

                update();

                // Add the Flot version string to the footer

                $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
            });

        <?php echo '</script'; ?>
>
        <!-- /real-time -->
        <?php echo '<script'; ?>
 src="public/js/jquery.fn.gantt.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>

            $(function() {

                "use strict";

                $(".gantt").gantt({
                    source: [{
                        name: "Sprint 0",
                        desc: "Analysis",
                        values: [{
                            from: "/Date(1320192000000)/",
                            to: "/Date(1322401600000)/",
                            label: "Requirement Gathering",
                            customClass: "ganttRed"
                        }]
                    },{
                        name: " ",
                        desc: "Scoping",
                        values: [{
                            from: "/Date(1322611200000)/",
                            to: "/Date(1323302400000)/",
                            label: "Scoping",
                            customClass: "ganttRed"
                        }]
                    },{
                        name: "Sprint 1",
                        desc: "Development",
                        values: [{
                            from: "/Date(1323802400000)/",
                            to: "/Date(1325685200000)/",
                            label: "Development",
                            customClass: "ganttGreen"
                        }]
                    },{
                        name: " ",
                        desc: "Showcasing",
                        values: [{
                            from: "/Date(1325685200000)/",
                            to: "/Date(1325695200000)/",
                            label: "Showcasing",
                            customClass: "ganttBlue"
                        }]
                    },{
                        name: "Sprint 2",
                        desc: "Development",
                        values: [{
                            from: "/Date(1326785200000)/",
                            to: "/Date(1325785200000)/",
                            label: "Development",
                            customClass: "ganttGreen"
                        }]
                    },{
                        name: " ",
                        desc: "Showcasing",
                        values: [{
                            from: "/Date(1328785200000)/",
                            to: "/Date(1328905200000)/",
                            label: "Showcasing",
                            customClass: "ganttBlue"
                        }]
                    },{
                        name: "Release Stage",
                        desc: "Training",
                        values: [{
                            from: "/Date(1330011200000)/",
                            to: "/Date(1336611200000)/",
                            label: "Training",
                            customClass: "ganttOrange"
                        }]
                    },{
                        name: " ",
                        desc: "Deployment",
                        values: [{
                            from: "/Date(1336611200000)/",
                            to: "/Date(1338711200000)/",
                            label: "Deployment",
                            customClass: "ganttOrange"
                        }]
                    },{
                        name: " ",
                        desc: "Warranty Period",
                        values: [{
                            from: "/Date(1336611200000)/",
                            to: "/Date(1349711200000)/",
                            label: "Warranty Period",
                            customClass: "ganttOrange"
                        }]
                    }],
                    navigate: "scroll",
                    scale: "weeks",
                    maxScale: "months",
                    minScale: "days",
                    itemsPerPage: 10,
                    onItemClick: function(data) {
                        alert("Item clicked - show some details");
                    },
                    onAddClick: function(dt, rowId) {
                        alert("Empty space clicked - add an item!");
                    },
                    onRender: function() {
                        if (window.console && typeof console.log === "function") {
                            console.log("chart rendered");
                        }
                    }
                });

                $(".gantt").popover({
                    selector: ".bar",
                    title: "I'm a popover",
                    content: "And I'm the content of said popover.",
                    trigger: "hover"
                });

                prettyPrint();

            });

        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/menu_jquery.js"><?php echo '</script'; ?>
>
        
</body>
</html><?php }
/* {block "content"} */
class Block_2494159f89c87ad0886_71164057 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
