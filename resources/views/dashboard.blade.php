<x-app-layout>
     <!-- BEGIN: Mobile Menu -->
     <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Midone - HTML Admin Template" class="w-6" src="{{Vite::asset('resources/images/logo.svg')}}">
            </a>
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            <ul class="scrollable__content py-2">
                <li>
                    <a href="javascript:;.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a href="side-menu-light-dashboard-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="menu menu--active">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-4.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 4 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="box"></i> </div>
                        <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-dashboard-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                        <div class="menu__title"> E-Commerce <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-categories.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Categories </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-add-product.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Add Product </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Products <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-product-list.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Product List</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-product-grid.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Product Grid</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Transactions <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-transaction-list.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Transaction List</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-transaction-detail.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Transaction Detail</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Sellers <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-seller-list.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Seller List</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-seller-detail.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Seller Detail</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-reviews.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Reviews </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-inbox.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                        <div class="menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-point-of-sale.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                        <div class="menu__title"> Point of Sale </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-chat.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                        <div class="menu__title"> Chat </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-post.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                        <div class="menu__title"> Post </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-calendar.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                        <div class="menu__title"> Calendar </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="edit"></i> </div>
                        <div class="menu__title"> Crud <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-crud-data-list.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Data List </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-crud-form.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Form </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="users"></i> </div>
                        <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-users-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Layout 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Layout 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Layout 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                        <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-profile-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                        <div class="menu__title"> Pages <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Wizards <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Blog <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-blog-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Pricing <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Invoice <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> FAQ <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-faq-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-light-login.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-update-profile.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-change-password.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                        <div class="menu__title"> Components <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Table <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-regular-table.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-tabulator.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overlay <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-modal.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-slide-over.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Slide Over</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-notification.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Notification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-tab.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Tab </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-accordion.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-button.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-alert.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-progress-bar.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tooltip.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dropdown.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-typography.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-icon.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-loading-icon.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="sidebar"></i> </div>
                        <div class="menu__title"> Forms <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-form.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-datepicker.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tom-select.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Tom Select </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-file-upload.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Classic</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Inline</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Balloon</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Balloon Block</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Document</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-validation.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="menu__title"> Widgets <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-chart.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slider.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-image-zoom.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] mt-12 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
        <div class="h-full flex items-center">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="Midone - HTML Admin Template" class="w-6" src="{{Vite::asset('resources/images/logo.svg')}}">
                <span class="text-white text-lg ml-3"> Icewall </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                    <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                </div>
                <a class="notification notification--light sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                <div class="ml-3">Users & Permissions</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                <div class="ml-3">Transactions Report</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/profile-1.jpg')}}">
                                </div>
                                <div class="ml-3">Russell Crowe</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">russellcrowe@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/profile-11.jpg')}}">
                                </div>
                                <div class="ml-3">Denzel Washington</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">denzelwashington@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/profile-3.jpg')}}">
                                </div>
                                <div class="ml-3">Arnold Schwarzenegger</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">arnoldschwarzenegger@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/profile-11.jpg')}}">
                                </div>
                                <div class="ml-3">Johnny Depp</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/preview-14.jpg')}}">
                            </div>
                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/preview-8.jpg')}}">
                            </div>
                            <div class="ml-3">Sony A7 III</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/preview-5.jpg')}}">
                            </div>
                            <div class="ml-3">Nike Tanjun</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/preview-8.jpg')}}">
                            </div>
                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-4 sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-content">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/profile-1.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/profile-11.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/profile-3.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Arnold Schwarzenegger</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/profile-11.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{Vite::asset('resources/images/profile-4.jpg')}}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-4.jpg')}}">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                        <li class="p-2">
                            <div class="font-medium">Russell Crowe</div>
                            <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Software Engineer</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <div class="wrapper">
        <div class="wrapper-box">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <ul>
                    <li>
                        <a href="javascript:;.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="side-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="side-menu side-menu--active">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-4.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 4 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                            <div class="side-menu__title">
                                Menu Layout
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Side Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Simple Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="top-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Top Menu </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="side-menu__title">
                                E-Commerce
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-categories.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Categories </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-add-product.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Add Product </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Products
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-product-list.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Product List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-product-grid.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Product Grid</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Transactions
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-transaction-list.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Transaction List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-transaction-detail.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Transaction Detail</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Sellers
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-seller-list.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Seller List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-seller-detail.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Seller Detail</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-reviews.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Reviews </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-inbox.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="side-menu__title"> Inbox </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-manager.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="side-menu__title"> File Manager </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-point-of-sale.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="credit-card"></i> </div>
                            <div class="side-menu__title"> Point of Sale </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-chat.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="message-square"></i> </div>
                            <div class="side-menu__title"> Chat </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-post.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Post </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-calendar.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                            <div class="side-menu__title"> Calendar </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="edit"></i> </div>
                            <div class="side-menu__title">
                                Crud
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-crud-data-list.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Data List </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-crud-form.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Form </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="side-menu__title">
                                Users
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="trello"></i> </div>
                            <div class="side-menu__title">
                                Profile
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-profile-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="layout"></i> </div>
                            <div class="side-menu__title">
                                Pages
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Wizards
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Blog
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Pricing
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-pricing-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-pricing-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Invoice
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-invoice-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-invoice-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        FAQ
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-faq-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="login-light-login.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Login </div>
                                </a>
                            </li>
                            <li>
                                <a href="login-light-register.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Register </div>
                                </a>
                            </li>
                            <li>
                                <a href="main-light-error-page.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-update-profile.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-change-password.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="side-menu__title">
                                Components
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Table
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-regular-table.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Regular Table</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-tabulator.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Tabulator</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Overlay
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-modal.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Modal</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-slide-over.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Slide Over</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-notification.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Notification</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-tab.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Tab </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-accordion.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Accordion </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-button.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Button </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-alert.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Alert </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-progress-bar.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Progress Bar </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tooltip.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Tooltip </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dropdown.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Dropdown </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-typography.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Typography </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-icon.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Icon </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-loading-icon.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Loading Icon </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="sidebar"></i> </div>
                            <div class="side-menu__title">
                                Forms
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-form.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Regular Form </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-datepicker.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Datepicker </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tom-select.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Tom Select </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-file-upload.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> File Upload </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Wysiwyg Editor
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-classic.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Classic</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-inline.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Inline</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Balloon</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Balloon Block</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-document.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Document</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-validation.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Validation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="side-menu__title">
                                Widgets
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-chart.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Chart </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slider.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Slider </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-image-zoom.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Image Zoom </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 2xl:col-span-9">
                        <div class="grid grid-cols-12 gap-6">
                            <!-- BEGIN: Notification -->
                            <div class="col-span-12 mt-6 -mb-6 intro-y">
                                <div class="alert alert-dismissible show box bg-primary text-white flex items-center mb-6" role="alert">
                                    <span>Introducing new dashboard! Download now at <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">themeforest.net</a>.</span>
                                    <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
                                </div>
                            </div>
                            <!-- BEGIN: Notification -->
                            <!-- BEGIN: General Report -->
                            <div class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        General Report
                                    </h2>
                                    <select class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box">
                                        <option value="daily">Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                        <option value="custom-date">Custom Date</option>
                                    </select>
                                </div>
                                <div class="report-box-2 intro-y mt-12 sm:mt-5">
                                    <div class="box sm:flex">
                                        <div class="px-8 py-12 flex flex-col justify-center flex-1">
                                            <i data-lucide="shopping-bag" class="w-10 h-10 text-warning"></i>
                                            <div class="relative text-3xl font-medium mt-12 pl-4 ml-0.5"> <span class="absolute text-2xl font-medium top-0 left-0 -ml-0.5">$</span> 54.143 </div>
                                            <div class="report-box-2__indicator bg-success tooltip cursor-pointer" title="47% Higher than last month"> 47% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                            <div class="mt-4 text-slate-500">Sales earnings this month after associated author fees, & before taxes.</div>
                                            <button class="btn btn-outline-secondary relative justify-start rounded-full mt-12">
                                                Download Reports
                                                <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5"> <i data-lucide="arrow-right" class="w-4 h-4"></i> </span>
                                            </button>
                                        </div>
                                        <div class="px-8 py-12 flex flex-col justify-center flex-1 border-t sm:border-t-0 sm:border-l border-slate-200 dark:border-darkmode-300 border-dashed">
                                            <div class="text-slate-500 text-xs">TOTAL TRANSACTION</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">4.501</div>
                                                <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2" title="2% Lower than last month"> 2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i> </div>
                                            </div>
                                            <div class="text-slate-500 text-xs mt-5">CANCELATION CASE</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">2</div>
                                                <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2" title="0.1% Lower than last month"> 0.1% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i> </div>
                                            </div>
                                            <div class="text-slate-500 text-xs mt-5">GROSS RENTAL VALUE</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">$72.000</div>
                                                <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="49% Higher than last month"> 49% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                            </div>
                                            <div class="text-slate-500 text-xs mt-5">GROSS RENTAL PROFIT</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">$54.000</div>
                                                <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="52% Higher than last month"> 52% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                            </div>
                                            <div class="text-slate-500 text-xs mt-5">NEW USERS</div>
                                            <div class="mt-1.5 flex items-center">
                                                <div class="text-base">2.500</div>
                                                <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="52% Higher than last month"> 52% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: General Report -->
                            <!-- BEGIN: Visitors -->
                            <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 mt-2">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Visitors
                                    </h2>
                                    <a href="" class="ml-auto text-primary truncate">View on Map</a>
                                </div>
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <div class="flex items-center">
                                            Realtime active users
                                            <div class="dropdown ml-auto">
                                                <a class="dropdown-toggle w-5 h-5 block -mr-2" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i> </a>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export </a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-2xl font-medium mt-2">214</div>
                                        <div class="border-b border-slate-200 flex pb-2 mt-4">
                                            <div class="text-slate-500 text-xs">Page views per second</div>
                                            <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-auto" title="49% Lower than last month"> 49% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                        </div>
                                        <div class="mt-2 border-b broder-slate-200">
                                            <div class="-mb-1.5 -ml-2.5">
                                                <div class="h-[79px]">
                                                    <canvas id="report-bar-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-slate-500 text-xs border-b border-slate-200 flex mb-2 pb-2 mt-4">
                                            <div>Top Active Pages</div>
                                            <div class="ml-auto">Active Users</div>
                                        </div>
                                        <div class="flex">
                                            <div>/letz-lara…review/2653</div>
                                            <div class="ml-auto">472</div>
                                        </div>
                                        <div class="flex mt-1.5">
                                            <div>/midone…review/1674</div>
                                            <div class="ml-auto">294</div>
                                        </div>
                                        <div class="flex mt-1.5">
                                            <div>/profile…review/46789</div>
                                            <div class="ml-auto">83</div>
                                        </div>
                                        <div class="flex mt-1.5">
                                            <div>/profile…review/24357</div>
                                            <div class="ml-auto">21</div>
                                        </div>
                                        <button class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-4">Real-Time Report</button>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Visitors -->
                            <!-- BEGIN: Users By Age -->
                            <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 mt-2 lg:mt-6 xl:mt-2">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Users By Age
                                    </h2>
                                    <a href="" class="ml-auto text-primary truncate">Show More</a>
                                </div>
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <ul class=" nav nav-pills w-4/5 bg-slate-100 dark:bg-black/20 rounded-md mx-auto " role="tablist" >
                                            <li id="active-users-tab" class="nav-item flex-1" role="presentation">
                                                <button class="nav-link w-full py-1.5 px-2 active" data-tw-toggle="pill" data-tw-target="#active-users" type="button" role="tab" aria-controls="active-users" aria-selected="true" > Active </button>
                                            </li>
                                            <li id="inactive-users-tab" class="nav-item flex-1" role="presentation">
                                                <button class="nav-link w-full py-1.5 px-2" data-tw-toggle="pill" data-tw-target="#inactive-users" type="button" role="tab" aria-selected="false" > Inactive </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-6">
                                            <div class="tab-pane active" id="active-users" role="tabpanel" aria-labelledby="active-users-tab">
                                                <div class="relative">
                                                    <div class="h-[208px]">
                                                        <canvas class="mt-3" id="report-donut-chart"></canvas>
                                                    </div>
                                                    <div class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0">
                                                        <div class="text-2xl font-medium">2.501</div>
                                                        <div class="text-slate-500 mt-0.5">Active Users</div>
                                                    </div>
                                                </div>
                                                <div class="w-52 sm:w-auto mx-auto mt-5">
                                                    <div class="flex items-center">
                                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                                        <span class="truncate">17 - 30 Years old</span> <span class="font-medium ml-auto">62%</span>
                                                    </div>
                                                    <div class="flex items-center mt-4">
                                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                                        <span class="truncate">31 - 50 Years old</span> <span class="font-medium ml-auto">33%</span>
                                                    </div>
                                                    <div class="flex items-center mt-4">
                                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                                        <span class="truncate">>= 50 Years old</span> <span class="font-medium ml-auto">10%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Users By Age -->
                            <!-- BEGIN: Official Store -->
                            <div class="col-span-12 lg:col-span-8 mt-6">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Official Store
                                    </h2>
                                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                                        <i data-lucide="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                                        <input type="text" class="form-control sm:w-56 box pl-10" placeholder="Filter by city">
                                    </div>
                                </div>
                                <div class="intro-y box p-5 mt-12 sm:mt-5">
                                    <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                                    <div class="report-maps mt-5 bg-slate-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                                </div>
                            </div>
                            <!-- END: Official Store -->
                            <!-- BEGIN: Weekly Best Sellers -->
                            <div class="col-span-12 xl:col-span-4 mt-6">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Weekly Best Sellers
                                    </h2>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-y">
                                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                                <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-10.jpg')}}">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Angelina Jolie</div>
                                                <div class="text-slate-500 text-xs mt-0.5">6 February 2022</div>
                                            </div>
                                            <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                        </div>
                                    </div>
                                    <div class="intro-y">
                                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                                <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-7.jpg')}}">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Keanu Reeves</div>
                                                <div class="text-slate-500 text-xs mt-0.5">3 January 2021</div>
                                            </div>
                                            <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                        </div>
                                    </div>
                                    <div class="intro-y">
                                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                                <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-15.jpg')}}">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Johnny Depp</div>
                                                <div class="text-slate-500 text-xs mt-0.5">21 September 2022</div>
                                            </div>
                                            <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                        </div>
                                    </div>
                                    <div class="intro-y">
                                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                                <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-13.jpg')}}">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Kevin Spacey</div>
                                                <div class="text-slate-500 text-xs mt-0.5">2 November 2020</div>
                                            </div>
                                            <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                        </div>
                                    </div>
                                    <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                                </div>
                            </div>
                            <!-- END: Weekly Best Sellers -->
                            <!-- BEGIN: Ads 1 -->
                            <div class="col-span-12 lg:col-span-6 mt-6">
                                <div class="box p-8 relative overflow-hidden bg-primary intro-y">
                                    <div class="leading-[2.15rem] w-full sm:w-72 text-white text-xl -mt-3">Transact safely with Lender’s Fund Account (RDL)</div>
                                    <div class="w-full sm:w-72 leading-relaxed text-white/70 dark:text-slate-500 mt-3">Apply now, quick registration.</div>
                                    <button class="btn w-32 bg-white dark:bg-darkmode-800 dark:text-white mt-6 sm:mt-10">Start Now</button>
                                    <img class="hidden sm:block absolute top-0 right-0 w-2/5 -mt-3 mr-2" alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/woman-illustration.svg')}}">
                                </div>
                            </div>
                            <!-- END: Ads 1 -->
                            <!-- BEGIN: Ads 2 -->
                            <div class="col-span-12 lg:col-span-6 mt-6">
                                <div class="box p-8 relative overflow-hidden intro-y">
                                    <div class="leading-[2.15rem] w-full sm:w-52 text-primary dark:text-white text-xl -mt-3">Invite friends to get <span class="font-medium">FREE</span> bonuses!</div>
                                    <div class="w-full sm:w-60 leading-relaxed text-slate-500 mt-2">Get a IDR 100,000 voucher by inviting your friends to fund #BecomeMember</div>
                                    <div class="w-48 relative mt-6 cursor-pointer tooltip" title="Copy referral link">
                                        <input type="text" class="form-control" value="https://dashboard.in">
                                        <i data-lucide="copy" class="absolute right-0 top-0 bottom-0 my-auto mr-4 w-4 h-4"></i>
                                    </div>
                                    <img class="hidden sm:block absolute top-0 right-0 w-1/2 mt-1 -mr-12" alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/phone-illustration.svg')}}">
                                </div>
                            </div>
                            <!-- END: Ads 2 -->
                            <!-- BEGIN: Weekly Top Products -->
                            <div class="col-span-12 mt-6">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Weekly Top Products
                                    </h2>
                                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                                        <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                                        <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                                    </div>
                                </div>
                                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                    <table class="table table-report sm:mt-2">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap">IMAGES</th>
                                                <th class="whitespace-nowrap">PRODUCT NAME</th>
                                                <th class="text-center whitespace-nowrap">STOCK</th>
                                                <th class="text-center whitespace-nowrap">STATUS</th>
                                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-8.jpg')}}" title="Uploaded at 6 February 2022">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-1.jpg')}}" title="Uploaded at 30 November 2022">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-15.jpg')}}" title="Uploaded at 23 April 2022">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a>
                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                                                </td>
                                                <td class="text-center">50</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-8.jpg')}}" title="Uploaded at 3 January 2021">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-8.jpg')}}" title="Uploaded at 15 March 2021">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-10.jpg')}}" title="Uploaded at 20 May 2021">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a>
                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                                                </td>
                                                <td class="text-center">69</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-7.jpg')}}" title="Uploaded at 21 September 2022">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-7.jpg')}}" title="Uploaded at 19 December 2020">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-8.jpg')}}" title="Uploaded at 20 November 2022">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a>
                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                                                </td>
                                                <td class="text-center">117</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-13.jpg')}}" title="Uploaded at 2 November 2020">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-10.jpg')}}" title="Uploaded at 19 March 2021">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{Vite::asset('resources/images/preview-8.jpg')}}" title="Uploaded at 1 June 2021">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Sony A7 III</a>
                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                                                </td>
                                                <td class="text-center">147</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                                    <nav class="w-full sm:w-auto sm:mr-auto">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                                            </li>
                                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                            <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <select class="w-20 form-select box mt-3 sm:mt-0">
                                        <option>10</option>
                                        <option>25</option>
                                        <option>35</option>
                                        <option>50</option>
                                    </select>
                                </div>
                            </div>
                            <!-- END: Weekly Top Products -->
                        </div>
                    </div>
                    <div class="col-span-12 2xl:col-span-3">
                        <div class="2xl:border-l -mb-10 pb-10">
                            <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                                <!-- BEGIN: Important Notes -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-12 mt-3 2xl:mt-8">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-auto">
                                            Important Notes
                                        </h2>
                                        <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                                        <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                                    </div>
                                    <div class="mt-5 intro-x">
                                        <div class="box zoom-in">
                                            <div class="tiny-slider" id="important-notes">
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                    <div class="text-slate-400 mt-1">20 Hours ago</div>
                                                    <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                    <div class="font-medium flex mt-5">
                                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                                    </div>
                                                </div>
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                    <div class="text-slate-400 mt-1">20 Hours ago</div>
                                                    <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                    <div class="font-medium flex mt-5">
                                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                                    </div>
                                                </div>
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                    <div class="text-slate-400 mt-1">20 Hours ago</div>
                                                    <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                    <div class="font-medium flex mt-5">
                                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Important Notes -->
                                <!-- BEGIN: Recent Activities -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Recent Activities
                                        </h2>
                                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                                    </div>
                                    <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                                        <div class="intro-x relative flex items-center mb-3">
                                            <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-3.jpg')}}">
                                                </div>
                                            </div>
                                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Al Pacino</div>
                                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                                </div>
                                                <div class="text-slate-500 mt-1">Has joined the team</div>
                                            </div>
                                        </div>
                                        <div class="intro-x relative flex items-center mb-3">
                                            <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-4.jpg')}}">
                                                </div>
                                            </div>
                                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Al Pacino</div>
                                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                                </div>
                                                <div class="text-slate-500">
                                                    <div class="mt-1">Added 3 new photos</div>
                                                    <div class="flex mt-2">
                                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Nikon Z6">
                                                            <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="{{Vite::asset('resources/images/preview-11.jpg')}}">
                                                        </div>
                                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Dell XPS 13">
                                                            <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="{{Vite::asset('resources/images/preview-11.jpg')}}">
                                                        </div>
                                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Nikon Z6">
                                                            <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="{{Vite::asset('resources/images/preview-1.jpg')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                                        <div class="intro-x relative flex items-center mb-3">
                                            <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-15.jpg')}}">
                                                </div>
                                            </div>
                                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Denzel Washington</div>
                                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                                </div>
                                                <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">Nike Tanjun</a> price and description</div>
                                            </div>
                                        </div>
                                        <div class="intro-x relative flex items-center mb-3">
                                            <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-4.jpg')}}">
                                                </div>
                                            </div>
                                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Johnny Depp</div>
                                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                                </div>
                                                <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">Samsung Q90 QLED TV</a> description</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Recent Activities -->
                                <!-- BEGIN: Transactions -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Transactions
                                        </h2>
                                    </div>
                                    <div class="mt-5">
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-10.jpg')}}">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Angelina Jolie</div>
                                                    <div class="text-slate-500 text-xs mt-0.5">6 February 2022</div>
                                                </div>
                                                <div class="text-danger">-$45</div>
                                            </div>
                                        </div>
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-7.jpg')}}">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Keanu Reeves</div>
                                                    <div class="text-slate-500 text-xs mt-0.5">3 January 2021</div>
                                                </div>
                                                <div class="text-success">+$37</div>
                                            </div>
                                        </div>
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-15.jpg')}}">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Johnny Depp</div>
                                                    <div class="text-slate-500 text-xs mt-0.5">21 September 2022</div>
                                                </div>
                                                <div class="text-success">+$213</div>
                                            </div>
                                        </div>
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-13.jpg')}}">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Kevin Spacey</div>
                                                    <div class="text-slate-500 text-xs mt-0.5">2 November 2020</div>
                                                </div>
                                                <div class="text-success">+$195</div>
                                            </div>
                                        </div>
                                        <div class="intro-x">
                                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                    <img alt="Midone - HTML Admin Template" src="{{Vite::asset('resources/images/profile-15.jpg')}}">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium">Christian Bale</div>
                                                    <div class="text-slate-500 text-xs mt-0.5">26 September 2020</div>
                                                </div>
                                                <div class="text-success">+$40</div>
                                            </div>
                                        </div>
                                        <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                                    </div>
                                </div>
                                <!-- END: Transactions -->
                                <!-- BEGIN: Schedules -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Schedules
                                        </h2>
                                        <a href="" class="ml-auto text-primary truncate flex items-center"> <i data-lucide="plus" class="w-4 h-4 mr-1"></i> Add New Schedules </a>
                                    </div>
                                    <div class="mt-5">
                                        <div class="intro-x box">
                                            <div class="p-5">
                                                <div class="flex">
                                                    <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                                    <div class="font-medium text-base mx-auto">April</div>
                                                    <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                                </div>
                                                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                                    <div class="font-medium">Su</div>
                                                    <div class="font-medium">Mo</div>
                                                    <div class="font-medium">Tu</div>
                                                    <div class="font-medium">We</div>
                                                    <div class="font-medium">Th</div>
                                                    <div class="font-medium">Fr</div>
                                                    <div class="font-medium">Sa</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">29</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">30</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">31</div>
                                                    <div class="py-0.5 rounded relative">1</div>
                                                    <div class="py-0.5 rounded relative">2</div>
                                                    <div class="py-0.5 rounded relative">3</div>
                                                    <div class="py-0.5 rounded relative">4</div>
                                                    <div class="py-0.5 rounded relative">5</div>
                                                    <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                                    <div class="py-0.5 rounded relative">7</div>
                                                    <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                                    <div class="py-0.5 rounded relative">9</div>
                                                    <div class="py-0.5 rounded relative">10</div>
                                                    <div class="py-0.5 rounded relative">11</div>
                                                    <div class="py-0.5 rounded relative">12</div>
                                                    <div class="py-0.5 rounded relative">13</div>
                                                    <div class="py-0.5 rounded relative">14</div>
                                                    <div class="py-0.5 rounded relative">15</div>
                                                    <div class="py-0.5 rounded relative">16</div>
                                                    <div class="py-0.5 rounded relative">17</div>
                                                    <div class="py-0.5 rounded relative">18</div>
                                                    <div class="py-0.5 rounded relative">19</div>
                                                    <div class="py-0.5 rounded relative">20</div>
                                                    <div class="py-0.5 rounded relative">21</div>
                                                    <div class="py-0.5 rounded relative">22</div>
                                                    <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                                    <div class="py-0.5 rounded relative">24</div>
                                                    <div class="py-0.5 rounded relative">25</div>
                                                    <div class="py-0.5 rounded relative">26</div>
                                                    <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                                    <div class="py-0.5 rounded relative">28</div>
                                                    <div class="py-0.5 rounded relative">29</div>
                                                    <div class="py-0.5 rounded relative">30</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">1</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">2</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">3</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">4</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">5</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">6</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">7</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">8</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">9</div>
                                                </div>
                                            </div>
                                            <div class="border-t border-slate-200/60 p-5">
                                                <div class="flex items-center">
                                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                                    <span class="truncate">UI/UX Workshop</span> <span class="font-medium xl:ml-auto">23th</span>
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                                    <span class="truncate">VueJs Frontend Development</span> <span class="font-medium xl:ml-auto">10th</span>
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                                    <span class="truncate">Laravel Rest API</span> <span class="font-medium xl:ml-auto">31th</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Schedules -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="side-menu-dark-dashboard-overview-2.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
        <div class="dark-mode-switcher__toggle border"></div>
    </div>
    <!-- END: Dark Mode Switcher-->

</x-app-layout>
