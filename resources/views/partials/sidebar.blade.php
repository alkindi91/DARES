<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>&nbsp;</h3>
                            {!! $SidebarMenu->asUl(['class'=>'nav side-menu']) !!}
                            {{-- <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> الرئيسية <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="admin/template/index.php">لوحة التحكم</a>
                                        </li>
                                        <li><a href="admin/template/index2.php">لوحة التحكم 2</a>
                                        </li>
                                        <li><a href="admin/template/index3.php">لوحة التحكم 3</a>
                                        </li>
                                        <li><a href="admin/academy_structure/faculties/index.php">الهيكل</a>
                                        </li>
                                        <li><a href="admin/subject/element/index.php?lesid=1">عناصر الدرس</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> الفورمات <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="admin/template/form.php">فورمات عامة</a>
                                        </li>
                                        <li><a href="admin/template/form_advanced.php">عناصر متقدمة</a>
                                        </li>
                                        <li><a href="admin/template/form_validation.php">التحقق من الفورماتا</a>
                                        </li>
                                        <li><a href="admin/template/form_wizards.php">معالج الفورم</a>
                                        </li>
                                        <li><a href="admin/template/form_upload.php">فورم الرفع</a>
                                        </li>
                                        <li><a href="admin/template/form_buttons.php">ازرار الفورم</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> عناصر الواجهة <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="admin/template/general_elements.php">عناصر عامة</a>
                                        </li>
                                        <li><a href="admin/template/media_gallery.php">البوم الصور</a>
                                        </li>
                                        <li><a href="admin/template/typography.php">الطباعة</a>
                                        </li>
                                        <li><a href="admin/template/icons.php">الايقونات</a>
                                        </li>
                                        <li><a href="admin/template/glyphicons.php">ايقونات Glyphicons</a>
                                        </li>
                                        <li><a href="admin/template/widgets.php">الودجت</a>
                                        </li>
                                        <li><a href="admin/template/invoice.php">الفاتورة</a>
                                        </li>
                                        <li><a href="admin/template/inbox.php">صندوق الرسائل</a>
                                        </li>
                                        <li><a href="admin/template/calender.php">التقويم</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> الجداول <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="admin/template/tables.php">الجداول</a>
                                        </li>
                                        <li><a href="admin/template/tables_dynamic.php">جداول ديناميكية</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> عرض البيانات <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="admin/template/chartjs.php">Chart JS</a>
                                        </li>
                                        <li><a href="admin/template/chartjs2.php">Chart JS2</a>
                                        </li>
                                        <li><a href="admin/template/morisjs.php">Moris JS</a>
                                        </li>
                                        <li><a href="admin/template/echarts.php">ECharts </a>
                                        </li>
                                        <li><a href="admin/template/other_charts.php">أنواع أخرى </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </div>
                      {{--   <div class="menu_section">
                            <h3></h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> صفحات اضافية <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="admin/template/e_commerce.php">التجارة الالكترونية</a>
                                        </li>
                                        <li><a href="admin/template/projects.php">المشاريع</a>
                                        </li>
                                        <li><a href="admin/template/project_detail.php">تفاصيل المشروع</a>
                                        </li>
                                        <li><a href="admin/template/contacts.php">جهات الاتصال</a>
                                        </li>
                                        <li><a href="admin/template/profile.php">الصفحة الشخصية</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-windows"></i> اكسترا <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="admin/template/page_404.php">صفحة 404</a>
                                        </li>
                                        <li><a href="admin/template/page_500.php">عطب 500</a>
                                        </li>
                                        <li><a href="admin/template/plain_page.php">صفحة فارغة</a>
                                        </li>
                                        <li><a href="admin/template/login.php">صفحة الدخول</a>
                                        </li>
                                        <li><a href="admin/template/pricing_tables.php">جداول الاسعار</a>
                                        </li>

                                    </ul>
                                </li>
                                
                            </ul>
                        </div> --}}

                    </div>
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small" style="display:<?php echo (isset($_SESSION['sidebar_show']) || isset($_COOKIE['sidebar_show'])) ? "none" : 'block' ?>">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" href='admin/logout.php' data-placement="top" title="تسجيل الخروج">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->