<?php $path = explode("/",Yii::app()->request->pathInfo); ?>
<li>
	<a href='<?php echo $this->createUrl('index/') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'index')?'active':''):'active'; ?>">
		<i class='icon-home-3'></i>
		<span>Dashboard</span>
	</a>
</li>

<li>
	<a href='<?php echo $this->createUrl('slides/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'slides')?'active':''):''; ?>">
		<i class='glyphicon glyphicon-sound-stereo'></i>
		<span>Slides</span>
	</a>
</li>

<li class='has_sub'>
	<a href='#'>
		<i class=' icon-layers'></i>
		<span>Proyecto</span>
		<span class="pull-right">
			<i class="fa fa-angle-down"></i>
		</span>
	</a>
	<ul>
		<li>
			<a href='<?php echo $this->createUrl('details/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'details')?'active':''):''; ?>">
				<span>Detalles Encabezado</span>
			</a>
		</li>
		<li>
			<a href='<?php echo $this->createUrl('itemsproject/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'itemsproject')?'active':''):''; ?>">
				<span>Items</span>
			</a>
		</li>
	</ul>
</li>

<li class='has_sub'>
	<a href='#'>
		<i class=' icon-layers'></i>
		<span>Apartamentos</span>
		<span class="pull-right">
			<i class="fa fa-angle-down"></i>
		</span>
	</a>
	<ul>
		<li>
			<a href='<?php echo $this->createUrl('itemsapartament/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'itemsapartament')?'active':''):''; ?>">
				<span>Items</span>
			</a>
		</li>
		<li>
			<a href='<?php echo $this->createUrl('planos/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'planos')?'active':''):''; ?>">
				<span>Planos</span>
			</a>
		</li>
	</ul>
</li>

<li>
	<a href='<?php echo $this->createUrl('itemslocal/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'itemslocal')?'active':''):''; ?>">
		<i class='icon-newspaper'></i>
		<span>Items local</span>
	</a>
</li>

<li class='has_sub'>
	<a href='#'>
		<i class='icon-picture-2'></i>
		<span>Multimedia</span>
		<span class="pull-right">
			<i class="fa fa-angle-down"></i>
		</span>
	</a>
	<ul>
		<li>
			<a href='<?php echo $this->createUrl('galleries/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'galleries')?'active':''):''; ?>">
				<span>Galerias</span>
			</a>
		</li>
		<li>
			<a href='<?php echo $this->createUrl('imagesbank/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'imagesbank')?'active':''):''; ?>">
				<span>Banco de Imagenes</span>
			</a>
		</li>
	</ul>
</li>