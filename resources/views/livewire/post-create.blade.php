<div class="mb-4">
	<form wire:submit.prevent="addPost">
		<div class="mb-3">
			<label for="body" class="visually-hidden">Your post</label>
			<textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" wire:model.debounce="body"></textarea>

			@error('body')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
		</div>

		<button type="submit" class="btn btn-primary">Post</button>
	</form>
</div>
