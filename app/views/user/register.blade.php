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
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container">
    <div class="col-md-6">
        <h2>Application Process</h2>
        <form class="" role="form" method="post" onsubmit="return verify();">
            <fieldset class="registration-form" style="width:100%">
                <div class="form-group row">
                <label class="col-md-3">Select Plan</label>
                    <div class="col-md-9">
                        <select name="plan" class="form-control" required>
                            <option value="">Select Plan</option>
                            <option value="1"> Quaterly (Rs 1650)</option>
                            <option value="2"> Half yearly (Rs 3150)</option>
                            <option vlaue="3"> yearly (Rs 6000)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Name</label>
                    <div class="col-md-9">
                        <input type="text" name="name" placeholder="Name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                 <label class="col-md-3">School's Name</label>
                    <div class="col-md-9">
                        <input type="text" name="school" placeholder="School Name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Parent's Name</label>
                    <div class="col-md-9">
                        <input type="text" name="parent" placeholder="Parent Name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Contact no</label>
                    <div class="col-md-9">
                        <input type="text" name="contact" placeholder="" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Gender</label>
                    <div class="col-md-9">
                        <input type="radio" name="gender" value="Male" required> Male
                        <input type="radio" name="gender" value="Female" required> Female
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Date of Birth</label>
                    <div class="col-md-9">
                        <input type="date" name="dob" placeholder="" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Country</label>
                    <div class="col-md-9">
                        <select name="country" class="form-control" required>
                            <option value="">Select Country</option>
                            <option>India</option>
                            <option>USA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Email</label>
                    <div class="col-md-9">
                        <input type="email" name="email" placeholder="email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Passowrd</label>
                    <div class="col-md-9">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Confirm Password</label>
                    <div class="col-md-9">
                        <input type="password" id="password_confirm" name="password_confirm" placeholder="Password (Confirm)" class="form-control" required>
                    </div>
                </div>
                <div class="alert alert-danger" role="alert" style="display:none" id="pass-error">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    Password Mismatch
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-md btn-block">Register</button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="col-md-6">
        <h2>About the price</h2>
        <div id="pricing-table" class="row">
                <div class="col-md-4">
                    <ul class="plan plan1">
                        <li class="plan-name">
                            <h3>3 Months</h3>
                        </li>
                        <li>
                            <div>
                                <span class="price"><b>Rs 1650</b></span>
                            </div>
                        </li>
                    </ul>
                </div><!--/.col-md-4-->
                <div class="col-md-4">
                    <ul class="plan plan1">
                        <li class="plan-name">
                            <h3>6 Months</h3>
                        </li>
                        <li>
                            <div>
                                <span class="price"><b>Rs 3150</b></span>
                            </div>
                        </li>
                    </ul>
                </div><!--/.col-md-4-->
                <div class="col-md-4">
                    <ul class="plan plan1 featured">
                        <li class="plan-name">
                            <h3>12 Months</h3>
                        </li>
                        <li>
                            <div>
                                <span class="price"><b>Rs 6000</b></span>
                            </div>
                        </li>
                    </ul>
                </div><!--/.col-md-4-->
            </div> 
            <p>
                Studies have shown that B-MAT greatly improves the child’s academic performance if practised for a prolonged period. It is therefore advisable to take up a year’s membership for your child to reap the full benefits of the program.
            </p>
            <p>We also have an option to enrol for a 3 months and a 6 months program for your child to experience a fun way of learning Complex concepts. </p>
            <p>Payment can be done through Debit and Credit Cards ,where the tuition fee would be deducted as per the package selected given to us during payment instructions. </p>
            <p>In case of the process of withdrawal the auto payment option is stopped on request. </p>
            <p>Types of Cards Accepted VISA, MASTERCARD </p>
            <p>Mode of Payment Debit and Credit Card </p>
            <p>Direct Account Debit option is also available on request. The account no is provided to the user and post the payment the login account is activated. </p>
            <p>In the case of Withdrawal from the program it can be processed through the Information Page post login. </p>
    </div>
    </section><!--/#registration-->

<script type="text/javascript">
    function verify() {
        if($('#password').val()!=$('#password_confirm').val())
        {
            alert($('#password').val());
            $('#password_confirm').val("");
            $('#pass-error').css('display','block');
            return false;
        }
        $('#pass-error').css('display','none');
        return true;
    }
</script>
@endsection