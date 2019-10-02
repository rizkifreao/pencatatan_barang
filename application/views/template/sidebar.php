<div class="sidebar" data-color="rose" data-background-color="black" data-image="<?=base_url() ?>/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
        -->
      <div class="logo">
        <a href="<?php base_url('dashboard') ?>" class="simple-text logo-mini">
          BTA
        </a>
        <a href="<?php base_url('dashboard') ?>" class="simple-text logo-normal">
          Pencatatan Barang
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="<?=base_url() ?>/assets/img/faces/avatar.jpg" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?= $this->ion_auth->user()->row()->first_name." ".$this->ion_auth->user()->row()->last_name ?>
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Edit Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> Settings </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="<?=base_url() ?>/examples/dashboard.html">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">image</i>
              <p> Pages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/pages/pricing.html">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Pricing </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/pages/rtl.html">
                    <span class="sidebar-mini"> RS </span>
                    <span class="sidebar-normal"> RTL Support </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/pages/timeline.html">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Timeline </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/pages/login.html">
                    <span class="sidebar-mini"> LP </span>
                    <span class="sidebar-normal"> Login Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/pages/register.html">
                    <span class="sidebar-mini"> RP </span>
                    <span class="sidebar-normal"> Register Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/pages/lock.html">
                    <span class="sidebar-mini"> LSP </span>
                    <span class="sidebar-normal"> Lock Screen Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/pages/user.html">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/pages/error.html">
                    <span class="sidebar-mini"> E </span>
                    <span class="sidebar-normal"> Error Page </span>
                  </a>
                </li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">apps</i>
              <p> Master
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/components/buttons.html">
                    <i class="material-icons">library_books</i>
                    <span class="sidebar-normal"> Barang </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
              <i class="material-icons">content_paste</i>
              <p> Forms
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/forms/regular.html">
                    <span class="sidebar-mini"> RF </span>
                    <span class="sidebar-normal"> Regular Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/forms/extended.html">
                    <span class="sidebar-mini"> EF </span>
                    <span class="sidebar-normal"> Extended Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/forms/validation.html">
                    <span class="sidebar-mini"> VF </span>
                    <span class="sidebar-normal"> Validation Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/forms/wizard.html">
                    <span class="sidebar-mini"> W </span>
                    <span class="sidebar-normal"> Wizard </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
              <i class="material-icons">grid_on</i>
              <p> Tables
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/tables/regular.html">
                    <span class="sidebar-mini"> RT </span>
                    <span class="sidebar-normal"> Regular Tables </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/tables/extended.html">
                    <span class="sidebar-mini"> ET </span>
                    <span class="sidebar-normal"> Extended Tables </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/tables/datatables.net.html">
                    <span class="sidebar-mini"> DT </span>
                    <span class="sidebar-normal"> DataTables.net </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
              <i class="material-icons">place</i>
              <p> Maps
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="mapsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/maps/google.html">
                    <span class="sidebar-mini"> GM </span>
                    <span class="sidebar-normal"> Google Maps </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/maps/fullscreen.html">
                    <span class="sidebar-mini"> FSM </span>
                    <span class="sidebar-normal"> Full Screen Map </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=base_url() ?>/examples/maps/vector.html">
                    <span class="sidebar-mini"> VM </span>
                    <span class="sidebar-normal"> Vector Map </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url() ?>/examples/widgets.html">
              <i class="material-icons">widgets</i>
              <p> Widgets </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url() ?>/examples/charts.html">
              <i class="material-icons">timeline</i>
              <p> Charts </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url() ?>/examples/calendar.html">
              <i class="material-icons">date_range</i>
              <p> Calendar </p>
            </a>
          </li>
        </ul>
      </div>
    </div>