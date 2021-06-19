<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" style="height: 100%;" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item"><a class="nav-item-hold" href="<?php echo $config['site'] ?>"><i class="nav-icon i-Bar-Chart-2"></i><span class="nav-text">احصائيات</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="Stored"><a class="nav-item-hold" href="#"><i class="nav-icon i-Empty-Box"></i><span class="nav-text">المنتجات</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="Billing"><a class="nav-item-hold" href="#"><i class="nav-icon i-Billing"></i><span class="nav-text">الحسابات</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="client"><a class="nav-item-hold" href="#"><i class="nav-icon i-Boy"></i><span class="nav-text">العملاء</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="users"><a class="nav-item-hold" href="#"><i class="nav-icon i-Support"></i><span class="nav-text">المشرفين</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item"><a class="nav-item-hold" href="<?php echo $config['site'] ?>/Settings"><i class="nav-icon i-Gears"></i><span class="nav-text">الاعدادات</span></a>
                <div class="triangle"></div>
            </li>

            <!-- <li class="nav-item" data-item="dashboard"><a class="nav-item-hold" href="#"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="uikits"><a class="nav-item-hold" href="#"><i class="nav-icon i-Library"></i><span class="nav-text">UI kits</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="extrakits"><a class="nav-item-hold" href="#"><i class="nav-icon i-Suitcase"></i><span class="nav-text">Extra kits</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="apps"><a class="nav-item-hold" href="#"><i class="nav-icon i-Computer-Secure"></i><span class="nav-text">Apps</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="widgets"><a class="nav-item-hold" href="#"><i class="nav-icon i-Computer-Secure"></i><span class="nav-text">Widgets</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="charts"><a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Charts</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="forms"><a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Forms</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item"><a class="nav-item-hold" href="datatables.php"><i class="nav-icon i-File-Horizontal-Text"></i><span class="nav-text">Datatables</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="sessions"><a class="nav-item-hold" href="#"><i class="nav-icon i-Administrator"></i><span class="nav-text">Sessions</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item active" data-item="others"><a class="nav-item-hold" href="#"><i class="nav-icon i-Double-Tap"></i><span class="nav-text">Others</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item"><a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank"><i class="nav-icon i-Safe-Box1"></i><span class="nav-text">Doc</span></a>
                <div class="triangle"></div>
            </li> -->
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <!-- Submenu Dashboards-->
        <ul class="childNav" data-parent="Stored">
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/addProducer"><i class="nav-icon i-Add-Cart"></i><span class="item-name">اضافة منتج</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/allProducer"><i class="nav-icon i-Shop"></i><span class="item-name">المنتجات المتاحة</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/notProducer"><i class="nav-icon i-Danger"></i><span class="item-name">غير متاح للبيع</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/deleteProducer"><i class="nav-icon i-Securiy-Remove"></i><span class="item-name">المنتجات المحذوفة</span></a></li>
        </ul>
        <ul class="childNav" data-parent="Billing">
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/newBill"><i class="nav-icon i-Cash-register-2"></i><span class="item-name">فاتورة جديدة</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/Billing"><i class="nav-icon i-Folders"></i><span class="item-name">كل الفواتير</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/binBilling"><i class="nav-icon i-Folder-Trash"></i><span class="item-name">سلة الفواتير</span></a></li>
        </ul>
        <ul class="childNav" data-parent="client">
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/clients"><i class="nav-icon i-Conference"></i><span class="item-name">كل العملاء</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/addcontact"><i class="nav-icon i-Add-User"></i><span class="item-name">إضافة عميل</span></a></li>
        </ul>
        <ul class="childNav" data-parent="users">
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/users"><i class="nav-icon i-Support"></i><span class="item-name">كل المشرفين</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/addUser"><i class="nav-icon i-Support"></i><span class="item-name">إضافة مشرف</span></a></li>
        </ul>
        <ul class="childNav" data-parent="dashboard">
            <li class="nav-item"><a href="dashboard1.php"><i class="nav-icon i-Clock-3"></i><span class="item-name">Version 1</span></a></li>
            <li class="nav-item"><a href="dashboard2.php"><i class="nav-icon i-Clock-4"></i><span class="item-name">Version 2</span></a></li>
            <li class="nav-item"><a href="dashboard3.php"><i class="nav-icon i-Over-Time"></i><span class="item-name">Version 3</span></a></li>
            <li class="nav-item"><a href="dashboard4.php"><i class="nav-icon i-Clock"></i><span class="item-name">Version 4</span></a></li>
        </ul>
        
        <ul class="childNav" data-parent="forms">
            <li class="nav-item"><a href="form.basic.php"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Basic Elements</span></a></li>
            <li class="nav-item"><a href="form.layouts.php"><i class="nav-icon i-Split-Vertical"></i><span class="item-name">Form Layouts</span></a></li>
            <li class="nav-item"><a href="form.input.group.php"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Input Groups</span></a></li>
            <li class="nav-item"><a href="form.validation.php"><i class="nav-icon i-Close-Window"></i><span class="item-name">Form Validation</span></a></li>
            <li class="nav-item"><a href="smart.wizard.php"><i class="nav-icon i-Width-Window"></i><span class="item-name">Smart Wizard</span></a></li>
            <li class="nav-item"><a href="tag.input.php"><i class="nav-icon i-Tag-2"></i><span class="item-name">Tag Input</span></a></li>
            <li class="nav-item"><a href="editor.php"><i class="nav-icon i-Pen-2"></i><span class="item-name">Rich Editor</span></a></li>
        </ul>
        <ul class="childNav" data-parent="apps">
            <li class="nav-item"><a href="invoice.php"><i class="nav-icon i-Add-File"></i><span class="item-name">Invoice</span></a></li>
            <li class="nav-item"><a href="inbox.php"><i class="nav-icon i-Email"></i><span class="item-name">Inbox</span></a></li>
            <li class="nav-item"><a href="chat.php"><i class="nav-icon i-Speach-Bubble-3"></i><span class="item-name">Chat</span></a></li>
        </ul>
        <ul class="childNav" data-parent="widgets">
            <li class="nav-item"><a href="widget-card.php"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget card</span></a></li>
            <li class="nav-item"><a href="widget-statistics.php"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget statistics</span></a></li>
            <li class="nav-item"><a href="widget-list.php"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget List <span class="ml-2 badge badge-pill badge-danger">New</span></span></a></li>
            <li class="nav-item"><a href="widget-app.php"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget App <span class="ml-2 badge badge-pill badge-danger"> New</span></span></a></li>
            <li class="nav-item"><a href="weather-card.php"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Weather App <span class="ml-2 badge badge-pill badge-danger"> New</span></span></a></li>
        </ul>
        <!-- chartjs-->
        <ul class="childNav" data-parent="charts">
            <li class="nav-item"><a href="charts.echarts.php"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">echarts</span></a></li>
            <li class="nav-item"><a href="charts.chartsjs.php"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">ChartJs</span></a></li>
            <li class="nav-item dropdown-sidemenu"><a href=""><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Apex Charts</span><i class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li><a href="charts.apexAreaCharts.php">Area Charts</a></li>
                    <li><a href="charts.apexBarCharts.php">Bar Charts</a></li>
                    <li><a href="charts.apexBubbleCharts.php">Bubble Charts</a></li>
                    <li><a href="charts.apexColumnCharts.php">Column Charts</a></li>
                    <li><a href="charts.apexCandleStickCharts.php">CandleStick Charts</a></li>
                    <li><a href="charts.apexLineCharts.php">Line Charts</a></li>
                    <li><a href="charts.apexMixCharts.php">Mix Charts</a></li>
                    <li><a href="charts.apexPieDonutCharts.php">PieDonut Charts</a></li>
                    <li><a href="charts.apexRadarCharts.php">Radar Charts</a></li>
                    <li><a href="charts.apexRadialBarCharts.php">RadialBar Charts</a></li>
                    <li><a href="charts.apexScatterCharts.php">Scatter Charts</a></li>
                    <li><a href="charts.apexSparklineCharts.php">Sparkline Charts</a></li>
                </ul>
            </li>
        </ul>
        <ul class="childNav" data-parent="extrakits">
            <li class="nav-item"><a href="image.cropper.php"><i class="nav-icon i-Crop-2"></i><span class="item-name">Image Cropper</span></a></li>
            <li class="nav-item"><a href="loaders.php"><i class="nav-icon i-Loading-3"></i><span class="item-name">Loaders</span></a></li>
            <li class="nav-item"><a href="ladda.button.php"><i class="nav-icon i-Loading-2"></i><span class="item-name">Ladda Buttons</span></a></li>
            <li class="nav-item"><a href="toastr.php"><i class="nav-icon i-Bell"></i><span class="item-name">Toastr</span></a></li>
            <li class="nav-item"><a href="sweet.alerts.php"><i class="nav-icon i-Approved-Window"></i><span class="item-name">Sweet Alerts</span></a></li>
            <li class="nav-item"><a href="tour.php"><i class="nav-icon i-Plane"></i><span class="item-name">User Tour</span></a></li>
            <li class="nav-item"><a href="upload.php"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Upload</span></a></li>
        </ul>
        <ul class="childNav" data-parent="uikits">
            <li class="nav-item"><a href="alerts.php"><i class="nav-icon i-Bell1"></i><span class="item-name">Alerts</span></a></li>
            <li class="nav-item"><a href="accordion.php"><i class="nav-icon i-Split-Horizontal-2-Window"></i><span class="item-name">Accordion</span></a></li>
            <li class="nav-item"><a href="badges.php"><i class="nav-icon i-Medal-2"></i><span class="item-name">Badges</span></a></li>
            <li class="nav-item"><a href="buttons.php"><i class="nav-icon i-Cursor-Click"></i><span class="item-name">Buttons</span></a></li>
            <li class="nav-item"><a href="cards.php"><i class="nav-icon i-Line-Chart-2"></i><span class="item-name">Cards</span></a></li>
            <li class="nav-item"><a href="card.metrics.php"><i class="nav-icon i-ID-Card"></i><span class="item-name">Card Metrics</span></a></li>
            <li class="nav-item"><a href="carousel.php"><i class="nav-icon i-Video-Photographer"></i><span class="item-name">Carousels</span></a></li>
            <li class="nav-item"><a href="lists.php"><i class="nav-icon i-Belt-3"></i><span class="item-name">Lists</span></a></li>
            <li class="nav-item"><a href="pagination.php"><i class="nav-icon i-Arrow-Next"></i><span class="item-name">Paginations</span></a></li>
            <li class="nav-item"><a href="popover.php"><i class="nav-icon i-Speach-Bubble-2"></i><span class="item-name">Popover</span></a></li>
            <li class="nav-item"><a href="progressbar.php"><i class="nav-icon i-Loading"></i><span class="item-name">Progressbar</span></a></li>
            <li class="nav-item"><a href="tables.php"><i class="nav-icon i-File-Horizontal-Text"></i><span class="item-name">Tables</span></a></li>
            <li class="nav-item"><a href="tabs.php"><i class="nav-icon i-New-Tab"></i><span class="item-name">Tabs</span></a></li>
            <li class="nav-item"><a href="tooltip.php"><i class="nav-icon i-Speach-Bubble-8"></i><span class="item-name">Tooltip</span></a></li>
            <li class="nav-item"><a href="modals.php"><i class="nav-icon i-Duplicate-Window"></i><span class="item-name">Modals</span></a></li>
            <li class="nav-item"><a href="nouislider.php"><i class="nav-icon i-Width-Window"></i><span class="item-name">Sliders</span></a></li>
        </ul>
        <ul class="childNav" data-parent="sessions">
            <li class="nav-item"><a href="../sessions/signin.php"><i class="nav-icon i-Checked-User"></i><span class="item-name">Sign in</span></a></li>
            <li class="nav-item"><a href="../sessions/signup.php"><i class="nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
            <li class="nav-item"><a href="../sessions/forgot.php"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
        </ul>
        <ul class="childNav" data-parent="others">
            <!-- <li class="nav-item"><a href="../sessions/not-found.php"><i class="nav-icon i-Error-404-Window"></i><span class="item-name">Not Found</span></a></li>
            <li class="nav-item"><a href="user.profile.php"><i class="nav-icon i-Male"></i><span class="item-name">User Profile</span></a></li>
            <li class="nav-item"><a class="open" href="blank.php"><i class="nav-icon i-File-Horizontal"></i><span class="item-name">Blank Page</span></a></li> -->
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/addProducer"><i class="nav-icon i-Add-Cart"></i><span class="item-name">اضافة منتج</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/allProducer"><i class="nav-icon i-Shop"></i><span class="item-name">المنتجات المتاحة</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/notProducer"><i class="nav-icon i-Danger"></i><span class="item-name">غير متاح للبيع</span></a></li>
            <li class="nav-item"><a href="<?php echo $config['site'] ?>/deleteProducer"><i class="nav-icon i-Securiy-Remove"></i><span class="item-name">المنتجات المحذوفة</span></a></li>
        </ul>
        
    </div>
    <div class="sidebar-overlay"></div>
</div>