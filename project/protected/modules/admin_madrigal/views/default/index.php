<!-- Page Heading Start -->
<div class="page-heading">
    <h1>Administración Madrigal</h1>
</div>
<!-- Page Heading End-->

<div class="row">
	<div class="col-lg-12">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><i class="icon-share-2"></i> <strong>Datos</strong> Contacto</h2>
				<div class="additional-btn">
					<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				<div class="col-xs-6">
					<div class="form-group">
						<label for="Facebook_url">Email Contacto</label>
						<div class="input-group">
							<input type="text" class="form-control" id="Email_url" value="<?php echo $emailContact->value; ?>" placeholder="Enter Email">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Email_url" data-value-bd="1" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label for="Twitter_url">Teléfono Contacto</label>
						<div class="input-group">
							<input type="text" class="form-control" id="Phone_url" value="<?php echo $phoneContact->value; ?>" placeholder="Enter Number Phone">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Phone_url" data-value-bd="2" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label for="Twitter_url">Celular</label>
						<div class="input-group">
							<input type="text" class="form-control" id="Phone_url" value="<?php echo $celular_uno->value; ?>" placeholder="Enter Number Phone">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Phone_url" data-value-bd="2" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label for="Twitter_url">Celular</label>
						<div class="input-group">
							<input type="text" class="form-control" id="Phone_url" value="<?php echo $celular_dos->value; ?>" placeholder="Enter Number Phone">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Phone_url" data-value-bd="2" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><i class="icon-share-2"></i> <strong>Redes</strong> Sociales</h2>
				<div class="additional-btn">
					<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				<div class="col-xs-4">
					<div class="form-group">
						<label for="Facebook_url">Facebook</label>
						<div class="input-group">
							<input type="text" class="form-control" id="Facebook_url" value="<?php echo $facebook->value; ?>" placeholder="Enter Facebook Page">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Facebook_url" data-value-bd="3" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<label for="Twitter_url">Canal YouTube</label>
						<div class="input-group">
							<input type="text" class="form-control" id="YouTube_url" value="<?php echo $youtube->value; ?>" placeholder="Enter YouTube Page">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#YouTube_url" data-value-bd="4" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<label for="Twitter_url">Video YouTube</label>
						<div class="input-group">
							<input type="text" class="form-control" id="YouTube_url" value="<?php echo $youtube_video->value; ?>" placeholder="Enter YouTube Video">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#YouTube_url" data-value-bd="4" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><i class="icon-share-2"></i> <strong>Datos Generales Edificio</strong></h2>
				<div class="additional-btn">
					<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				<div class="col-xs-6">
					<div class="form-group">
						<label for="Facebook_url">Numero de Apartamentos</label>
						<div class="input-group">
							<input type="text" class="form-control" id="Apartamentos_url" value="<?php echo $apartamentos->value; ?>" placeholder="Enter number">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Facebook_url" data-value-bd="3" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label for="Twitter_url">Numero de Locales</label>
						<div class="input-group">
							<input type="text" class="form-control" id="Locales_url" value="<?php echo $locales->value; ?>" placeholder="Enter number">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#YouTube_url" data-value-bd="4" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<label for="Twitter_url">Detalles generales Edificio</label>
						<div class="input-group">
							<input type="text" class="form-control" id="Locales_url" value="<?php echo $detalle->value; ?>" placeholder="Enter number">
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#YouTube_url" data-value-bd="4" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>