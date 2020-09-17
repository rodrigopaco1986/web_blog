<div class="form-group">
	{!! Form::label($name, $title, ['class' => 'col-form-label font-weight-semibold ' . ($errors->has($name) ? 'text-danger' : '')]) !!}
	<div class="{{ (isset($prepend) || isset($append) ? 'input-group' : '') }}">
		@if(isset($prepend))
			<span class="input-group-prepend">
				{!! $prepend !!}
			</span>
		@endif
		{!! Form::password($name, ['class' => $errors->has($name) ? 'form-control border-danger' : 'form-control', $disabled]) !!}
		@if(isset($append))
			<span class="input-group-append">
				{!! $append !!}
			</span>
		@endif
	</div>
	@if(isset($msg)) <span class="form-text text-muted"><small>{!! $msg !!}</small></span> @endif
	{!! $errors->first($name, '<span class="form-text text-danger">:message</span>') !!}
</div>