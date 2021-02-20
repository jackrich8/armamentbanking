<!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="dashboard.php"><img class="brand-logo" alt="modern admin logo" src="./images/logo.png" style="width: 100%;"></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?php echo $name['fullname'];?></span><span class="avatar avatar-online"><img src="./app-assets/images/portrait/small/avatar-s-26.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.php"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper" style="background: url('./images/dots.png'); background-repeat: no-repeat; background-size: cover; background-position: all; width: 100%;">
      <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="nav-item"><a class="nav-link" href="./logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
          <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fa fa-bank"></i><span>Bank Dashboard</span></a></li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="fa fa-edit"></i><span data-i18n="Accounts">Accounts</span></a>
            <ul class="dropdown-menu">
              <li data-menu=""><a class="dropdown-item" href="bank-accounts.php" data-toggle=""><span data-i18n="All Accounts">All Accounts</span></a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="bank-add-account.php" data-toggle=""><span data-i18n="Add New">Add New</span></a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="fa fa-credit-card"></i><span data-i18n="Cards">Cards</span></a>
            <ul class="dropdown-menu">
              <li data-menu=""><a class="dropdown-item" href="bank-cards-list.php" data-toggle=""><span data-i18n="Cards">Cards</span></a>
              </li>
              <!-- <li data-menu=""><a class="dropdown-item" href="bank-add-card.php" data-toggle=""><span data-i18n="Add New">Add New</span></a>
              </li> -->
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="fa fa-dollar"></i><span data-i18n="Payments">Payments</span></a>
            <ul class="dropdown-menu">
              <li data-menu=""><a class="dropdown-item" href="bank-payments.php" data-toggle=""><span data-i18n="Payments">Payments</span></a>
              </li>
              <!-- <li data-menu=""><a class="dropdown-item" href="bank-add-payment.php" data-toggle=""><span data-i18n="Add New">Add New</span></a>
              </li> -->
            </ul>
          </li>
        </ul>
      </div>
    </div>