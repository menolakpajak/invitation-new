<?php 

require_once '../../function.php';

$user = $_POST['user'];
$nama = $_POST['nama'];
$data_tamu = data("SELECT * FROM $user WHERE nama LIKE '%$nama%' AND comment != '' ORDER BY nama ");


?>

<?php if(!empty($data_tamu)) :?>
                        <?php foreach($data_tamu as $tamu): ?>
                          <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                          <?= format_date($tamu['dateAdd'],"d/M/y H:i"); ?></strong></td>
                        <td><?= ucwords($tamu['nama']); ?></td>
                        <td class="text-wrap" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span><?= $tamu['comment']; ?>"><?= substr($tamu['comment'],0,25).'...' ; ?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">

                              <a class="text-warning dropdown-item" href="javascript:void(0);"
                                onclick="editComment('<?= $user; ?>',this.dataset.tamu)" data-tamu='<?= json_encode($tamu,JSON_PRETTY_PRINT); ?>'><i class="bx bx-edit-alt me-1"></i> Edit</a>

                              <a onclick="hapusComment('<?= $user; ?>','<?= $tamu['kode']; ?>')" class="text-danger dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>