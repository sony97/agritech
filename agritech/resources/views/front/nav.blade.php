<style>
    .dropdown:hover> .dropdown-menu {
        display: block;

    }

    ul li .dropdown-item:hover{
        background-color:  rgba(0,0,0,0.5);
        left:-2%;

    }
    ul li {
        list-style:none;
        padding:2px 3px;


    }


    ul li .nav-link:hover{
        font-weight:bold;

    }
    </style>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#0c5460;">
    <a class="navbar-brand" href="#"><img src="{{url('images/Logo.png')}}" style="width:50px;"></a>
    <a class="navbar-brand" href="#" style="display:inline-block;"><b>Agritech</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}"><i class="fas fa-home "></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('shop')}}"><i class="fas fa-shopping-bag "></i> Buy Now</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-th-list "></i> Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(0,0,0,0.5);">
                    <?php $cats=DB::table('categories')->get(); ?>
                    @foreach($cats as $cat)
                        <a class="dropdown-item" style="color: white;" href="{{url('category',$cat->id)}}">{{ucwords($cat->name)}}</a>
                    @endforeach

                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{url('/register')}}" style="color: white;" tabindex="-1" aria-disabled="true"><i class="fas fa-user-plus "></i> Sign Up</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('WishList')}}"><i class="fas fa-heart "></i> Favourites
                    <span style="color: green; font-weight: bold;">({{App\Wishlist_model::count()}})</span></a>
            </li>


           <?php if(Auth::check()){ ?>
           <li class="nav-item dropdown" >
               <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-check "></i> Profile</a>
               <div class="dropdown-menu" aria-labelledby="dropdown01" style="background-color: rgba(0,0,0,0.5);">
               <a class="dropdown-item" href="#" style="color: white;">{{Auth::user()->name}}</a>


                   <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white;">
                       <i class="fas fa-sign-out-alt "></i> {{ __('Logout') }}
                   </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>
               <a class="dropdown-item" style="color: white;" href="{{url('/')}}/profile"><i class="fas fa-user "></i> Profile</a>
               </div>
           </li>

            <?php }else{ ?>
                 <li class="nav-item active"><a class="nav-link"  href="{{url('/login')}}"><i class="fas fa-sign-in-alt "></i> Login</a></li>
            <?php }?>
            <li class="nav-item active" style="list-style-type: none;">
                <a href="{{url('/cart')}}" class="nav-link">&nbsp;<i class="fas fa-shopping-cart "></i> Cart&nbsp;({{Cart::count()}} items)&nbsp;(RS.{{Cart::total()}} )</a>
            </li>

            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0">

        </form>
    </div>
</nav>