<div class="form-group">
	@if($title)
		{!! Form::label($name, $title, ['class' => 'col-form-label font-weight-semibold ' . ($errors->has($name) ? 'text-danger' : '')]) !!}
	@endif
	<div class="{{ (isset($prepend) || isset($append) ? 'input-group' : '') }}">
		@if(isset($prepend))
			<span class="input-group-prepend">
				 {!! $prepend !!}
			</span>
		@endif
		{!! Form::textarea($name, ($value ?? null), ['class' => $errors->has($name) ? 'form-control border-danger' : 'form-control', 'placeholder' => ($placeholder ?? ''), $disabled, 'rows' => ($rows ?? 3)]) !!}
		@if(isset($append))
			<span class="input-group-append">
				{!! $append !!}
			</span>
		@endif
	</div>
	@if(isset($msg)) <span class="form-text text-muted">{!! $msg !!}</span> @endif
	{!! $errors->first($name, '<span class="form-text text-danger">:message</span>') !!}
</div>