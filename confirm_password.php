<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>WeSolv Admin Login</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon_152.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Roboto:300);

      .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
      }
      .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      }
      .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
      }
      .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #f46d19;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        opacity: 1;
      }
      .form button:hover,.form button:active,.form button:focus {
        background: #db5a0a;
        outline: none !important;
        text-decoration: none !important;
      }
      .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
      }
      .form .message a {
        color: #4CAF50;
        text-decoration: none;
      }
      .form .register-form {
        display: none;
      }
      .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
      }
      .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
      }
      .container .info {
        margin: 50px auto;
        text-align: center;
      }
      .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
      }
      .container .info span {
        color: #4d4d4d;
        font-size: 12px;
      }
      .container .info span a {
        color: #000000;
        text-decoration: none;
      }
      .container .info span .fa {
        color: #EF3B3A;
      }
      body {
        background: #e6e6e6; /* fallback for old browsers */
        background: -webkit-linear-gradient(right, #e6e6e6, #cccccc);
        background: -moz-linear-gradient(right, #e6e6e6, #cccccc);
        background: -o-linear-gradient(right, #e6e6e6, #cccccc);
        background: linear-gradient(to left, #e6e6e6, #cccccc);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;      
      }
      .go_red{
        -webkit-animation-name: go_red 1s ease-in 0s forwards;
        /*-webkit-animation-duration: 1s;*/
        animation: go_red 1s ease-in 0s forwards;
        /*animation-duration: 1s;*/
        /*background-color: #f44336 !important;*/
      }
      @-webkit-keyframes go_red{
        from{background-color: #f2f2f2;}
        to{background-color: #ef9a9a;}
      }
      @keyframes go_red{
        from{background-color: #f2f2f2;}
        to{background-color: #ef9a9a;}
      }
      .go_green {
        -webkit-animation-name: go_green 1s ease-in 0s forwards;
        /*-webkit-animation-duration: 1s;*/
        animation: go_green 1s ease-in 0s forwards;
        /*animation-duration: 1s;*/
        /*background-color: #66bb6a !important;*/
      }
      @-webkit-keyframes go_green{
        from{background-color: #f2f2f2;}
        to{background-color: #a5d6a7;}
      }
      @keyframes go_green{
        from{background-color: #f2f2f2;}
        to{background-color: #a5d6a7;}
      }
      button:disabled{
        opacity: 0.5;
      }
    </style>
  </head>
  <body>
    <div class="login-page">

      <div class="form">
        <div class="" style="text-align:center; margin: 0 0 15px;">
          <img src="images/wesolv_logo_bulb_white_BG.png" class="img-responsive nav-btn"  alt="p" width="150px" height="45x" style="position: relative !important;
          top: -7px !important;"> <span style="">Password<br><span style="margin-left:150px;">Change Pannel</span></span>
        </div>
        <form class="login-form">
          <input id="pass1" type="password" placeholder="new password" />
          <input id="pass2" type="password" placeholder="confirm password" onkeyup="verifyThis()"/>
          <button id="btn" type="submit" disabled>Change & Save</button>
        </form>
      </div>
    </div>

    <script type="text/javascript">
      jQuery.fn.extend({
          disable: function(state) {
              return this.each(function() {
                  this.disabled = state;
              });
          }
      });
      function verifyThis(argument) {
        pass1 = $('#pass1').val();
        elm = $('#pass2');
        pass2 = elm.val();
        btn = $('#btn');

        if(pass1 === pass2){
          elm.removeClass('go_red');
          elm.addClass('go_green');
          btn[0].disabled = false;
        }
        else
          elm.removeClass('go_green');
          elm.addClass('go_red');
          // btn[0].disabled = true;
      }
    </script>

  </body>
</html>