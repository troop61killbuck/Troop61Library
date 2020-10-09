<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion <?php echo $user['sidebar'];?>" id="accordionSidebar">

    <!-- Sidebar - Brand -->
        <?php require_once('layouts/admin_sidebar_brand.php'); ?>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
<li class="nav-item"><a class="nav-link text-warning" href="/mantisbt" target="_blank">MANTIS BUG TRACKER</a></li>
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo $dashboard_active;?>">
        <a class="nav-link" href="admin_dashboard.php">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Catalog
    </div>

    <!-- Nav Item - Catalog Collapse Menu -->
    <li class="nav-item <?php echo $catalog_active;?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCatalog" aria-expanded="true" aria-controls="collapseCatalog">
            <i class="fas fa-fw fa-book"></i>
            <span>Catalog</span>
        </a>
        <div id="collapseCatalog" class="collapse <?php echo $catalog_show;?>" aria-labelledby="headingCatalog" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Catalog:</h6>
                <a class="collapse-item <?php echo $catalog_dropdown_active;?>" href="catalog_grouped.php">Grouped By Name</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Catalog Settings:</h6>
                <a class="collapse-item <?php echo $types_dropdown_active;?>" href="types.php">Types</a>
                <a class="collapse-item <?php echo $categories_dropdown_active;?>" href="categories.php">Categories</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Circulations -->
    <li class="nav-item <?php echo $circulations_active;?>">
        <a class="nav-link collapsed" href="circulations.php">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Circulations</span>
        </a>
    </li>

<!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Media
    </div>

    <!-- Nav Item - Catalog -->
    <li class="nav-item <?php echo $book_media_active;?>">
        <a class="nav-link" href="book_media.php">
            <i class="far fa-images"></i>
            <span>Catalog Images</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Members
    </div>

    <!-- Nav Item - Members Collapse Menu -->
    <li class="nav-item <?php echo $members_active;?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMembers" aria-expanded="true" aria-controls="collapseMembers">
            <i class="fas fa-fw fa-user"></i>
            <span>Members</span>
        </a>
        <div id="collapseMembers" class="collapse <?php echo $members_show;?>" aria-labelledby="headingCatalog" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Members:</h6>
                <a class="collapse-item <?php echo $members_dropdown_active;?>" href="members.php">Members</a>
                <a class="collapse-item <?php echo $amember_dropdown_active;?>" href="add_member.php">Add Member</a>
                <a class="collapse-item <?php echo $amemberbulk_dropdown_active;?>" href="add_member_csv.php">Import Members</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Library Cards:</h6>
                <a class="collapse-item <?php echo $library_cards_dropdown_active;?>" href="library_card.php">Library Cards</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Reports
    </div>

    <!-- Nav Item - Reports -->
    <li class="nav-item <?php echo $reports_active;?>">
        <a class="nav-link" href="reports.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Report Generator</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Settings
    </div>

    <!-- Nav Item - Library Information -->
    <li class="nav-item <?php echo $library_info_active;?>">
        <a class="nav-link" href="library_information.php">
            <i class="fas fa-cog"></i>
            <span>Library Information</span></a>
    </li>

    <!-- Nav Item - Users Collapse Menu -->
    <li class="nav-item <?php echo $users_active;?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-user"></i>
            <span>Users</span>
        </a>
        <div id="collapsePages" class="collapse <?php echo $users_show;?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Users:</h6>
                <a class="collapse-item <?php echo $users_dropdown_active;?>" href="users.php">Users</a>
                <a class="collapse-item <?php echo $auser_dropdown_active;?>" href="add_user.php">Add User</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Groups:</h6>
                <a class="collapse-item <?php echo $groups_dropdown_active;?>" href="group.php">Groups</a>
                <a class="collapse-item <?php echo $agroup_dropdown_active;?>" href="add_group.php">Add Group</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->