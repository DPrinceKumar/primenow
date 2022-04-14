<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prime Now || Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel=" stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
<div class="header">
    {{-- title   --}}
    <div class="name">
        <h1 class="glow">Prime Now</h1>
    </div>
     <div class="logout">
        <a href="/logout">
            <button type="submit" class="btn">Logout</button>
        </a>
    </div>
    {{-- navbar --}}
    <div class="nav">
        <ul>
            <li><a href="/topheadline">Home</a></li>
            <li><a href="/q/general">General</a></li>
            <li><a href="/q/crypto">Crypto</a></li>
            <li><a href="/q/stock">Stock</a></li>
            <li><a href="/q/business">Business</a></li>
            <li><a href="/q/tech">Tech</a></li>
            <li><a href="/q/scince">Science</a></li>
            <li><a href="/q/health">Health</a></li>
            <li><a href="/q/entertainment">Entertainment</a></li>
            <li><a href="/q/sports">Sports</a></li>
            <li><a href="/q/politics">Politics</a></li>
            <li><a href="/q/lifeStyle">LifeStyle</a></li>
        </ul>
    </div>
</div>

<div class="link">
    <form action="/search" method="GET">

        <div class="searchbar">
            <label for="seachBar">Search </label>
            <input type="text" name="searchInput" class="inputbar">
            <button type="submit" class="btn search-btn ">Search</button>

        </div>
    </form>

    <form action="/customSearch" method="GET">

        <div class="custmSearch">
            <div class="category">
                <label for="cars">Category</label>
                <input type="text" name="Category" class="inputbar mt-1">
                {{-- <select name="Category" >
            <option value="">Select Category</option>
            <option value="business">business</option>
            <option value="entertainment">entertainment</option>
            <option value="general">general</option>
            <option value="health">health</option>
            <option value="science">science</option>
            <option value="sports">sports</option>
            <option value="technology">technology</option>
            </select> --}}
            </div>

            <div class="country">
                <label for="country">Country Name</label>
                <input type="text" name="countryName" class="inputbar mt-1">
                    {{-- <select name="Country" id="country" >
                    <option value="">Select Country</option>
                    <option value="ae">United Arab Emirates	</option>
                    <option value="ar">Argentina</option>
                    <option value="at">Austria</option>
                    <option value="au">Australia</option>
                    <option value="in">India</option>
                    <option value="us">USA</option>
                    <option value="ua">Ukraine</option>
                    </select> --}}
            </div>
            <div class="customsearch-btn">
                <button type="submit" class="btn">Search</button>
            </div>
        </div>
    </form>
</div>


{{-- Demo for styling  --}}
{{-- <div class="news">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="https://images.prismic.io/mystique/5d7c09b9-40e5-4254-ae1c-2c1cb59aa898_IMG3.jpg?auto=compress,format" alt="" eight="200px" width="200px">
            </div>
            <div class="card-body">
                <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores recusandae quae cum autem deserunt quis molestiae earum rerum harum necessitatibus</h1>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit.  <a href="www.google.com" >Read More...</a>&gt;</p>
                <div class="user">
                    <div class="user-info">
                        <h4>Lorem ipsum</h4>
                        <p>Date:</p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<div class="news">
    <div class="container">
        @foreach ($collectionOfNews as $articles)
        <div class="card">
            <div class="card-header">
                <img src={{$articles['urlToImage']}} alt={{$articles['title']}} height="200px" width="200px">
            </div>

            <div class="card-body">
                <h1>{{$articles['title']}}</h1>
                <p>{{$articles['description']}} <a href={{$articles['url']}}>Read More..</a> </p>

                <div class="user">
                    <div class="user-info">
                        <h4>Author: {{$articles['author']}} </h4>
                        <p>Date: {{$articles['publishedAt']}}</p><br>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



<footer class="footer-distributed">

    <div class="footer-left">
        <h3>Prime <span>Now</span></h3>
        <p class="footer-links">
            <a href="#" class="link-1">Home</a>
            <a href="/business">Business</a>
            <a href="/science">Science</a>
            <a href="/politics">Politics</a>
            <a href="prince2kumar4147@gmail.com">Contact</a>
        </p>
        <p class="footer-company-name">PRIME NOW © 2022</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa-solid fa-map-location-dot"></i>
            <p><span>Law gate </span> Lovely Professional University, Punjab 144401</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>+91- 1234567890</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:prince2kumar4147@gmail.com">prince2kumar4147@gmail.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
                The prime news, started in 2022 and from then on has been steadily
                growing.The prime news's independent editorial stand and its reliable and balanced presentation of the
                news, won for it the serious attention and regard of the people who matter in India andall over world
        </p>

        <div class="footer-icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-github"></i></a>
        </div>
    </div>

</footer>

</body>

</html>