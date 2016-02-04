<!DOCTYPE html>
<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
<?php echo $this->tag->tagHtml('h1'); ?> Date <?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>


<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
	<form method="post">
            <div class="form-group">
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
      </div>
      <div class="form-group"> 
        <button class="btn btn-primary " name="submit" type="submit">Submit</button>
      </div>
    </form>
	<!-- Form code ends --> 

    </div>
  </div>    
 </div>
</div>

<script>
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options); //initiali110/26/2015 8:20:59 PM ze plugin
</script>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
