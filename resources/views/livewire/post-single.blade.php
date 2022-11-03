<div class="d-flex mb-3">
	<div class="flex-grow-0">
		<img src="{{ $post->user->avatar() }}" alt="{{ $post->user->name }}" class="mr-3 rounded-circle" style="width: 50px;">
	</div>

	<div class="flex-grow-1 ms-3">
		<h5 class="mt-0">{{ $post->user->name }}</h5>
		{{ $post->body }}
	</div>
</div>
