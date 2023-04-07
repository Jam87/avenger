<div class="app-menu navbar-menu">
  <!-- LOGO -->
  <div class="navbar-brand-box">
    <!-- Dark Logo-->
    <a href="index.html" class="logo logo-dark">
      <span class="logo-sm">
        <img src="<?= base_url(); ?>public/images/logo-sm.png" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="<?= base_url(); ?>public/images/logo-dark.png" alt="" height="17">
      </span>
    </a>
    <!-- Light Logo-->
    <a href="index.html" class="logo logo-light">
      <span class="logo-sm">
        <img src="<?= base_url(); ?>public/images/logo-sm.svg" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="<?= base_url(); ?>public/images/logo-light-.svg" alt="" height="50">
      </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
      <i class="ri-record-circle-line"></i>
    </button>
  </div>

  <div id="scrollbar">
    <div class="container-fluid">

      <div id="two-column-menu">
      </div>
      <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Inicio</span>
          </a>

        <li class="nav-item"><!-- Modulo: Clientes -->
          <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
            <i class="ri-apps-2-line"></i> <span data-key="t-apps">Clientes</span>
          </a>
          <div class="collapse menu-dropdown" id="sidebarApps">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="<?= base_url(); ?>clientes" class="nav-link" data-key="t-calendar"> Agregar ciente </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>compras" class="nav-link" data-key="t-calendar">  </a>
              </li>
            </ul>
          </div>
        </li><!-- /Modulo: Clientes -->

        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
            <i class="ri-compasses-2-line"></i> <span data-key="t-icons">Compras</span>
          </a>
          <div class="collapse menu-dropdown" id="sidebarIcons">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="<?= base_url(); ?>proveedores" class="nav-link" data-key="t-remix">Proveedores</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>Compras" class="nav-link" data-key="t-boxicons">Compras</a>
              </li>
           
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
            <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Ventas</span>
          </a>
          <div class="collapse menu-dropdown" id="sidebarLayouts">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
              </li>
              <li class="nav-item">
                <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
              </li>
              <li class="nav-item">
                <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
              </li>
              <li class="nav-item">
                <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
              </li>
            </ul>
          </div>
        </li> <!-- end Dashboard Menu -->



        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
            <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Inventario</span>
          </a>
          <div class="collapse menu-dropdown" id="sidebarAuth">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                </a>
                <div class="collapse menu-dropdown" id="sidebarSignIn">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic"> Basic
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover"> Cover
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                </a>
                <div class="collapse menu-dropdown" id="sidebarSignUp">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic"> Basic
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover"> Cover
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset">
                  Password Reset
                </a>
                <div class="collapse menu-dropdown" id="sidebarResetPass">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic">
                        Basic </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover">
                        Cover </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                  Password Create
                </a>
                <div class="collapse menu-dropdown" id="sidebarchangePass">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic">
                        Basic </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover">
                        Cover </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen">
                  Lock Screen
                </a>
                <div class="collapse menu-dropdown" id="sidebarLockScreen">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic">
                        Basic </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover">
                        Cover </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                </a>
                <div class="collapse menu-dropdown" id="sidebarLogout">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message"> Success Message
                </a>
                <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic">
                        Basic </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover">
                        Cover </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep" data-key="t-two-step-verification"> Two Step Verification
                </a>
                <div class="collapse menu-dropdown" id="sidebarTwoStep">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic"> Basic
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover"> Cover
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                </a>
                <div class="collapse menu-dropdown" id="sidebarErrors">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic"> 404
                        Basic </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover"> 404
                        Cover </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt"> 404 Alt
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                    </li>
                    <li class="nav-item">
                      <a href="auth-offline.html" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
            <i class="ri-pages-line"></i> <span data-key="t-pages">Usuarios</span>
          </a>
          <div class="collapse menu-dropdown" id="sidebarPages">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="<?= base_url(); ?>usuarios" class="nav-link" data-key="t-starter">Usuarios</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>tipos" class="nav-link" data-key="t-team">Tipos de usuarios</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
            <i class="ri-booklet-line"></i> <span data-key="t-landing">Catálogos</span>
          </a>
          <div class="collapse menu-dropdown" id="sidebarLanding">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="<?= base_url(); ?>banco" class="nav-link" data-key="t-one-page">Bancos</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>colores" class="nav-link" data-key="t-nft-landing">Colores</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>contacto" class="nav-link" data-key="t-nft-landing">Contacto</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>pagos" class="nav-link" data-key="t-nft-landing">Forma de pago</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>moneda" class="nav-link" data-key="t-nft-landing">Moneda</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>pais" class="nav-link" data-key="t-nft-landing">Pais</a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>presentacion" class="nav-link" data-key="t-nft-landing">Presentación</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
            <i class="ri-pie-chart-line"></i> <span data-key="t-charts">Charts</span>
          </a>
          <div class="collapse menu-dropdown" id="sidebarCharts">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts">
                  Apexcharts
                </a>
                <div class="collapse menu-dropdown" id="sidebarApexcharts">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="charts-apex-line.html" class="nav-link" data-key="t-line"> Line
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-area.html" class="nav-link" data-key="t-area"> Area
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-column.html" class="nav-link" data-key="t-column">
                        Column </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar"> Bar </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed"> Mixed
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline">
                        Timeline </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick"> Candlstick </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot">
                        Boxplot </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble">
                        Bubble </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter">
                        Scatter </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap">
                        Heatmap </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap">
                        Treemap </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie"> Pie </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar"> Radialbar </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar"> Radar
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area">
                        Polar Area </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="charts-chartjs.html" class="nav-link" data-key="t-chartjs"> Chartjs </a>
              </li>
              <li class="nav-item">
                <a href="charts-echarts.html" class="nav-link" data-key="t-echarts"> Echarts </a>
              </li>
            </ul>
          </div>
        </li>

        

        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
            <i class="ri-map-pin-line"></i> <span data-key="t-maps">Maps</span>
          </a>
          <div class="collapse menu-dropdown" id="sidebarMaps">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="maps-google.html" class="nav-link" data-key="t-google">
                  Google
                </a>
              </li>
              <li class="nav-item">
                <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                  Vector
                </a>
              </li>
              <li class="nav-item">
                <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                  Leaflet
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
            <i class="ri-share-line"></i> <span data-key="t-multi-level">Multi Level</span>
          </a>
          <div class="collapse menu-dropdown" id="sidebarMultilevel">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
              </li>
              <li class="nav-item">
                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                  1.2
                </a>
                <div class="collapse menu-dropdown" id="sidebarAccount">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                      </a>
                      <div class="collapse menu-dropdown" id="sidebarCrm">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>

      </ul>
    </div>
    <!-- Sidebar -->
  </div>

  <div class="sidebar-background"></div>
</div>