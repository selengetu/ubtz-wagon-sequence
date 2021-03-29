<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="register-block">
    <div class="container">
        <div class="row">
            <div class="col-md-5 banner-sec">
            </div>
            <div class="col-md-7 register-sec">
                <div class="col-md-8">
                <h2 class="text-center" style="padding-top: 50px"> Зүтгүүрийн хөдөлгөөн зохицуулалтын систем</h2>
                <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
            
                    <div class="form-group">
                        <label for="exampleInputName1" class="text-uppercase">НЭВТРЭХ НЭР</label>
                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus placeholder="Нэвтрэх код">
                        @if ($errors->has('username'))
                            <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                        @endif
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAddress1" class="text-uppercase">НУУЦ ҮГ</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                      
                    </div>



                    <div class="form-group">
                        <button type="submit" class="btn btn-register form-control">
                            Нэвтрэх
                        </button>
                    </div>
                </div>
                </form>

            </div>
           
        </div>
</section>
<style>
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

    .register-block {
        background: #DE6262;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #d2d6d9, #d2d6d9);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #d2d6d9, #d2d6d9);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        float: left;
        width: 100%;
        height: 100%;
        padding: 30px 10px;
    }

    .input-group-text {
        width: 80px
    }

    .banner-sec {
        background: url('/assets/images/1.jpg') no-repeat bottom;
        background-size: cover;
        min-height: 700px;
        border-radius: 10px;
        padding: 0;
    }

    .container {
        background: #fff;
        border-radius: 10px;
        box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
    }

    .carousel-inner {
        border-radius: 0 10px 10px 0;
    }

    .carousel-caption {
        text-align: left;
        left: 5%;
    }

    .register-sec {
        padding: 50px 30px;
        position: relative;
    }

    .register-sec .copy-text {
        position: absolute;
        width: 80%;
        bottom: 20px;
        font-size: 13px;
        text-align: center;
    }

    .register-sec .copy-text i {
        color: #FEB58A;
    }

    .register-sec .copy-text a {
        color: #E36262;
    }

    .register-sec h2 {
        margin-bottom: 30px;
        font-weight: 800;
        font-size: 30px;
        color: #3f4c6b;
    }

    .register-sec h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #3f4c6b;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
        margin-left: auto;
        margin-right: auto
    }

    .btn-register {
        background: #3f4c6b;
        color: #fff;
        font-weight: 600;
    }

    .banner-text {
        width: 70%;
        position: absolute;
        bottom: 40px;
        padding-left: 20px;
    }

    .banner-text h2 {
        color: #fff;
        font-weight: 600;
    }

    .banner-text h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #FFF;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
    }

    .banner-text p {
        color: #fff;
    }

</style>
