<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user p-3 text-white">
            <a href="pages-profile.html" class="d-flex align-items-center text-reset">
                <div class="flex-shrink-0">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow">
                </div>
                <div class="flex-grow-1 ms-2">
                    <span class="fw-semibold fs-15 d-block">Doris Larson</span>
                    <span class="fs-13">Founder</span>
                </div>
                <div class="ms-auto">
                    <i class="ri-arrow-right-s-fill fs-20"></i>
                </div>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title mt-1"> Main</li>

            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <i class="ri-dashboard-2-fill"></i>
                    <span class="badge bg-success float-end">9+</span>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                    <i class="ri-calendar-2-fill"></i>
                    <span> Calendar </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-chat.html" class="side-nav-link">
                    <i class="ri-chat-voice-fill"></i>
                    <span> Chat </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="ri-mail-fill"></i>
                    <span> Email </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-email-inbox.html">Inbox</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Read Email</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="ri-list-check-3"></i>
                    <span> Tasks </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-tasks.html">List</a>
                        </li>
                        <li>
                            <a href="apps-tasks-details.html">Details</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="apps-kanban.html" class="side-nav-link">
                    <i class="ri-clipboard-fill"></i>
                    <span> Kanban Board </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-file-manager.html" class="side-nav-link">
                    <i class="ri-folder-4-fill"></i>
                    <span class="badge bg-purple float-end">1 File</span>
                    <span> File Manager </span>
                </a>
            </li>

            <li class="side-nav-title mt-2">Custom</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="ri-pages-fill"></i>
                    <span> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="pages-profile.html">Profile</a>
                        </li>
                        <li>
                            <a href="pages-invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="pages-faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="pages-pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="pages-maintenance.html">Maintenance</a>
                        </li>
                        <li>
                            <a href="pages-starter.html">Starter Page</a>
                        </li>
                        <li>
                            <a href="pages-preloader.html">With Preloader</a>
                        </li>
                        <li>
                            <a href="pages-timeline.html">Timeline</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <i class="ri-group-2-fill"></i>
                    <span> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="auth-login.html">Login</a>
                        </li>
                        <li>
                            <a href="auth-login-2.html">Login 2</a>
                        </li>
                        <li>
                            <a href="auth-register.html">Register</a>
                        </li>
                        <li>
                            <a href="auth-register-2.html">Register 2</a>
                        </li>
                        <li>
                            <a href="auth-logout.html">Logout</a>
                        </li>
                        <li>
                            <a href="auth-logout-2.html">Logout 2</a>
                        </li>
                        <li>
                            <a href="auth-recoverpw.html">Recover Password</a>
                        </li>
                        <li>
                            <a href="auth-recoverpw-2.html">Recover Password 2</a>
                        </li>
                        <li>
                            <a href="auth-lock-screen.html">Lock Screen</a>
                        </li>
                        <li>
                            <a href="auth-lock-screen-2.html">Lock Screen 2</a>
                        </li>
                        <li>
                            <a href="auth-confirm-mail.html">Confirm Mail</a>
                        </li>
                        <li>
                            <a href="auth-confirm-mail-2.html">Confirm Mail 2</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError" class="side-nav-link">
                    <i class="ri-error-warning-fill"></i>
                    <span> Error Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesError">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="error-404.html">Error 404</a>
                        </li>
                        <li>
                            <a href="error-404-alt.html">Error 404-alt</a>
                        </li>
                        <li>
                            <a href="error-500.html">Error 500</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="ri-layout-3-fill"></i>
                    <span> Layouts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="layouts-horizontal.html" target="_blank">Horizontal</a>
                        </li>
                        <li>
                            <a href="layouts-detached.html" target="_blank">Detached</a>
                        </li>
                        <li>
                            <a href="layouts-full.html" target="_blank">Full View</a>
                        </li>
                        <li>
                            <a href="layouts-fullscreen.html" target="_blank">Fullscreen View</a>
                        </li>
                        <li>
                            <a href="layouts-hover.html" target="_blank">Hover Menu</a>
                        </li>
                        <li>
                            <a href="layouts-compact.html" target="_blank">Compact</a>
                        </li>
                        <li>
                            <a href="layouts-icon-view.html" target="_blank">Icon View</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title mt-2">Components</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                    <i class="ri-suitcase-fill"></i>
                    <span> Base UI </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBaseUI">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="ui-accordions.html">Accordions</a>
                        </li>
                        <li>
                            <a href="ui-alerts.html">Alerts</a>
                        </li>
                        <li>
                            <a href="ui-avatars.html">Avatars</a>
                        </li>
                        <li>
                            <a href="ui-badges.html">Badges</a>
                        </li>
                        <li>
                            <a href="ui-breadcrumb.html">Breadcrumb</a>
                        </li>
                        <li>
                            <a href="ui-buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="ui-cards.html">Cards</a>
                        </li>
                        <li>
                            <a href="ui-carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="ui-collapse.html">Collapse</a>
                        </li>
                        <li>
                            <a href="ui-dropdowns.html">Dropdowns</a>
                        </li>
                        <li>
                            <a href="ui-embed-video.html">Embed Video</a>
                        </li>
                        <li>
                            <a href="ui-grid.html">Grid</a>
                        </li>
                        <li>
                            <a href="ui-links.html">Links</a>
                        </li>
                        <li>
                            <a href="ui-list-group.html">List Group</a>
                        </li>
                        <li>
                            <a href="ui-modals.html">Modals</a>
                        </li>
                        <li>
                            <a href="ui-notifications.html">Notifications</a>
                        </li>
                        <li>
                            <a href="ui-offcanvas.html">Offcanvas</a>
                        </li>
                        <li>
                            <a href="ui-placeholders.html">Placeholders</a>
                        </li>
                        <li>
                            <a href="ui-pagination.html">Pagination</a>
                        </li>
                        <li>
                            <a href="ui-popovers.html">Popovers</a>
                        </li>
                        <li>
                            <a href="ui-progress.html">Progress</a>
                        </li>
                        <li>
                            <a href="ui-spinners.html">Spinners</a>
                        </li>
                        <li>
                            <a href="ui-tabs.html">Tabs</a>
                        </li>
                        <li>
                            <a href="ui-tooltips.html">Tooltips</a>
                        </li>
                        <li>
                            <a href="ui-typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="ui-utilities.html">Utilities</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                    <i class="ri-paint-brush-fill"></i>
                    <span> Extended UI </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarExtendedUI">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="extended-dragula.html">Dragula</a>
                        </li>
                        <li>
                            <a href="extended-range-slider.html">Range Slider</a>
                        </li>
                        <li>
                            <a href="extended-ratings.html">Ratings</a>
                        </li>
                        <li>
                            <a href="extended-scrollbar.html">Scrollbar</a>
                        </li>
                        <li>
                            <a href="extended-scrollspy.html">Scrollspy</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="widgets.html" class="side-nav-link">
                    <i class="ri-cup-fill"></i>
                    <span> Widgets </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                    <i class="ri-copper-diamond-fill"></i>
                    <span> Icons </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarIcons">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="icons-remixicons.html">Remix Icons</a>
                        </li>
                        <li>
                            <a href="icons-bootstrap.html">Bootstrap Icons</a>
                        </li>
                        <li>
                            <a href="icons-material-symbol.html">Material Symbol Icons</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                    <i class="ri-bubble-chart-fill"></i>
                    <span> Charts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCharts">
                    <ul class="side-nav-second-level">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts">
                                <span> Apex Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarApexCharts">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="charts-apex-area.html">Area</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-bar.html">Bar</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-bubble.html">Bubble</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-candlestick.html">Candlestick</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-column.html">Column</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-heatmap.html">Heatmap</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-line.html">Line</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-mixed.html">Mixed</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-timeline.html">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-boxplot.html">Boxplot</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-treemap.html">Treemap</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-pie.html">Pie</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-radar.html">Radar</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-radialbar.html">RadialBar</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-scatter.html">Scatter</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-polar-area.html">Polar Area</a>
                                    </li>
                                    <li>
                                        <a href="charts-apex-sparklines.html">Sparklines</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarChartJSCharts" aria-expanded="false" aria-controls="sidebarChartJSCharts">
                                <span> ChartJS </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarChartJSCharts">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="charts-chartjs-area.html">Area</a>
                                    </li>
                                    <li>
                                        <a href="charts-chartjs-bar.html">Bar</a>
                                    </li>
                                    <li>
                                        <a href="charts-chartjs-line.html">Line</a>
                                    </li>
                                    <li>
                                        <a href="charts-chartjs-other.html">Other</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                    <i class="ri-survey-fill"></i>
                    <span> Forms </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarForms">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="form-elements.html">Basic Elements</a>
                        </li>
                        <li>
                            <a href="form-advanced.html">Form Advanced</a>
                        </li>
                        <li>
                            <a href="form-validation.html">Validation</a>
                        </li>
                        <li>
                            <a href="form-wizard.html">Wizard</a>
                        </li>
                        <li>
                            <a href="form-fileuploads.html">File Uploads</a>
                        </li>
                        <li>
                            <a href="form-editors.html">Editors</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                    <i class="ri-table-fill"></i>
                    <span> Tables </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTables">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="tables-basic.html">Basic Tables</a>
                        </li>
                        <li>
                            <a href="tables-datatable.html">Data Tables</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                    <i class="ri-map-2-fill"></i>
                    <span> Maps </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMaps">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="maps-google.html">Google Maps</a>
                        </li>
                        <li>
                            <a href="maps-vector.html">Vector Maps</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                    <i class="ri-share-fill"></i>
                    <span> Multi Level </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMultiLevel">
                    <ul class="side-nav-second-level">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                <span> Second Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSecondLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="javascript: void(0);">Item 1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                <span> Third Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThirdLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="javascript: void(0);">Item 1</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="ui-buttons.html#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                            <span> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarFourthLevel">
                                            <ul class="side-nav-forth-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>