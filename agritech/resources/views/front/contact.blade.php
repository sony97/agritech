
@extends('front.master')
@section('title','Contact Page')

@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <style>
        *{
            box-sizing: border-box;
        }

        body{
            background:#92bde7;
            color:#485e74;
            line-height:1.6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        .container{
            max-width:1170px;
            margin-left:auto;
            margin-right:auto;
            padding:1em;
        }

        ul{
            list-style: none;
            padding:0;
        }

        .brand{
            text-align: center;
        }

        .brand span{
            color:#fff;
        }

        .wrapper{
            box-shadow: 0 0 20px 0 rgba(72,94,116,0.7);
        }

        .wrapper > *{
            padding: 1em;
        }

        .company-info{
            background:#c9e6ff;
        }

        .company-info h3, .company-info ul{
            text-align: center;
            margin:0 0 1rem 0;
        }

        .contact{
            background:#f9feff;
        }


        .contact form{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap:20px;
        }

        .contact form label{
            display:block;
        }

        .contact form p{
            margin:0;
        }

        .contact form .full{
            grid-column: 1 / 3;
        }

        .contact form button, .contact form input, .contact form textarea{
            width:100%;
            padding:1em;
            border:1px solid #c9e6ff;
        }

        .contact form button{
            background:#c9e6ff;
            border:0;
            text-transform: uppercase;
            cursor: pointer;
        }

        .contact form button:hover,.contact form button:focus{
            background:#92bde7;
            color:#fff;
            outline:0;
            transition: background-color 2s ease-out;
        }


        @media(min-width:700px){
            .wrapper{
                display: grid;
                grid-template-columns: 1fr 2fr;
            }

            .wrapper > *{
                padding:2em;
            }

            .company-info h3, .company-info ul, .brand{
                text-align: left;
            }
        }
    </style>

    <div class="container">
        <h1 class="brand"><span>Agritech</span></h1>
        <div class="wrapper animated bounceInLeft">
            <div class="company-info">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fa fa-road"></i> Manipal</li>
                    <li><i class="fa fa-phone"></i> +91-8073604549</li>
                    <li><i class="fa fa-envelope"></i> sonyjoseph2097@gmail.com</li>
                </ul>
            </div>
            <div class="contact">
                <h3>Email Us</h3>
                <form>
                    <p>
                        <label>Name*</label>
                        <input type="text" name="name" required="">
                    </p>

                    <p>
                        <label>Email Address*</label>
                        <input type="email" name="email" required="">
                    </p>
                    <p>
                        <label>Phone Number*</label>
                        <input type="text" name="phone" required="">
                    </p>
                    <p class="full">
                        <label>Message*</label>
                        <textarea name="message" rows="5" required=""></textarea>
                    </p>
                    <p class="full">
                        <button>Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>

@endsection
