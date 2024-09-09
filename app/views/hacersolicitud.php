<?php
//acordeon llamando la lista de comites y adentro sus portafolios, boton de generar solicitud, en cada portafolio
//modal para añadir la solicitud
?>
    <div class="accordion accordion-flush list-group" id="accordionFlushExample">
        <?php foreach ($data as $row): ?>
            
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button list-group-item-action collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-<?php echo $row['idcomite'] ?>" aria-expanded="false" aria-controls="flush-<?php echo $row['idcomite'] ?>">
                    <?php echo $row['nombre'] ?>
                </button>
            </h2>
            <div id="flush-<?php echo $row['idcomite'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <?php foreach ($dataportafolio as $p): ?>
                        <table class="table table-hover">
                            <?php if ($p['idcomite'] == $row['idcomite']): ?>    
                                <tr>
                                    <td class="w-75"><?php echo $p['nombre'] ?></td>
                                    <td>
                                    <form action="app/controller/comiteController.php" method="POST">
                                        <input type="hidden" name="idportafolio" value="<?php echo $p['idportafolio'] ?>">
                                        <button type="submit" name="submit" class="btn btn-success">Solicitud</button>
                                    </form>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>        
    </div>

