<?php
extract($_POST);
?>
<div class="card" style="width: 28rem;">
    <div class="card-header">
        Informações do processo
    </div>
    <div class="card-body">
        <h5 class="card-title">0187582-14.2018.8.19.0001</h5>
        <h6 class="card-subtitle mb-2 text-muted">Tribunal de Justiça do Rio de Janeiro</h6>
        <p class="card-text">
        <div>UF: <?=$uf?></div>
        </p>
        <p class="card-text">Partes</p>
        <?php 
        for($i=0;$i<count($partes);$i++){
        ?>

        <div class="parte">
            <p class="card-text"><?=$partes[$i]['nome']?></p>
            <p class="card-text">Advogados:</p>
            <ul class="list-group list-group-flush">
                <?php if(!empty($partes[$i]['advogados'])){
                    for($a=0;$a<count($partes[$i]['advogados']);$a++){?>
                <li class="list-group-item">
                    <p><?=$partes[$i]['advogados'][$a]['nome']?></p>
                    <p>OAB <?=$partes[$i]['advogados'][$a]['oab']?></p>
                </li>
                <?php }} ?>
            </ul>
        </div>
        <?php } ?>

        <p class="card-text mt-3">Andamentos</p>
        <?php for($i=0;$i<count($andamentos);$i++){ ?>
        <li class="list-group-item">
            <p><?=$andamentos[$i]['descricao']?></p>
        </li>
        <?php } ?>
    </div>
</div>