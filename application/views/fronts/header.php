<header class="header">
    <div class="header__wrap">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header__content">
              <!-- header logo -->
              <a>
                <font color="white"><h1>NontonFilm</h1></font>
              </a>
              <!-- end header logo -->

              <!-- header nav -->
              <ul class="header__nav">
                <!-- dropdown -->

                <!-- end dropdown -->

                <!-- dropdown -->

                <!-- end dropdown -->

                <li class="header__nav-item">
                  <a href="<?= base_url('') ?>" class="header__nav-link">HOME</a>
                </li>

                <!-- dropdown -->
                <!-- end dropdown -->
              </ul>
              <!-- end header nav -->

              <!-- header auth -->
              <div class="header__auth">


                <a href="<?= base_url('admin/index') ?>" class="header__sign-in">
                  <i class="icon ion-ios-log-in"></i>
                  <span>ADD MOVIE</span>
                </a>
              </div>
              <!-- end header auth -->

              <!-- header menu btn -->
              <button class="header__btn" type="button">
                <span></span>
                <span></span>
                <span></span>
              </button>
              <!-- end header menu btn -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- header search -->
    <form action="#" class="header__search">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header__search-content">
              <input type="text" placeholder="Search for a movie, TV Series that you are looking for">

              <button type="button">search</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- end header search -->
  </header>