<ul class="breadcrumb">
  <li><a href="<?php echo site_url('dashboard/index'); ?>"><i class="icon-home"></i></a> <span class="divider">/</span></li>
  <li><a href="#">Add Row</a></li>
</ul>

	<div class="row-fluid">
		<div class="span12">
		<?php echo form_open_multipart('dashboard/addNew'); ?>

		<fieldset>
		<?php
			$this->load->view('template/show_error');

		?>
		<div class="form-horizontal">
		<div class="product_well" id="product1">
		<fieldset>

			<div class="control-group formSep template">
			<label for="input01" class="control-label">Enter Website: </label>
			<div class="controls">
			<input id="title" name="website_name" size="30" type="text"   class="span8" placeholder="Enter Website Name"/>
			</div>
			</div>


		<!--end product-->
		<!-- /single_form -->
		<div class="control-group template">
		<div class="controls">
		<input type="submit" class="btn-primary btn" value="Submit">
		</div>
		</div>
		</div>
		</fieldset>
		</form>
		</div>
</div><!-- /row -->