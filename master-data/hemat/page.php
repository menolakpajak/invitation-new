<?php

 
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
                  <div data-i18n="detail">Detail</div>
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
                  <i class='bx bx-check-circle bx-sm text-success' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-check bx-sm pb-md-2 mt-2'></i>
                    <span>Complete</span>"></i>
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
                  <i class='bx bx-check-circle bx-sm text-success' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-check bx-sm pb-md-2 mt-2'></i>
                    <span>Complete</span>"></i>
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
                  <i class='bx bx-check-circle bx-sm text-success' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-check bx-sm pb-md-2 mt-2'></i>
                    <span>Complete</span>"></i>
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
                  <i class='bx bx-check-circle bx-sm text-success' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-check bx-sm pb-md-2 mt-2'></i>
                    <span>Complete</span>"></i>
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
                  <i class='bx bx-check-circle bx-sm text-success' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-check bx-sm pb-md-2 mt-2'></i>
                    <span>Complete</span>"></i>
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
                  <i class='bx bx-check-circle bx-sm text-success' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-check bx-sm pb-md-2 mt-2'></i>
                    <span>Complete</span>"></i>
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
                    <i class='bx bx-check-circle bx-sm text-success' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-check bx-sm pb-md-2 mt-2'></i>
                      <span>Complete</span>"></i>
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
                  <?php if(isset($thx)) :?>
                  <i class='bx bx-check-circle bx-sm text-success' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-check bx-sm pb-md-2 mt-2'></i>
                    <span>Complete</span>"></i>
                  <?php endif; ?>
                </div>
                </a>
            </li>

            <!-- layout -->
            <?php if(!isset($finish)) :?>
            <li class="menu-item">
                <a
                  href="javascript:void(0)"
                  class="menu-link"
                >
                <i class="menu-icon bx bxs-layout text-danger"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover" class="text-danger">Layout</div>
                    <i class='bx bxs-error bx-sm text-danger' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Not Complete</span>">
                  </i>
                </div>
                </a>
            </li>
          <?php endif; ?>
          <?php if(isset($finish)) :?>
            <li class="menu-item <?php if($page=='layout'){echo 'active';} ?>">
                <a
                  href="layout.php?user=<?= $user; ?>"
                  class="menu-link"
                >
                <i style="color:#b98890 ;" class="menu-icon bx bxs-layout"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="cover">Layout</div>
                   <i class='bx bx-check-circle bx-sm text-success' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-check bx-sm pb-md-2 mt-2'></i>
                    <span>Complete</span>"></i>
                </div>
                </a>
            </li>
          <?php endif; ?>

            <!-- finish -->

        <?php if(!isset($finish)) :?>
            <li class="menu-item">
                <a
                  href="javascript:void(0)"
                  class="menu-link"
                >
                <i class="text-danger menu-icon bx bxs-paper-plane"></i>
                <div class="w-100 d-flex justify-content-between">
                  <div data-i18n="finish" class="text-danger">Finish</div>
                  <i class='bx bxs-error bx-sm text-danger' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Not Finish</span>">
                  </i>
                </div>
                </a>
            </li>
        <?php endif; ?>
        <?php if(isset($finish)) :?>
            <li class="menu-item <?php if($page=='finish'){echo 'active';} ?>">
                <a
                  href="javascrip:void(0)"
                  class="menu-link"
                  onclick="apply('<?= $user; ?>','finish')"
                >
                <i class="text-success menu-icon bx bxs-paper-plane"></i>
                  <div data-i18n="finish" class="text-success">Finish</div>
                </a>
            </li>
        <?php endif; ?>

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
