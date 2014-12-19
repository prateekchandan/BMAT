@extends('template')
@section('body')
	<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>B-MAT members login</h1>
                    <p>B-MAT members, please login here.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="{{URL::Route('home')}}">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container">
            <form class="center" role="form" method="post">
                    
                <fieldset class="registration-form">
                    @if (Session::get('messages') != null)
                         <div class="alert alert-danger" role="alert" id="pass-error">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            Email / Password Error
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-md btn-block">Login</button>
                    </div>
                </fieldset>
            </form>
    </section><!--/#registration-->

@endsection