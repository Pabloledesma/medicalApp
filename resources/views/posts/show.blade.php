<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
</head>
<body>
	<h1>{{ $post->title }}</h1>
	
	@can('update-post')
		<a href="#">Update this post</a>
	@endcan
</body>
</html>