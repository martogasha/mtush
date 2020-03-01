
@include('adminPartials._header')
@include('admin.flash-message')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <form>
                <div id="contact-form" class="form-container" data-form-container>
                    <div class="row">
                        <div class="form-title">
                            <span>UPLOAD PRODUCT</span>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name."> </span>
						<input type="text" name="desc" placeholder="Product Name">
					</span>
                        </div>
                        <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Email."> </span>
						<input type="text"  name="size" placeholder="Product Size">
					</span>
                        </div>
                        <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Phone Number."> </span>
						<input type="text" name="price" placeholder="Product Price">
					</span>
                        </div>
                        <div class="row">
                            <input type="file" name="image">
                        </div>
                        <div class="row submit-row">
                            <button type="button" class="btn btn-block submit-form">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <form>
                <div id="contact-form" class="form-container" data-form-container>
                    <div class="row">
                        <div class="form-title">
                            <span>UPLOAD SLIDE SHOW</span>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name."> </span>
						<input type="text" name="desc" placeholder="Product Name">
					</span>
                        </div>
                        <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Email."> </span>
						<input type="text"  name="size" placeholder="Product Size">
					</span>
                        </div>
                        <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Phone Number."> </span>
						<input type="text" name="price" placeholder="Product Price">
					</span>
                        </div>
                        <div class="row">
                            <input type="file" name="image">
                        </div>
                        <div class="row submit-row">
                            <button type="button" class="btn btn-block submit-form">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <form action="{{url('adminCreate')}}" method="post">
                @csrf
                <div id="contact-form" class="form-container" data-form-container>
                    <div class="row">
                        <div class="form-title">
                            <span>Create Product categories</span>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name."> </span>
						<input type="text" name="desc" placeholder="Product Name">
					</span>
                        </div>
                        </div>
                        <div class="row submit-row">
                            <button type="submit" class="btn btn-block submit-form">Submit</button>
                        </div>
                    </div>
            </form>
        </div>



        <style>
            .form-container div, .form-container  span{
                font-family: Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif;
            }

            .form-container ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
                color:    #999;
            }

            .form-container :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
                color:    #999;
                opacity:  1;
            }

            .form-container ::-moz-placeholder { /* Mozilla Firefox 19+ */
                color:    #999;
                opacity:  1;
            }

            .form-container :-ms-input-placeholder { /* Internet Explorer 10-11 */
                color:    #999;
            }

            .form-container :placeholder-shown { /* Standard (https://drafts.csswg.org/selectors-4/#placeholder) */
                color:  #999;
            }

            .oauth-buttons {
                text-align:center;
            }
            .row {
                text-align:center;
            }
            #login-form{
                min-width:375px;
            }
            .login-container{
                width:400px;
                height:330px;
                display:inline-block;
                margin-top: -165px;
                top: 50%;
                left: 50%;
                position: absolute;
                margin-left: -200px;
            }
            .form-container .create-account:hover{
                opacity:.7;
            }
            .form-container .create-account{
                color:inherit;
                margin-top: 15px;
                display: inline-block;
                cursor:pointer;
                text-decoration:none;
            }

            .oauth-buttons .fa{
                cursor:pointer;
                margin-top:10px;
                color:inherit;
                width:30px;
                height:30px;
                text-align:center;
                line-height:30px;
                margin:5px;
                margin-top:15px;
            }
            .oauth-buttons .fa:hover{
                color:white;
            }
            .oauth-buttons .fa-google-plus:hover{
                background: #dd4b39;
            }
            .oauth-buttons .fa-facebook:hover{
                background:	#8b9dc3;
            }

            .oauth-buttons .fa-linkedin:hover{
                background:	#0077b5;
            }

            .oauth-buttons .fa-twitter:hover{
                background:	#55acee;
            }

            .form-container .req-input .input-status {
                display: inline-block;
                height: 40px;
                width: 40px;
                float: left;
            }
            .form-container .input-status::before{
                content: " ";
                height:20px;
                width:20px;
                position:absolute;
                top:10px;
                left:10px;
                color:white;
                border-radius:50%;
                background:white;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;

            }

            .form-container .input-status::after{
                content: " ";
                height:10px;
                width:10px;
                position:absolute;
                top:15px;
                left:15px;
                color:white;
                border-radius:50%;
                background:#00BCD4;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container .req-input{
                width:100%;
                float:left;
                position:relative;
                background:#00BCD4;
                height:40px;
                display:inline-block;
                border-radius:0px;
                margin:5px 0px;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container div .row .invalid:hover{
                background:#EF9A9A;
            }

            .form-container div .row .invalid{
                background:#E57373;
            }

            .form-container .invalid .input-status:before {
                width:20px;
                height:4px;
                top:19px;
                left:10px;
                background:white;/*#F44336;*/
                border-radius:0px;
                -ms-transform: rotate(45deg); /* IE 9 */
                -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
                transform: rotate(45deg);
            }

            .form-container .invalid .input-status:after {
                width:20px;
                height:4px;
                background:white;
                border-radius:0px;
                top:19px;
                left:10px;
                -ms-transform: rotate(-45deg); /* IE 9 */
                -webkit-transform: rotate(-45deg); /* Chrome, Safari, Opera */
                transform: rotate(-45deg);
            }

            .form-container div .row  .valid:hover{
                background:#A5D6A7;
            }

            .form-container div .row .valid {
                background:#81C784;

            }

            .form-container .valid .input-status:after {
                border-radius:0px;
                width: 17px;
                height: 4px;
                background: white;
                top: 16px;
                left: 15px;
                -ms-transform: rotate(-45deg);
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            .form-container .valid .input-status:before {
                border-radius:0px;
                width: 11px;
                height: 4px;
                background:white;
                top: 19px;
                left: 10px;
                -ms-transform: rotate(45deg);
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            .form-container .input-container{
                padding:0px 20px;
            }

            .form-container .row-input{
                padding:0px 5px;
            }

            .form-container .req-input.input-password{
                margin-bottom:0px;
            }
            .form-container .req-input.confirm-password{
                margin-top:0px;
            }

            .form-container {
                margin:20px;
                padding:20px;
                border-radius:0px;
                background:#B3E5FC;
                color:#00838F;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container .form-title{
                font-size:25px;
                color:inherit;
                text-align:center;
                margin-bottom:10px;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container .submit-row{
                padding:0px 0px;
            }

            .form-container .btn.submit-form{
                margin-top:15px;
                padding:12px;
                background:#00BCD4;
                color:white;
                border-radius:0px;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container .btn.submit-form:focus{
                outline:0px;
                color:white;
            }

            .form-container .btn.submit-form:hover{
                background:#00cde5;
                color:white;
            }

            .form-container .tooltip.top .tooltip-arrow {
                border-top-color:#00BCD4 !important;
            }

            .form-container .tooltip.top.tooltip-invalid .tooltip-arrow {
                border-top-color:#E57373 !important;
            }

            .form-container .tooltip.top.tooltip-invalid .tooltip-inner::before{
                background:#E57373;
            }
            .form-container .tooltip.top.tooltip-invalid .tooltip-inner{
                background:#FFEBEE !important;
                color:#E57373;
            }

            .form-container .tooltip.top.tooltip-valid .tooltip-arrow {
                border-top-color:#81C784 !important;
            }

            .form-container .tooltip.top.tooltip-valid .tooltip-inner::before{
                background:#81C784;
            }
            .form-container .tooltip.top.tooltip-valid .tooltip-inner{
                background:#E8F5E9 !important;
                color:#81C784;
            }

            .form-container .tooltip.top .tooltip-inner::before{
                content:" ";
                width:100%;
                height:6px;
                background:#00BCD4;
                position:absolute;
                bottom:5px;
                right:0px;
            }
            .form-container .tooltip.top .tooltip-inner{
                border:0px solid #00BCD4;
                background:#E0F7FA !important;
                color:#00ACC1;
                font-weight:bold;
                font-size:13px;
                border-radius:0px;
                padding:10px 15px;
            }
            .form-container .tooltip {
                max-width:150px;
                opacity:1 !important;
            }

            .form-container .message-box{
                width:100%;
                height:auto;
            }

            .form-container textarea:focus,.form-container textarea:hover{
                background:#fff;
                outline:none;
                border:0px;
            }

            .form-container .req-input textarea {
                max-width:calc(100% - 50px);
                width: 100%;
                height: 80px;
                border: 0px;
                color: #777;
                padding: 10px 9px 0px 9px;
                float:left;

            }
            .form-container input[type=text]:focus, .form-container input[type=password]:focus, .form-container input[type=email]:focus, .form-container input[type=tel]:focus, .form-container select{
                background:#fff;
                color:#777;
                border-left:0px;
                outline:none;
            }

            .form-container input[type=text]:hover,.form-container input[type=password]:hover,.form-container input[type=email]:hover,.form-container input[type=tel]:hover, . form-container select{
                background:#fff;
            }

            .form-container input[type=text], .form-container input[type=password], .form-container input[type=email],input[type=tel], form-container select{
                width:calc(100% - 50px);
                float:left;
                border-radius:0px;
                border:0px solid #ddd;
                padding:0px 9px;
                height:40px;
                line-height:40px;
                color:#777;
                background:#fff;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }
        </style>


@include('adminPartials._footer')
