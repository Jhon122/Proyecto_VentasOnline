<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion2);?>

<section class="paginacion">
    <div class="container">
        <div class="row">
            <div class="col-3 d-flex justify-content-around m-auto">
                <?php if(pagina_actual() === 1): ?>
                    <a class="btn btn-secondary disabled">&laquo;</a>
                <?php else: ?>
                    <a class="btn btn-secondary" href="index.php?p=<?php echo pagina_actual() - 1;?>">&laquo;</a>
                <?php endif; ?>
    
                <?php for($i = 1; $i <= $numero_paginas; $i++): ?>
                    <?php if(pagina_actual() === $i):?>
                        <a class=" btn btn-danger active">
                            <?php echo $i;?>
                        </a>
                    <?php else:?>
                        <a class="btn btn-secondary" href="index.php?p=<?php echo $i; ?>"><?php echo $i?></a>
                    <?php endif; ?>
                    
                <?php endfor; ?>
    
                <?php if(pagina_actual() == $numero_paginas): ?>
                    <a class="btn btn-secondary disabled">&raquo;</a>
                <?php else:?>
                    <a class="btn btn-secondary" href="index.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a>
                <?php endif;?>

            </div>
        </div>
    </div>
</section>