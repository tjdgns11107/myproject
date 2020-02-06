@extends('header.header')

@section('content')

    <form action="{{ route('remind.store') }}" method="post" role="form" class="form__auth">
        {!! csrf_field() !!}

        <div>
            <label for="email">이메일 입력</label>
            <input type="email" name="email" class="fo rm-control" placeholder="{{ trans('auth.form.email') }}" value="{{ old('email') }}" autofocus/>
            {!! $errors->first('email', '<span class="form=error">:message</span>') !!}
        </div>

    </form>

    @include('partials.footer')

@stop
