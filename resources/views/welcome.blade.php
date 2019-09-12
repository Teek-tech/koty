<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
<style>
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
</head>
<body>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 2 minutes away from providing your kid with so much opportunities to kick start his or her career!</p>
                        <input type="submit" name="" value="CAMET EMPIRE"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            
                            <li class="nav-item">
                                <a class="nav-link">KID OF THE YEAR {{date('Y')}}</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">REGISTRATION FORM</h3>
                                <div class="col-md-12">
                                @if(session()->has('success'))
                                    <div class="alert alert-solid alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        <b style="color:black;"> {{ session()->get('success') }}</b>
                                    </div>
                                @endif
                                </div>
                               
                                <form class="appointment-form" id="kotyform" action="{{route('user.register')}}"  enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('POST')
                                
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="first_name" class="form-control" placeholder="Enter First Name *" value="{{old('first_name')}}" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email *" value="{{old('email')}}"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" name="phone_no" minlength="11" maxlength="11" name="txtEmpPhone" class="form-control" placeholder="Enter mobile number *" value="{{old('phone_no')}}" required/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="birthmonth" required>
                                                <option class="hidden"  selected disabled>Please select month</option>
                                                <option slected value="">Anniversary Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="">Upload Contest Image [Max: 4mb]</label>
                                            <input type="file" name="contest_image"  class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name *" value="{{old('last_name')}}" required />
                                        </div>
                                        <div class="form-group">
                                        <input type="date" name="dob" class="form-control" required value="{{old('dob')}}"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" name="whatsApp_no" minlength="11" maxlength="11" name="txtEmpPhone" class="form-control" placeholder="Your whatApp number *" value="{{old('whatsApp_no')}}" required/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="state_of_res" required>
                                                <option class="hidden"  selected disabled>Please select state of residence</option>
                                                <option>ABUJA FCT</option>
                                                <option>ABIA</option>
                                                <option>ADAMAWA</option>
                                                <option>AKWA IBOM</option>
                                                <option>ANAMBRA</option>
                                                <option>BAUCHI</option>
                                                <option>BAYELSA</option>
                                                <option>BENUE</option>
                                                <option>BORNO</option>
                                                <option>CROSS RIVER</option>
                                                <option>DELTA</option>
                                                <option>EBONYI</option>
                                                <option>EDO</option>
                                                <option>EKITI</option>
                                                <option>ENUGU</option>
                                                <option>GOMBE</option>
                                                <option>IMO</option>
                                                <option>JIGAWA</option>
                                                <option>KADUNA</option>
                                                <option>KANO</option>
                                                <option>KATSINA</option>
                                                <option>KEBBI</option>
                                                <option>KOGI</option>
                                                <option>KWARA</option>
                                                <option>LAGOS</option>
                                                <option>NASSARAWA</option>
                                                <option>NIGER</option>
                                                <option>OGUN</option>
                                                <option>ONDO</option>
                                                <option>OSUN</option>
                                                <option>OYO</option>
                                                <option>PLATEAU</option>
                                                <option>RIVERS</option>
                                                <option>SOKOTO</option>
                                                <option>TARABA</option>
                                                <option>YOBE</option>
                                                <option>ZAMFARA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="">Upload Payment Receipt [Max: 4mb]</label>
                                            <input type="file" name="payment_receipt" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="referrer" required>
                                                <option class="hidden"  selected disabled>Where did you hear about us?</option>
                                                <option value="ijeoma">IJEOMA</option>
                                                <option value="chinedu">CHINEDU</option>
                                                <option value="tasie">TASIE</option>
                                                <option value="cynthia">CYNTHIA</option>
                                                <option value="david">DAVID</option>
                                                <option value="somto">SOMTO</option>
                                                <option value="dabs">DABS</option>
                                                <option value="esther">ESTHER</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="twitter">Twitter</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <input type="text" id="getFee" name="contest_fee" value="5000"/>
                                        <input type="text" name="pay_reference" value="{{ old('reference') }}" id="refcode"/>
                                    <button type="button" onclick="payWithPaystack()" class="btnRegister">Register</button>
                                    </div>
                                </div>
                                
                                </form>
                            </div>
                          
                        </div>
                    </div>
                </div>

            </div>

            <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="cotm_reg/js/paystack.js"></script> 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
