<div>
	@if(session()->has('message'))
		<div class="alert alert-success">
			Post added successfully!
		</div>
	@endif

	<livewire:post-create></livewire:post-create>

    @foreach($posts as $post)
		<livewire:post-single :post="$post" :key="$post->id"></livewire:post-single>
    @endforeach

	{{ $posts->links() }}
</div>
