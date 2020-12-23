<nav class="fixed-top navbar navbar-expand-lg shadow-lg navbar-light bg-light">
    <a href="#" class="navbar-brand d-none d-sm-inline"><span class="site-name d-none d-md-inline">adviser.iitu.kz</span></a>
    <ul class="navbar-nav d-none d-md-flex ">
        <li class="dropdown nav-item">
          <a class="dropdown-toggle nav-link" id="drop-down-5f900323ac5fc5f900323a491d10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" title="Язык" aria-controls="drop-down-menu-5f900323ac5fc5f900323a491d10">
              Русский ‎(ru)‎
          </a>
          <div class="dropdown-menu" role="menu" id="drop-down-menu-5f900323ac5fc5f900323a491d10" aria-labelledby="drop-down-5f900323ac5fc5f900323a491d10">
            <a class="dropdown-item" role="menuitem" href="#" title="Қазақша ‎(kk)‎">Қазақша ‎(kk)‎</a>
            <a class="dropdown-item" role="menuitem" href="#" title="Русский ‎(ru)‎">Русский ‎(ru)‎</a>
            <a class="dropdown-item" role="menuitem" href="#" title="English ‎(en)‎">English ‎(en)‎</a>
          </div>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="d-none d-lg-block"></li>
      <li class="nav-item"></li>
      <li class="nav-item d-flex align-items-center">
      <div class="usermenu">
        <div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-0" data-enhance="moodle-core-actionmenu">
          <div class="menubar d-flex " id="action-menu-0-menubar" role="menubar">
            <div class="action-menu-trigger">
              <div class="dropdown">
                <a href="#" tabindex="0" class="dropdown-toggle icon-no-margin nav-link" id="action-menu-toggle-0" aria-label="Меню пользователя" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-0-menu">
                <span class="userbutton"><span class="usertext mr-1"><?php echo $user['adviser_name']?> <?php echo $user['adviser_surname']?></span><span class="avatars"><span class="avatar current"><img src="<?php echo $user['adviser_url']?>" class="userpicture defaultuserpic" width="35" height="35" aria-hidden="true"></span></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-0-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-0" role="menu" data-align="tr-br">
                  <a href="adviser.php" class="dropdown-item menu-action"><span class="menu-action-text" id="actionmenuaction-1">Личный кабинет</span></a>
                  <a href="message.php" class="dropdown-item menu-action"><span class="menu-action-text" id="actionmenuaction-5">Сообщение</span></a>
                  <a href="logout.php" class="dropdown-item menu-action"><span class="menu-action-text" id="actionmenuaction-6">Выход</span></a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </nav>