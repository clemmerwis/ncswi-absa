<x-layout meta_title="Test Front Page" page="frontpage">
	<x-slot name="linksbs">
		@include('partials.linksbs')
	</x-slot>

    @include('partials.home.slider')

	@include('partials.home.about')

	@include('partials.home.flipboxtwo')

	@include('partials.home.breadcrumb')

	@include('partials.home.contact')
	
	<x-slot name="linksjs">
		@include('partials.linksjs')
	</x-slot>
</x-layout>