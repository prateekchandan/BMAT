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
        <form class="center" role="form">
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="username" name="username" placeholder="Username" class="form-control" required>
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