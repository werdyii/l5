@if(Session::has('flash_message'))
	<div class="alert 
			{{ Session::has('flash_type')? 'alert-'.session('flash_type')  : 'alert-info' }}
			{{ Session::has('flash_important')? 'alert-important' : '' }}
			">
		@if(Session::has('flash_important'))
			<button type="button" class="close" aria-hidden="true" data-dismiss="alert" >$times;</button>
		@endif

		{{ session('flash_message') }}
	</div>
@endif

<!-- 
<script>
	$("div.alert").not(".alet-important").delay(4000).slideUp(300);
</script>

-->