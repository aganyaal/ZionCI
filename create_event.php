<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
	integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"
	integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
	integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
<script type='text/javascript'
	src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type='text/javascript'>
	$(function () {
		$('.input-daterange').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			todayHighlight: true
		});
	});

</script>

<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('events/create'); ?>
<div class="form-group">
	<label>Title</label>
	<input type="text" class="form-control" name="title" placeholder="Add Title">
</div>

<label for="input-daterange">Duration</label>
<div class="input-daterange input-group form-group" id="datepicker">

	<input type="text" class="input-sm form-control" name="from" placeholder="Start Date" />

	<kbd class="font-weight-bolder p-1 m-2">
		<i class="fas fa-caret-right text-warning"></i>
		<i class="fas fa-caret-right text-warning"></i>
	</kbd>

	<input type="text" class="input-sm form-control" name="to" placeholder="Finish date" />
</div>

<div class="form-group">
	<label>Body</label>
	<textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
</div>

<div class="form-group">
	<label>Category</label>
	<select name="category_id" class="form-control">
		<?php foreach($categories as $category): ?>
		<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		<?php endforeach; ?>
	</select>
</div>

<div class="form-group">
	<label>Upload Image</label>
	<input type="file" name="userfile" size="20">
</div>

<button type="submit" class="btn btn-default">Submit</button>
</form>
