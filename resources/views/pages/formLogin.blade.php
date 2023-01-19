@extends('login')


@section('content')
<form action="/loginAuth" class="login-form" method="POST">

    @csrf
    <div class="form-group">
        <input type="text" class="form-control rounded-left" placeholder="Username" required name="name">
    </div>
        <div class="form-group d-flex">
        <input type="password" class="form-control rounded-left" placeholder="Password" required name="password">
        </div>
       
                <div class="" style="display: flex;justify-content: end">
                    <a href="/registration">Registration</a>
                </div>
   
    <div class="form-group">
        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
    </div>
</form>
@endsection