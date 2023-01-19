@extends('login')


@section('content')
<form action="/registerUser" class="login-form" method="POST">

    @csrf
    <div class="form-group">
        <input type="text" class="form-control rounded-left" placeholder="name" required name="name">
    </div>
        <div class="form-group d-flex">
        <input type="email" class="form-control rounded-left" placeholder="email" required name="email">
    </div>
        
    <div class="form-group d-flex">
        <input type="password" class="form-control rounded-left" placeholder=" Password" required name="password">
    </div>
    <div class="form-group d-flex">
        <select class="form-select" name="role">
            <option selected>Choice Role</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
    </div>
        
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
    </div>
</form>
@endsection