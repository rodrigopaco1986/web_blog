<div class="card-body">
	<div class="row">
	    <div class="col-12">
	        @frmInputText([
	            'name'      => 'title',
	            'title'     => 'Title *',
	            'msg'		=> 'The title will be used to generate a human-readable url slug',
	            'disabled'  => $disabled,
	        ])
	        @endfrmInputText
	    </div>
	    <div class="col-12">
	        @frmTextarea([
	            'name'      => 'description',
	            'title'     => 'Description *',
	            'rows'		=> '5',
	            'disabled'  => $disabled,
	        ])
	        @endfrmTextarea
	    </div>
	    <div class="col-12">
	        @frmInputCheckbox([
	            'name'      => 'publicated',
	            'title'     => 'Publicated?',
	            'disabled'  => $disabled,
	            'checked'	=> (bool)($post->publication_date ?? false),
	        ])
	        @endfrmInputCheckbox
	    </div>
	</div>
</div>
<div class="card-footer">
	<a href="{{ route('posts.index') }}" class="btn btn-default">Cancel</a>
	@if(!$disabled)
		<button type="submit" class="btn btn-primary">Submit</button>
	@endif
</div>