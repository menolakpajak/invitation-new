<div class="col-12 p-2 justify-content-between" >
    <a class="mt-2 btn btn-secondary col-5 col-xl-2 col-md-2" href="./?status=read"><i class='bx bx-user-check'></i> Read</a>
    <a style="cursor:default" class="mt-2 btn btn-success col-5 col-xl-2 col-md-2" href="javascript:void(0)"><i class='bx bx-user-x'></i> Unread</a>
    <a class="mt-2 btn btn-secondary col-5 col-xl-2 col-md-2" href="./?status=hadir"><i class='bx bx-user-plus'></i> Hadir</a>
    <a class="mt-2 btn btn-secondary col-5 col-xl-2 col-md-2" href="./?status=nohadir"><i class='bx bx-user-minus'></i> Tidak Hadir</a>
</div>
<div style="min-height: 300px;" class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Nama</th>
                        <th>No Wa</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="container" class="table-border-bottom-0">
                      <?php if(!empty($data_tamu)) :?>
                        <?php foreach($data_tamu as $tamu): ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                          <?= format_date($tamu['dateAdd'],"d/M/y H:i"); ?></strong></td>
                        <td><?= ucwords($tamu['nama']); ?></td>
                        <td><?php if(empty($tamu['wa'])){
                          echo '---';
                        }else{
                          echo $tamu['wa'];
                        } 
                        ?></td>
                        <td>
                        <span class="badge text-dark">Unread</span>
                          <?php if(!empty($tamu['comment'])): ?>
                            <i class='animate__animated animate__swing animate__slower animate__infinite ms-0 text-warning bx bx-message-rounded-dots' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                            <span><?= $tamu['comment']; ?>"></i>
                          <?php endif; ?>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <?php if(!empty($tamu['wa'])) :?>
                                <a class="text-success dropdown-item" href="javascript:void(0);"
                                  onclick="sendWa('<?= $cookie; ?>','<?= $tamu['kode']; ?>')">
                                  <i class="bx bxl-whatsapp me-1"></i> Send</a>
                              <?php endif; ?>
                              <a class="dropdown-item text-secondary" 
                              href="
                              <?php
                              $kepada = urlencode($tamu['nama']);
                              $kode = $tamu['kode'];
                              $send = str_replace('#hari#',$hari,$text);
$send = str_replace('#jam#',$jam,$send);
$send = str_replace('#tempat#',$tempat,$send);
$send = str_replace('#link#',"$copy_link?kepada=$kepada&kode=$kode",$send);
echo $send;
                              ?>
                              " onclick="copyURI(event)">
                              <i class="bx bxs-copy-alt me-1"></i> Copy Temp</a>

                              <a class="text-dark dropdown-item" 
                              href="
                              <?php
                              $kepada = urlencode($tamu['nama']);
                              $kode = $tamu['kode'];
                              echo "$copy_link?kepada=$kepada&kode=$kode";
                              ?>
                              " onclick="copyURI(event)">
                              <i class="bx bx-copy me-1"></i> Copy Link</a>
                              <a onclick="detail(this.dataset.tamu)"
                              data-tamu='<?= json_encode($tamu); ?>' class="text-primary dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-detail me-1"></i> Detail</a>
                              <a class="text-warning dropdown-item" href="javascript:void(0);"
                                onclick="edit('<?= $cookie; ?>','<?= $tamu['kode']; ?>','<?= $tamu['nama']; ?>','<?= $tamu['wa']; ?>')"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a onclick="hapusTamu('<?= $cookie; ?>','<?= $tamu['kode']; ?>')" class="text-danger dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                  </table>
                </div>