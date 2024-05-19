<?php
require_once '../../conn.php';
require_once '../../function.php';
if(isset($_GET['pagecomplete'])){
  $page = $_GET['pagecomplete'];
  $user = $_GET['pageuser'];
  
}

$data = data("SELECT * FROM aa_customer WHERE cookie = '$user' ")[0];
include_once 'condition.php';

?>

            <!-- Page -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Page</span></li>

            <!-- detail -->
            <li class="menu-item <?php if($page=='detail'){echo 'active';} ?>">
                <a
                  href="./?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-detail"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="detail">Detail</div>
                  <i class='bx bxs-error-circle bx-sm text-info' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Cant Be Reset!</span>"></i>
                </div>
                </a>
            </li>

            <!-- cover -->
            <li class="menu-item <?php if($page=='cover'){echo 'active';} ?>">
                <a
                  href="cover.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-book-content"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Cover</div>
                  <?php if(isset($cover)) :?>
                    <i class='bx bxs-error-circle bx-sm text-warning' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Has Changed</span>"></i>
                  <?php endif; ?>
                </div>
                </a>
            </li>

            <!-- song -->
            <li class="menu-item <?php if($page=='song'){echo 'active';} ?>">
                <a
                  href="song.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-music"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Music</div>
                  <?php if(isset($music)) :?>
                    <i class='bx bxs-error-circle bx-sm text-info' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Cant Be Reset!</span>"></i>
                  <?php endif; ?>
                </div>
                </a>
            </li>

            <!-- quote -->
            <li class="menu-item <?php if($page=='quote'){echo 'active';} ?>">
                <a
                  href="quote.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-spreadsheet"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Quote</div>
                  <?php if(isset($quote)) :?>
                    <i class='bx bxs-error-circle bx-sm text-warning' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Has Changed</span>"></i>
                  <?php endif; ?>
                </div>
                </a>
            </li>


            <!-- couple -->
            <li class="menu-item <?php if($page=='couple'){echo 'active';} ?>">
                <a
                  href="couple.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-heart-circle"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Host</div>
                  <?php if(isset($couple)) :?>
                    <i class='bx bxs-error-circle bx-sm text-warning' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Has Changed</span>"></i>
                  <?php endif; ?>
                </div>
                </a>
            </li>

            <!-- acara -->
            <li class="menu-item <?php if($page=='acara'){echo 'active';} ?>">
                <a
                  href="acara.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-calendar"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Acara</div>
                  <?php if(isset($acara)) :?>
                    <i class='bx bxs-error-circle bx-sm text-warning' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Has Changed</span>"></i>
                  <?php endif; ?>
                </div>
                </a>
            </li>

            <!-- map -->
            <li class="menu-item <?php if($page=='map'){echo 'active';} ?>">
                <a
                  href="map.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-map"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Map</div>
                  <?php if(isset($map)) :?>
                    <i class='bx bxs-error-circle bx-sm text-warning' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Has Changed</span>"></i>
                  <?php endif; ?>
                </div>
                </a>
            </li>

            <!-- prokes -->
            <li class="menu-item <?php if($page=='prokes'){echo 'active';} ?>">
                <a
                  href="prokes.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bx-check-shield"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Prokes</div>
                  <?php if(isset($prokes)) :?>
                    <i class='bx bxs-error-circle bx-sm text-warning' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Has Changed</span>"></i>
                    <?php endif; ?>
                </div>
                </a>
            </li>

            <!-- thanks -->
            <li class="menu-item <?php if($page=='thanks'){echo 'active';} ?>">
                <a
                  href="thanks.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-badge-check"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Thanks</div>
                  <?php if(isset($thanks)) :?>
                    <i class='bx bxs-error-circle bx-sm text-warning' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Has Changed</span>"></i>
                  <?php endif; ?>
                </div>
                </a>
            </li>

            <!-- layout -->
            <li class="menu-item <?php if($page=='layout'){echo 'active';} ?>">
                <a
                  href="layout.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-layout"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Layout</div>
                  <?php if(isset($layout)) :?>
                    <i class='bx bxs-error-circle bx-sm text-warning' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-error-circle bx-sm pb-md-2 mt-2'></i>
                    <span>Has Changed</span>"></i>
                  <?php endif; ?>
                </div>
                </a>
            </li>


            <!-- reset -->

            <?php if(!isset($finish)) :?>
            <li class="menu-item">
                <a
                  href="javascript:void(0)"
                  class="menu-link"
                >
                <i class="text-danger menu-icon bx bx-reset"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="finish" class="text-danger">Reset</div>
                  <i class='bx bxs-error bx-sm text-danger' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Reset All Data</span>">
                  </i>
                </div>
                </a>
            </li>
        <?php endif; ?>
        <?php if(isset($finish)) :?>
            <li class="menu-item <?php if($page=='finish'){echo 'active';} ?>">
                <a
                  href="javascript:void(0)"
                  class="menu-link"
                  onclick="apply('<?= $user; ?>','finish')"
                >
                <i class="text-warning menu-icon bx bx-reset"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="finish" class="text-warning">Reset</div>
                  <i class='bx bxs-error bx-sm text-warning' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Reset All Data</span>">
                  </i>
                </div>
                </a>
            </li>
        <?php endif; ?>

                <!-- logout -->
                <li class="menu-item mt-3">
                <a
                style="background-color: #e4e7e4;"
                  href="../../admin/login/?logout"
                  class="menu-link rounded-3"
                >
                <i class="menu-icon bx bx-power-off"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover"><strong> Logout</strong></div>
                </div>
                </a>
            </li>

            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
                <a
                  href="https://ada-undangan.online/"
                  target="_blank"
                  class="menu-link"
                >
                  <i class="menu-icon tf-icons bx bx-globe"></i>
                  <div data-i18n="Support">Website</div>
                </a>
              </li>
            <li class="menu-item">
              <a
                href="https://ada-undangan.online/support/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://ada-undangan.online/donation/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bxs-donate-heart"></i>
                <div data-i18n="Documentation">Donasi</div>
              </a>
            </li>
