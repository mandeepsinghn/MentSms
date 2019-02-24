<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
        </div>
        <div class="expanded">
            <a href="/">
							<span class="text-lg text-bold text-primary ">SMS&nbsp;ADMIN</span>
						</a>
        </div>
    </div>
    <div class="menubar-scroll-panel">

        <!-- BEGIN MAIN MENU -->
        <ul id="main-menu" class="gui-controls">

            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="{{ url('/', []) }}">
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('listCategories') }}">
                    <div class="gui-icon"><i class="fa fa-table"></i></div>
                    <span class="title">Categories</span>
                </a>
            </li>

            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-computer"></i></div>
                    <span class="title">Education Manager</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Education Medium</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Education Stream</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Subjects</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="gui-folder">
                <a >
                    <div class="gui-icon"><i class="fa fa-photo"></i></div>
                    <span class="title">Class Management</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Sections</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Standards</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="gui-folder">
                <a >
                    <div class="gui-icon"><i class="fa fa-group"></i></div>
                    <span class="title">Student Management</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">View Students</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Upgrade Student</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Import Student</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="fa fa-money"></i></div>
                    <span class="title">Fee Management</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Fee Type</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Fee Set</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Fee Set Attribute</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Fee Set Assignment</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="gui-folder">
                <a >
                    <div class="gui-icon"><i class="fa fa-envelope"></i></div>
                    <span class="title">Communication</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Email</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">SMS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Notification</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Other</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="gui-folder">
                <a >
                    <div class="gui-icon"><i class="fa fa-file-code-o"></i></div>
                    <span class="title">Examination</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Schdules</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ url('/education-mediums', []) }}">
                            <span class="title">Results</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/education-mediums', []) }}">
                    <div class="gui-icon"><i class="fa fa-table"></i></div>
                    <span class="title">Exam Hall Ticket</span>
                </a>
            </li>
        </ul>
        <!--end .main-menu -->
        <!-- END MAIN MENU -->

        <div class="menubar-foot-panel">
            <small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; <?=date('Y')?></span> <strong>CodeCovers</strong>
						</small>
        </div>
    </div>
    <!--end .menubar-scroll-panel-->
</div>
<!--end #menubar-->
<!-- END MENUBAR -->
