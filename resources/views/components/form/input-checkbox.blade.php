<div class="form-group">
	{{ Form::hidden($name,0) }}
	{!! Form::label($name, $title, ['class' => 'col-form-label font-weight-semibold ' . ($errors->has($name) ? 'text-danger' : '')]) !!}
	<div class="icheck-primary">
		<input type="checkbox" name="{{ $name }}" id="{{ $name }}" {{ $disabled }} value="1" 
			@if( isset($checked) ) {{ ($checked) ? 'checked' : '' }}  @endif
			>
		<label for="{{ $name }}">
		</label>
	</div>
	{!! $errors->first($name, '<span class="form-text text-danger">:message</span>') !!}
</div>