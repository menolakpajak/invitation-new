<?php 
require_once '../akses.php';
require_once '../function.php';



$find = $_GET['find'];

$data = data("SELECT * FROM aa_customer WHERE (nama LIKE '%$find%' OR username LIKE '%$find%' OR folder_name LIKE '%$find%' OR no_hp LIKE '%$find%') AND status != 'queue' ORDER BY date DESC LIMIT 100");


if(empty($data)){
    echo 'fail';
    die;
}
$respon = [count($data)];
$text = '';
foreach($data as $datas){
  $color = 'primary'; 
      if($datas['status'] == 'pending'){
        $color = 'warning';
      }
      if($datas['status'] == 'active'){
        $color = 'success';
      }
      if($datas['status'] == 'expired'){
        $color = 'danger';
      }
      if($datas['status'] == 'suspend'){
        $color = 'danger';
      }
$sNama = ucwords($datas['nama']);
$sDate = format_date($datas['date'],'d/M/y H:m');
$sPaket = ucfirst($datas['paket']);
$sTema = $datas['tema'];
$sStatus = ucfirst($datas['status']);
$sCookie = $datas['cookie'];
$sFolder = $datas['folder_name'];


$txt = <<<text
      <tr>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>$sNama</strong></td>
        <td>$sDate</td>
        <td>$sPaket</td>
        <td><span class="text-warning">$sTema</span></td>
        <td><span class="badge bg-label-$color me-1">$sStatus</span></td>
        <td>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
text;
if($datas['status'] == 'pending') {
$txtPlus = <<<plus
<a class="text-primary dropdown-item" href="https://ada-undangan.online/data/basic/?user=$sCookie" onclick="copyURI(event)"
      ><i class="bx bx-copy me-1"></i> Copy Link</a>
      <a class="text-dark dropdown-item" href="../../data/basic/?user=$sCookie" target="_blank"
      ><i class="bx bx-link-external me-1"></i> Go..</a>
plus;
}
if($datas['status'] == 'complete') {
  $txtPlus = <<<plus
  <a class="text-success dropdown-item" onclick="active('$sCookie')" href="javascript:void(0)"
  ><i class="bx bx-link-alt me-1"></i> Activated</a>
plus;
}
if($datas['status'] == 'suspend') {
  $txtPlus = <<<plus
  <a class="text-warning dropdown-item" onclick="unsuspend('$sCookie')" href="javascript:void(0)"
  ><i class="bx bx-link-alt me-1"></i> Unsuspend</a>
  plus;
}
if($datas['status'] == 'active') {
  $txtPlus = <<<plus
  <a class="text-primary dropdown-item" href="https://ada-undangan.online/dari/$sFolder" onclick="copyURI(event)"
  ><i class="bx bx-copy me-1"></i> Copy Link</a>
  <a class="text-dark dropdown-item" href="../../dari/$sFolder" target="_blank"
  ><i class="bx bx-link-external me-1"></i> Go..</a>
  plus;
}

$txt .= $txtPlus;
$txt .= <<<plus
<a class="text-primary dropdown-item" href="detail.php?user=$sCookie" target="_blank"
><i class="bx bx-detail me-1"></i> Detail</a>
plus;

if($datas['status'] == 'pending') {
  $txtPlus = <<<plus
  <a class="text-warning dropdown-item" href="../../master-edit/hemat/?user=$sCookie" target="_blank"
  ><i class="bx bx-edit-alt me-1"></i> Edit</a>
  plus;
  }
  if($datas['status'] == 'active') {
    $txtPlus = <<<plus
    <a class="text-danger dropdown-item" onclick="suspend('$sCookie')" href="javascript:void(0)"
    ><i class="bx bx-error me-1"></i> Suspend</a>
    plus;
    }

$txt .= $txtPlus;
$txt .= <<<plus
<a class="text-danger dropdown-item" onclick="confirm('$sCookie')" href="javascript:void(0)"
><i class="bx bx-trash me-1"></i> Delete</a
>
</div>
</div>
</td>
</tr>
plus;
$text .= $txt;
}

array_push($respon,$text);
echo json_encode($respon);

                      