<?php 
require_once '../config.php';
$paket = '';
$tema_pick = '';
if(isset($_POST['paket'])){
    $paket = $_POST['paket'];
}
if($paket == 'hemat' || $paket == 'basic'){
    $tema_pick = 'basic';
}
if($paket == 'pro' || $paket == 'advance'){
    $tema_pick = 'premium';
}

$tema_basic = [];
foreach($tema_list as $tema_one){
    if($tema_one['type'] == 'basic'){
         array_push($tema_basic,$tema_one);
    }
}



?>


<?php if(empty($paket)) :?>
    <option selected value="" disabled>--Empty--</option>
<?php endif; ?>    

<?php if($tema_pick == 'basic') :?>
    <option selected value="" disabled>--Tema Basic--</option>
    <?php foreach($tema_basic as $temaa): ?>
    <option value="<?= $temaa['name']; ?>"><?= $temaa['value']; ?></option>
    <?php endforeach; ?>
<?php endif; ?>

<?php if($tema_pick == 'premium') :?>
    <option selected value="" disabled>--Pilihan Tema--</option>
    <?php foreach($tema_list as $tempro): ?>
        <?php if($tempro['type'] == 'premium') :?>
            <option class="text-warning" value="<?= $tempro['name']; ?>"><?= $tempro['value']; ?></option>
            <?php continue; ?>
        <?php endif; ?>
        <option value="<?= $tempro['name']; ?>"><?= $tempro['value']; ?></option>
    <?php endforeach; ?>
<?php endif; ?>