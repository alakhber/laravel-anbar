<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('hesabla') }}" aria-expanded="false"><i data-feather="check" class="feather-icon"></i><span class="hide-menu">STATISTIKA</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('select') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">BRANDS</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('cselect') }}" aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span class="hide-menu">CLIENTS</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('pselect') }}" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">PRODUCTS</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('orselect') }}" aria-expanded="false"><i data-feather="check" class="feather-icon"></i><span class="hide-menu">ORDERS</span></a></li>
                @if (auth()->user()->id == 1)
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('adselect') }}" aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span class="hide-menu">ADMIN</span></a></li>
                @endif
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('isselect') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">STAFF</span></a></li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.html" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Ticket List
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat.html" aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span class="hide-menu">Chat</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Calendar</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>