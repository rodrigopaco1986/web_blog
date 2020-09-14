<a href="{{ $url }}">
	<u>{{ $title }}</u>&nbsp;
	@if($sb == $name) 
		<i class="fas fa-sort-amount-{{ ($sd == 'asc' ? 'up' : 'down') }} pull-right"></i> 
	@endif
</a>