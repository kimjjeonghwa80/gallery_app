<div id='loginUser'></div>
<div id="album"></div>
<ul id='list'></ul>
<input type="hidden" id="">
<div id="NewAlbumcreate">
</div>

<?php echo $this->Html->css(array('backbone/colorbox.css', 'backbone/fineuploader.css')); ?>
<?php echo $this->element('albumTemplate'); ?>
<?php echo $this->Javascript->link(array('backbone/jquery-1.9.1.min', 'backbone/jquery.validate.min',
                                     'backbone/jquery.fineuploader-3.4.1', 'backbone/jquery.ui',
                                     'backbone/jquery.upload', 'backbone/underscore-min', 'backbone/backbone-min',
                                     'backbone/model', 'backbone/view', 'backbone/collection',
                                     'backbone/router', 'backbone/jquery.colorbox'),true); ?>



