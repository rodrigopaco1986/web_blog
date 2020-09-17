<div class="card-body">
	<div class="row">
	    <div class="col-12">
	        @frmInputText([
	            'name'      => 'name',
	            'title'     => 'Name *',
	            'disabled'  => $disabled,
	        ])
	        @endfrmInputText
	    </div>
	    <div class="col-12">
	        @frmInputText([
	            'name'      => 'email',
	            'title'     => 'Email *',
	            'disabled'  => $disabled,
	        ])
	        @endfrmInputText
	    </div>
	    <div class="col-12">
	        @frmInputPassword([
	            'name'      => 'password',
	            'title'     => 'Password',
	            'disabled'  => $disabled,
	        ])
	        @endfrmInputText
	    </div>
	    <div class="col-12">
	        @frmInputPassword([
	            'name'      => 'password_confirmation',
	            'title'     => 'Confirm password',
	            'disabled'  => $disabled,
	        ])
	        @endfrmInputText
	    </div>
	</div>
</div>
<div class="card-footer">
	@if(!$disabled)
		<a href="{{ route('profile.show', ['profile' => Auth::user()->id]) }}" class="btn btn-default">Cancel</a>
		<button type="submit" class="btn btn-primary">Update</button>
	@endif
</div>