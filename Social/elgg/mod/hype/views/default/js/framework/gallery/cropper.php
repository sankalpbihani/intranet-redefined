<?php if (FALSE) : ?>
	<script type="text/javascript">
<?php endif; ?>

	elgg.provide('framework.gallery.cropper');

	/**
	 * Register the avatar cropper.
	 *
	 * If the hidden inputs have the coordinates from a previous cropping, begin
	 * the selection and preview with that displayed.
	 */
	framework.gallery.cropper.init = function() {
		var params = {
			handles: 'corners',
			selectionOpacity: 0.3,
			aspectRatio: '1:1',
			onSelectEnd: framework.gallery.cropper.selectChange,
			onSelectChange: framework.gallery.cropper.preview,
			parent: '.elgg-form-gallery-thumb'
		};

		if ($('input[name=x2]').val()) {
			params.x1 = $('input[name=x1]').val();
			params.x2 = $('input[name=x2]').val();
			params.y1 = $('input[name=y1]').val();
			params.y2 = $('input[name=y2]').val();
		}

		$('#gallery-crop-master').imgAreaSelect(params);

		if ($('input[name=x2]').val()) {
			var ias = $('#gallery-crop-master').imgAreaSelect({instance: true});
			var selection = ias.getSelection();
			framework.gallery.cropper.preview($('#gallery-crop-master'), selection);
		}
	};

	/**
	 * Handler for changing select area.
	 *
	 * @param {Object} reference to the image
	 * @param {Object} imgareaselect selection object
	 * @return void
	 */
	framework.gallery.cropper.preview = function(img, selection) {
		// catch for the first click on the image
		if (selection.width == 0 || selection.height == 0) {
			return;
		}

		var origWidth = $("#gallery-crop-master").width();
		var origHeight = $("#gallery-crop-master").height();
		var scaleX = 100 / selection.width;
		var scaleY = 100 / selection.height;
		$('#gallery-crop-preview > img').css({
			width: Math.round(scaleX * origWidth) + 'px',
			height: Math.round(scaleY * origHeight) + 'px',
			marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
			marginTop: '-' + Math.round(scaleY * selection.y1) + 'px'
		});
	};

	/**
	 * Handler for updating the form inputs after select ends
	 *
	 * @param {Object} reference to the image
	 * @param {Object} imgareaselect selection object
	 * @return void
	 */
	framework.gallery.cropper.selectChange = function(img, selection) {
		$('input[name=x1]').val(selection.x1);
		$('input[name=x2]').val(selection.x2);
		$('input[name=y1]').val(selection.y1);
		$('input[name=y2]').val(selection.y2);
	};

	elgg.register_hook_handler('init', 'system', framework.gallery.cropper.init);
	elgg.register_hook_handler('cropper', 'framework:gallery', framework.gallery.cropper.init);
	
<?php if (FALSE) : ?>
	</script>
	<?php endif;
?>