<div class="page-heading">
    <h1>Administración apartamentos</h1>
</div>

<div class="row">
    <div class="col-md-12">
		<div class="widget">
			<div class="widget-content">
				<div class="widget-header transparent">
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					</div>
				</div>
				<div class="data-table-toolbar">
					<div class="row">
						<div class="col-md-8 col-md-offset-4">
							<div class="toolbar-btn-action">
								<a class="btn btn-success" href="<?php echo $this->createUrl('planos/create'); ?>"><i class="fa fa-plus-circle"></i> Add new</a>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="table-responsive">
					<form class='form-horizontal' role='form'>
						<table class="table table-striped table-bordered js-data-table" cellspacing="0" width="100%">
					        <thead>
					            <tr align="center">
									<th>#</th>
									<th>Opciones</th>
									<th></th>
									<th>Area</th>
									<th>Unidades Disp.</th>
									<th>Descripción</th>
									<th>Estado</th>
								</tr>
					        </thead>
					 
					        <tfoot>
					            <tr>
					                <th>#</th>
									<th>Opciones</th>
									<th></th>
									<th>Area</th>
									<th>Unidades Disp.</th>
									<th>Descripción</th>
									<th>Estado</th>
					            </tr>
					        </tfoot>
					 
					        <tbody>
					            <?php
					            	foreach ($planos as $key => $plano) {				
									?>
										<tr>
											<td style="text-align:center;"><?php echo $key+1; ?></td>
											<td style="width:120px;">
												<div class="btn-group btn-group-xs">
													<a href="<?php echo $this->createUrl('planos/update/'.$plano->id); ?>" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-edit"></i></a>
													<?php if($plano->status == 1){ ?>
														<a href="<?php echo $this->createUrl('planos/status')."/".$plano->id; ?>" data-toggle="tooltip" title="Ocultar" class="btn btn-default"><i class="fa fa-minus-circle"></i></a>
													<?php } else{ ?>
														<a href="<?php echo $this->createUrl('planos/status')."/".$plano->id; ?>" data-toggle="tooltip" title="Mostrar" class="btn btn-default"><i class="fa fa-smile-o"></i></a>
													<?php } ?>
													<a data-msj="¿Esta seguro de querer eliminar este plano? Despues no podra recuperar sus datos, recuerde que otra opción es dejarla oculta." href="<?php echo $this->createUrl('planos/delete_item')."/".$plano->id; ?>" data-toggle="tooltip" title="Eliminar" class="js-confirm btn btn-default"><i class="fa fa-power-off"></i></a>
												</div>
											</td>
											<td><div class="img-circl img-table-rep" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/planos/350x350/<?php echo $plano->image; ?>);"></div></td>
											<td><?php echo $plano->area ?></td>
											<td><?php echo $plano->units_available ?></td>
											<td><?php echo $plano->description ?></td>
											<td><span class="label label-<?php echo($plano->status == 1)?"success":"warning" ?>"><?php echo ($plano->status == 1)?'Activo':'Oculto'; ?></span></td>
										</tr>
									<?php }
								?>
					        </tbody>
					    </table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>