<!-- computer only sidebar -->
<div class=" computer only row">
    <div class="left floated three wide computer column" id="computersidebar">
        <div class="ui vertical fluid menu scrollable" id="simplefluid">
            <div class="clearsidebar"></div>
            <div class="item">
                <img src="images/user.png" id="sidebar-image">
            </div>
            <div class=" ui accordion simpleaccordion item">
                <div class="title titleaccordion item"><i class="dropdown icon"></i>Managements
                </div>
                <div class="content contentaccordion">
                    <a class="item itemaccordion" href="admin.php?act=catalog"><i class="list ul icon"></i>Catalog</a>
                    <a class="item itemaccordion" href="admin.php?act=product"><i
                            class="shopping basket icon"></i>Product</a>
                    <!-- <a class="item itemaccordion" href="admin.php?act=insert_data"><i class="database icon"></i>Insert Data</a> -->
                </div>
            </div>
            <!-- Begin Simple Accordion -->
            <!-- <div class="ui accordion simpleaccordion item">
                <div class="title titleaccordion item"><i class="dropdown icon"></i> Settings</div>
                <div class="content contentaccordion">
                    <a class="item itemaccordion" href="admin.php?act=Account_Setting"><i class=" settings icon"></i>
                        Account
                        Setting</a>
                    <a class="item itemaccordion" href="#"><i class="settings icon"></i> Site
                        Setting</a>
                </div>
            </div> -->
            <!-- End Simple Accordion -->
            
            <a class="item"></a>
        </div>
    </div>
</div>

<script>
function closeNavigation() {
    // Thực hiện các thao tác để đóng navigation ở đây
    // Ví dụ:
    var navigation = document.getElementById("navigation");
    navigation.style.display = "none";
}
</script>
<!-- end computer only sidebar -->
<!-- END SIDEBAR -->
</div>
</div>

<!-- inject:js -->
<script src="vendors/jquery/jquery.min.js"></script>
<script src="vendors/fomantic-ui/semantic.min.js"></script>
<script src="js/main.js"></script>
<!-- endinject -->
<!-- chartjs:js -->
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/chart.js/Chart.utils.js"></script>
<script src="vendors/chart.js/Chart.example.js"></script>
<!-- endinject -->