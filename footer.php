      <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Built with <i class="fa fa-heart"></i> by Bighero
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2017 <a href="#">Bighero</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    <script src="plugins/js/jquery-3.1.1.min.js"></script>
    <script src="plugins/js/bootstrap.js"></script>
    <script src="plugins/js/jquery.sparkline.min.js"></script>
    <script src="plugins/js/countUp.min.js"></script>
    <script src="plugins/js/raphael.min.js"></script>
    <script src="plugins/js/morris.min.js"></script>
    <script src="plugins/js/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="plugins/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="plugins/js/material.min.js"></script>
    <script src="plugins/js/ripples.min.js"></script>
    <script src="plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="plugins/js/Chart.bundle.min.js"></script>
    <script src="plugins/js/jquery.slimscroll.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/widgets.js"></script>
    <script src="js/app.js"></script>

    <!-- Color Switcher -->
    <script type="text/javascript">
    $(function() {

        $("head").append('<link id="skin-css" rel="stylesheet">');

        $('.skin-colors li').on('click', function() {
            $('.skins li').removeClass('active');
            $(this).addClass('active');
            $('#skin-css').attr('href', 'css/colors/' + $(this).data('skin') + '.css');
        });

    });
    </script>
    <div class="skins">
        <ul class="skin-colors">
            <li data-skin="green" style="background-color: #27ae60" class="active"></li>
            <li data-skin="light-green" style="background-color: #8bc34a"></li>
            <li data-skin="indigo" style="background-color: #3f51b5"></li>
            <li data-skin="amethyst" style="background-color: #9b59b6"></li>
            <li data-skin="blue" style="background-color: #00a3d3"></li>
            <li data-skin="dodger-blue" style="background-color: #33b3d3"></li>
            <li data-skin="cyan" style="background-color: #00bcd4"></li>
            <li data-skin="lime" style="background-color: #cddc39"></li>
            <li data-skin="orange" style="background-color: #f39c12"></li>
            <li data-skin="amber" style="background-color: #ffc107"></li>
            <li data-skin="pink" style="background-color: #ea4c89"></li>
            <li data-skin="red" style="background-color: #D64343"></li>
            <li data-skin="teal" style="background-color: #009688"></li>
        </ul>
        <span class="skin-toggler"><i class="fa fa-gear fa-spin"></i></span>
    </div>
    <!-- END Skin switcher -->


</body>


<!-- Mirrored from www.upplanet.com/bighero/outlay-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2017 16:16:17 GMT -->
</html>