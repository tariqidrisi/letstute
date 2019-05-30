<?php if($msg['msg'] == "added") { ?> 
	<div class="alert alert-success" id="success-alert">
	    <button type="button" class="close" data-dismiss="alert">x</button>
	    <strong>Success! </strong>
	    {{$msg['msg_content']}}
	</div>
<?php } elseif($msg['msg'] == "delete") { ?>
	<div class="alert alert-danger" id="success-alert">
	    <button type="button" class="close" data-dismiss="alert">x</button>
	    <strong>Success! </strong>
	    {{$msg['msg_content']}}
	</div>	
<?php } elseif($msg['msg'] == 'error') { ?>
	<div class="alert alert-danger" id="success-alert">
	    <button type="button" class="close" data-dismiss="alert">x</button>
	    <strong>Error! </strong>
	    {{$msg['msg_content']}}
	</div>
<?php } ?>