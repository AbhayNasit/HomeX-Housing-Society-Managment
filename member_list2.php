<!--This member_list is for security_page-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HomeX</title>

    <!-- Favicons -->
    <link href="img/1.ico" rel="icon">
    <link href="img/1.ico">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
    <link href="dist/jquery.bootgrid.css" rel="stylesheet" />
    <script src="dist/jquery-1.11.1.min.js"></script>
    <script src="dist/bootstrap.min.js"></script>
    <script src="dist/jquery.bootgrid.min.js"></script>


</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo"><b>Home<span>X</span></b></a>
            <!--logo end-->

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="#"><img src="img/6.png" class="img-circle" width="80"></a></p>

                    <li class="mt">
                        <a href="security_page.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a class="active" href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            <span>Society Members</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a href="member_list2.php">Society Members Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Visitors</span>
                        </a>
                        <ul class="sub">
                            <li><a href="New_Visitor.php">New Visitor</a></li>
                            <li><a href="manage-newvisitors.php">Manage Visitor</a></li>
                            <li><a href="bwdates-reports.php">Visitor Data</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span>Society Vehical</span>
                        </a>
                        <ul class="sub">
                            <li><a href="vehical_list.php">Society Vehical List</a></li>
                            <li><a href="vehical_detail.php">Society Vehical Detail</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">

                <div class="container">
                    <div class=""><br>
                        <div class="col-sm-8">
                            <div class="well clearfix">
                                <center>
                                    <h1>Society Member List</h1>
                                </center>

                            </div>
                            <table id="employee_grid" class="table table-condensed table-hover table-striped"
                                width="100%" cellspacing="0" data-toggle="bootgrid">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric" data-identifier="true">Empid</th>
                                        <th data-column-id="member_name">Name</th>
                                        <th data-column-id="flat_no">flat</th>
                                        <th data-column-id="member_no">number</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>


            </section>
            <!-- /wrapper -->
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; Copyrights <strong>HomeX</strong>. All Rights Reserved
                </p>
                <a href="blank.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>

</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
    var grid = $("#employee_grid").bootgrid({
        ajax: true,
        rowSelect: true,
        post: function() {
            /* To accumulate custom parameter with the request object */
            return {
                id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
            };
        },

        url: "response.php",
        formatters: {
            "commands": function(column, row) {
                return "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" +
                    row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
            }
        }
    }).on("loaded.rs.jquery.bootgrid", function() {
        /* Executes after data is loaded and rendered */
        grid.find(".command-edit").on("click", function(e) {
            //alert("You pressed edit on row: " + $(this).data("row-id"));
            var ele = $(this).parent();
            var g_id = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
            console.log(g_id);
            console.log(g_name);

            //console.log(grid.data());//
            $('#edit_model').modal('show');
            if ($(this).data("row-id") > 0) {

                // collect the data
                $('#edit_id').val(ele.siblings(':first')
            .html()); // in case we're changing the key
                $('#edit_name').val(ele.siblings(':nth-of-type(2)').html());
                $('#edit_flat').val(ele.siblings(':nth-of-type(3)').html());
                $('#edit_number').val(ele.siblings(':nth-of-type(4)').html());
            } else {
                alert('Now row selected! First select row, then click edit button');
            }
        }).end().find(".command-delete").on("click", function(e) {

            var conf = confirm('Delete ' + $(this).data("row-id") + ' items?');
            alert(conf);
            if (conf) {
                $.post('response.php', {
                    id: $(this).data("row-id"),
                    action: 'delete'
                }, function() {
                    // when ajax returns (callback), 
                    $("#employee_grid").bootgrid('reload');
                });
                //$(this).parent('tr').remove();
                //$("#employee_grid").bootgrid('remove', $(this).data("row-id"))
            }
        });
    });

    function ajaxAction(action) {
        data = $("#frm_" + action).serializeArray();
        $.ajax({
            type: "POST",
            url: "response.php",
            data: data,
            dataType: "json",
            success: function(response) {
                $('#' + action + '_model').modal('hide');
                $("#employee_grid").bootgrid('reload');
            }
        });
    }

    $("#command-add").click(function() {
        $('#add_model').modal('show');
    });
    $("#btn_add").click(function() {
        ajaxAction('add');
    });
});
</script>