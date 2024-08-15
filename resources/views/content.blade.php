<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CKEditor 5 Sample</title>
		<link rel="stylesheet" href="./style.css">
		<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
		<style>
			.ck-content {
				min-height: 15em;
			}

			form > * {
				margin-block: 1rem;
			}
		</style>
	</head>
	<body>
		<h1>Edit content</h1>
		<a href='/'>Home</a>
		@if ($model->id)
		| <a href="{{ route('api.content', $model) }}">View in API</a>
		| <a href="{{ route('new') }}">Create new</a>
		@endif
		<form method=post>
            @csrf
            <input style='font-size: 2em; font-weight: bold;' name=title value="{{ $model->title }}" placeholder='Content title'>
			<div class="main-container">
				<div
					class="editor-container editor-container_classic-editor editor-container_include-style editor-container_include-block-toolbar"
					id="editor-container"
				>
					<div class="editor-container__editor"><textarea rows=15 name=body id="editor">{{ $model->body }}</textarea></div>
				</div>
			</div>
            <button>Submit</button>
        </form>
		<script type="importmap">
		{
			"imports": {
				"ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
				"ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
			}
		}
		</script>
        <script type="module" src="{{ URL::asset('assets/vendor/ckeditor5.js') }}"></script>
	</body>
</html>
