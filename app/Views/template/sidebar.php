<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand text-dark d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-code "></i>
                </div>
                <div class="sidebar-brand-text mx-3">procode.com</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 border-dark">

            <!-- Nav Item - Beranda -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= base_url('user'); ?>">
                    <i class="fas fa-fw fa-igloo text-dark"></i>
                    <span>Dashboard</span></a>
            </li>

            <?php if( in_groups(['premium user','user'])) :?>
            <!-- Divider -->
            <hr class="sidebar-divider border-dark">
            
            <!-- Heading -->
            <div class="sidebar-heading text-dark">
                LESSON
            </div>
            <!-- Nav Item - Free Materi -->
            <li class="nav-item text-dark">
                <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-book-open text-dark"></i>
                    <span>CSS</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('user/cssI'); ?>">CSS I</a>
                        <a class="collapse-item" href="<?= base_url('user/cssII'); ?>">CSS II</a>
                        <a class="collapse-item" href="<?= base_url('preser/cssIII'); ?>">CSS III <?php if( in_groups('user')) :?><i class="fas fa-fw fa-lock text-dark"></i><?php endif; ?></a>
                        <a class="collapse-item" href="<?= base_url('preser/cssIV'); ?>">CSS IV <?php if( in_groups('user')) :?><i class="fas fa-fw fa-lock text-dark"></i><?php endif; ?></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item text-dark">
                <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-book-open text-dark"></i>
                    <span>HTML</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('user/htmlI'); ?>">HTML I</a>
                        <a class="collapse-item" href="<?= base_url('user/htmlII'); ?>">HTML II</a>
                        <a class="collapse-item" href="<?= base_url('preser/htmlIII'); ?>">HTML III <?php if( in_groups('user')) :?><i class="fas fa-fw fa-lock text-dark"></i><?php endif; ?></a>
                        <a class="collapse-item" href="<?= base_url('preser/htmlIV'); ?>">HTML IV <?php if( in_groups('user')) :?><i class="fas fa-fw fa-lock text-dark"></i><?php endif; ?></a>
                    </div>
                </div>
            </li>
            <?php endif; ?>
            

            <?php if( in_groups('admin')) :?>
            <!-- Divider -->
            <hr class="sidebar-divider border-dark">

            <!-- Heading -->
            <div class="sidebar-heading text-dark">
                USER MANAGEMENT
            </div>
            <!-- Nav Item - User List -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= base_url('admin/datalist'); ?>">
                    <i class="fas fa-fw fa-users text-dark"></i>
                    <span>User List</span></a>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider border-dark">
            <?php endif; ?>

            <!-- Heading -->
            <div class="sidebar-heading text-dark">
                USER PROFILE
            </div>

            <!-- Nav Item - Profile -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= base_url('user/myprofile/' . user()->id); ?>">
                    <i class="fas fa-fw fa-user text-dark"></i>
                    <span>My Profile</span></a>
            </li>

            <!-- Nav Item - Setting -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= base_url('user/changePassword/' . user()->id); ?>">
                    <i class="fas fa-fw fa-wrench text-dark"></i>
                    <span>Settings</span></a>
            </li>

            <?php if( in_groups(['premium user','user'])) :?>
            <!-- Nav Item - Setting -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="<?= base_url('user/upgrade'); ?>">
                    <i class="fas fa-fw fa-bolt text-dark"></i>
                    <span>Upgrade Account</span></a>
            </li>
            <?php endif; ?>

            <hr class="sidebar-divider border-dark">

            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt text-dark"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider border-dark">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-success" id="sidebarToggle"></button>
            </div>

        </ul>