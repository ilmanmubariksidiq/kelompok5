<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
<?php echo $this->tag->tagHtml('h1'); ?> form <?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>


<style>

.container
{
	width: 400px;
	padding: 10px;
	border: 2px solid #000
	border-radius: 10px;
	margin : auto;
}

</style>

<div class="container">

<div class="form-group">
	<label>Name<span class="red">*</span></label>
	<input class="form-control" name="name" required="required" type="text">
</div>

<div class="form-group">
	<label>Email<span class="red">*</span></label>
	<input class="form-control" name="email" required="required" type="email">
</div>

<div class="form-group">
	<label>Phone</label>
	<input class="form-control" name="phone" type="tel">
</div>
	    <input class="btn btn-primary" name="submit" value="Submit" type="submit">      
</form> 

</div>
