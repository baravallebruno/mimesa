<?php $numero_paginas = numero_paginas($pg_config['lista_pag_cargas'], $conexion); ?>
<div class="col-xs-12 paginacion text-center">
    <ul>
		<?php if (pagina_actual() === 1): ?>
        	<li class="disabled"><i class="fa fa-chevron-left"></i></li>
		<?php else: ?>
			<li><a href="<?php echo RUTA ?>/cargas.php?p=<?php echo pagina_actual() - 1 ?>"><i class="fa fa-chevron-left"></i></a></li>
		<?php endif; ?>
		
		<?php for($i = 1; $i <= $numero_paginas; $i++): ?>
			<?php if (pagina_actual() === $i): ?>
				<li class="active"> <?php echo $i; ?></li>
			<?php else: ?>
				<li><a href="<?php echo RUTA ?>/cargas.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php endif; ?>
		<?php endfor; ?>
		
		<?php if(pagina_actual() == $numero_paginas): ?>
			<li class="disabled"><i class="fa fa-chevron-right"></i></li>
		<?php else: ?>
			<li><a href="<?php echo RUTA ?>/cargas.php?p=<?php echo pagina_actual() + 1 ?>"><i class="fa fa-chevron-right"></i></a></li>
		<?php endif; ?>
    </ul>
</div>