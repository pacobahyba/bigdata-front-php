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
        <div>Comarca: <?=$comarca?></div>
        <div>UF: <?=$uf?></div>
        </p>
        <?php 
        for($i=0;$i<count($partes);$i++){
        ?>
        <p class="card-text">Partes</p>
        <div class="parte">
            <p class="card-text"><?=$partes[$i]['nome']?></p>
            <p class="card-text">Advogados:</p>
            <ul class="list-group list-group-flush">
                <?php for($a=0;$a<count($partes[$i]['advogados']);$a++){?>
                <li class="list-group-item">
                    <p><?=$partes[$i]['advogados'][$a]['nome']?></p>
                    <p>OAB <?=$partes[$i]['advogados'][$a]['oab']?></p>
                </li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
</div>