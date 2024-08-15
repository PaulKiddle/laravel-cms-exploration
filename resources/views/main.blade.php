<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Laravel CMS Exploration</title>
		<link rel="stylesheet" href="./style.css">
		<style>
			dt{
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<h1>Laravel CMS Exploration</h1>

		<div style='display: flex; gap: 2em;'>
			<div style='flex: 40% 1 0;'>
				<h2>Demo Site Content</h2>
				<a href="/api">View all content in API</a> | <a href="{{ route('new') }}">Create new</a>
				<p>This site has one example content type with a title and HTML body.</p>
				<table style='width: 100%;'>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>API</th>
					</tr>
					@foreach ($items as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>
							<a href="{{ route('content', ['id'=>$item->id]) }}">{{ $item->title }}</a>
						</td>
						<td><a href="{{ route('api.content', ['id'=>$item->id]) }}">View in API</a></td>
					</tr>
					@endforeach
				</table>
			</div>

			<div>
				<h2>Components required in a CMS</h2>

				✅ - included in this demo<br>
				❌ - not included in this demo
				<dl>
					<dt>Application Framework ✅</dt>
					<dd>Laravel - comes with built-in ORM (Eloquent), CSRF protection</dd>

					<dt>Database ✅</dt>
					<dd>SQLite for development, MariaDB for production</dd>

					<dt>Media/Object storage ❌</dt>
					<dd>Filesystem for development, cloud service for production?</dd>

					<dt>Editor Interface ⭕</dt>
					<dd>
						Use Laravel's Blade templating library as a base ✅<br>
						Integrate CKEditor5 for rich text editing ✅<br>
						Use Livewire for interactive components like image upload ❌<br>
						What other functionality do editors need ❓<br>
					</dd>

					<dt>HTTP API ✅</dt>
					<dd>
						Use Laravel's API router to output data as a simple but well defined
						JSON structure, adhering to the predefined data models.
					</dd>

					<dt>Authentication ❌</dt>
					<dd>
						OAuth/Azure integration, with a dummy OAuth server for development
					</dd>

					<dt>Redis ❌</dt>
					<dd>For caching data</dd>

					<dt>Logging service ❌</dt>
					<dd>E.g. Sentry</dd>
				</dl>
			</div>
		</div>
	</body>
</html>
