<?php 

require_once '../../function.php';

$user = $_POST['user'];
$nama = $_POST['nama'];
$data = data("SELECT * FROM aa_customer WHERE cookie = '$user'")[0];
$link = $data['folder_name'];
$use = json_decode($data['data_use'],true);
$hari = $use['acara_date2'];
$jam = $use['acara_time2'];
$tempat = $use['acara_alamat2'];
$copy_link = "https://ada-undangan.online/dari/$link/";
if(isset($use['template']) && !empty($use['template'])){
  $text = $use['template'];
}else{
  include_once 'txt.php';
}
$data_tamu = data("SELECT * FROM $user WHERE nama LIKE '%$nama%' ORDER BY nama ");

?>

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
                          <?php if(empty($tamu['status'])): ?>
                            <span class="badge text-dark">-----</span>
                          <?php endif; ?>
                          <?php if($tamu['status'] == 'read'): ?>
                            <span class="badge text-warning">Read</span>
                          <?php endif; ?>
                          <?php if($tamu['status'] == 'done'): ?>
                            <span class="badge text-primary">Done</span>
                          <?php endif; ?>
                          <?php if($tamu['status'] == 'registred'): ?>
                            <span class="badge text-success">registred</span>
                          <?php endif; ?>
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
                                  onclick="sendWa('<?= $user; ?>','<?= $tamu['kode']; ?>')">
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
                                onclick="edit('<?= $user; ?>','<?= $tamu['kode']; ?>','<?= $tamu['nama']; ?>','<?= $tamu['wa']; ?>')"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a onclick="hapusTamu('<?= $user; ?>','<?= $tamu['kode']; ?>')" class="text-danger dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>