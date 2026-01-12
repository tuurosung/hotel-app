<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('images/logo.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('images/logo.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">

            <li>
                <a href="email.html">
                    <i class="fi fi-rr-briefcase menu-icon"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- <li>
                <a href="chat-message.html">
                    <i class="fi fi-rr-bed-alt menu-icon"></i>
                    <span>Room Management</span>
                </a>
            </li> -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <i class="fi fi-rr-bed-alt menu-icon"></i>
                    <span>Room Management</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="invoice-list.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Rooms
                        </a>
                    </li>
                    <li>
                        <a href="invoice-preview.html"><i
                                class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                            Room Types
                        </a>
                    </li>
                    <li>
                        <a href="invoice-add.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                            Room Categories
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="chat-message.html">
                    <i class="fi fi-rr-daily-calendar menu-icon"></i>
                    <span>Bookings</span>
                </a>
            </li>
            <li>
                <a href="chat-message.html">
                    <i class="fi fi-rr-calendar-lines  menu-icon"></i>
                    <span>Reservations</span>
                </a>
            </li>
            <li>
                <a href="chat-message.html">
                    <i class="fi fi-rr-calendar-lines  menu-icon"></i>
                    <span>Guests</span>
                </a>
            </li>
            <li>
                <a href="chat-message.html">
                    <i class="fi fi-rr-calendar-lines  menu-icon"></i>
                    <span>Invoices</span>
                </a>
            </li>
            <li>
                <a href="chat-message.html">
                    <i class="fi fi-rr-calendar-lines  menu-icon"></i>
                    <span>Payments</span>
                </a>
            </li>
            <li>
                <a href="chat-message.html">
                    <i class="fi fi-rr-calendar-lines  menu-icon"></i>
                    <span>Expenditure</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <i class="ri-robot-2-line text-xl me-14 d-flex w-auto"></i>
                    <span>Auxilliary Services</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="text-generator.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Laundry
                        </a>
                    </li>
                    <li>
                        <a href="code-generator.html"><i
                                class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Car Wash
                        </a>
                    </li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
                    <span>Chart</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="line-chart.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Line Chart</a>
                    </li>
                    <li>
                        <a href="column-chart.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                            Column
                            Chart</a>
                    </li>
                    <li>
                        <a href="pie-chart.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                            Pie Chart</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="widgets.html">
                    <iconify-icon icon="fe:vector" class="menu-icon"></iconify-icon>
                    <span>Widgets</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                    <span>Users</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="users-list.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Users List</a>
                    </li>
                    <li>
                        <a href="users-grid.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                            Users Grid</a>
                    </li>
                    <li>
                        <a href="add-user.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add
                            User</a>
                    </li>
                    <li>
                        <a href="view-profile.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            View
                            Profile</a>
                    </li>
                    <li>
                        <a href="users-role-permission.html"><i
                                class="ri-circle-fill circle-icon text-info-main w-auto"></i> User
                            Role & Permission</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <i class="ri-user-settings-line text-xl me-14 d-flex w-auto"></i>
                    <span>Role & Access</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="role-access.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Role &
                            Access</a>
                    </li>
                    <li>
                        <a href="assign-role.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                            Assign
                            Role</a>
                    </li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                    <span>Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="company.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Company</a>
                    </li>
                    <li>
                        <a href="notification.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                            Notification</a>
                    </li>
                    <li>
                        <a href="notification-alert.html"><i
                                class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                            Notification Alert</a>
                    </li>
                    <li>
                        <a href="theme.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Theme</a>
                    </li>
                    <li>
                        <a href="currencies.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Currencies</a>
                    </li>
                    <li>
                        <a href="language.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                            Languages</a>
                    </li>
                    <li>
                        <a href="payment-gateway.html"><i
                                class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment
                            Gateway</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
