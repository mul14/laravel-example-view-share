<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View::share() example</title>
</head>
<body>

<ul>
    @foreach($menu as $key => $val)
        <li><a href="{{ $val }}">{{ $key }}</a></li>
    @endforeach
</ul>

<h1>About</h1>

I can access menu from every view.

</body>
</html>
