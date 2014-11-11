{{ Form::open(array('url' => 'users/signin', 'class' => 'form-signin')) }}
    <h2>Login</h2>
    {{ Form::text('email', null, array('class' => 'input-block-level', 'placeholder' => 'Email Address')) }}
    {{ Form::password('password', null, array('class' => 'input-block-level', 'placeholder' => 'Password')) }}

    {{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}