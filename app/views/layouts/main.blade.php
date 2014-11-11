<!doctype html><html>
<head><title></title></head>
<body>

@if (Session::has('message'))
    <p>{{ Session::get('message') }}</p>
@endif

{{ $content }}


<nav>
{{ HTML::link('users/login', 'Login') }} &nbsp; | &nbsp;
{{ HTML::link('users/logout', 'Log out') }} &nbsp; | &nbsp;
{{ HTML::link('users/dashboard', 'Dashboard') }} &nbsp; | &nbsp;
{{ HTML::link('users/register', 'Register') }} &nbsp; | &nbsp;
</nav>

</body>
</html>