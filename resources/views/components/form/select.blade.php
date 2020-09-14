<div class="form-group">
	{!! Form::label($name, $title, ['class' => 'col-form-label font-weight-semibold ' . ($errors->has($name) ? 'text-danger' : '')]) !!}
	<div class="{{ (isset($prepend) || isset($append) ? 'input-group' : '') }}">
		@if(isset($prepend))
			<span class="input-group-prepend {{ ((count($options) == 0 && isset($hideAddons)) ? 'd-none' : '') }}">
				 {!! $prepend !!}
			</span>
		@endif
		{!! Form::select($name, $options, ($value ?? ''), ['class' => $errors->has($name) ? 'form-control border-danger' : 'form-control', $disabled]) !!}
		@if(isset($append))
			<span class="input-group-append {{ ((count($options) == 0 && isset($hideAddons)) ? 'd-none' : '') }}">
				{!! $append !!}
			</span>
		@endif
	</div>
	{!! $errors->first($name, '<span class="form-text text-danger">:message</span>') !!}
	@if(isset($html)) {!! $html !!} @endif
	
</div>