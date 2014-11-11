{{ Form::open(array('url' => 'users/create', 'class' => 'form-signup')) }}
    <h2>Register</h2>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error  }}</li>
        @endforeach
    </ul>

    {{ Form::text('firstname', null, array('placeholder' => 'First Name', 'class' => 'input-block-level') ) }}
    {{ Form::text('lastname', null, array('placeholder' => 'Last Name', 'class' => 'input-block-level') ) }}
    {{ Form::text('email', null, array('placeholder' => 'Email Address', 'class' => 'input-block-level') ) }}
    {{ Form::password('password', null, array('placeholder' => 'Password', 'class' => 'input-block-level') ) }}
    {{ Form::password('password_confirmation', null, array('placeholder' => 'Confirm Password', 'class' => 'input-block-level') ) }}

    {{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}