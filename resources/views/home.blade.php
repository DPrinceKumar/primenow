<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prime Now || Home </title>
   <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>
<body>
{{-- 
    {
            "source": {
                "id": null,
                "name": "Lifehacker.com"
            },
            "author": "Jeff Somers",
            "title": "Everything You Need to Know About Stock Splits (and Reverse Stock Splits)",
            "description": "In the nearly 30 years since Amazon launched as a humble online bookstore, it has moved into just about every aspect of our lives. It’s now a retailer, a grocery store, a media streamer, a movie production company, a cloud computing company, a major employer,…",
            "url": "https://lifehacker.com/everything-you-need-to-know-about-stock-splits-and-rev-1848661571",
            "urlToImage": "https://i.kinja-img.com/gawker-media/image/upload/c_fill,f_auto,fl_progressive,g_center,h_675,pg_1,q_80,w_1200/17db8919b8249baa2eed54071d5f01db.jpg",
            "publishedAt": "2022-03-16T19:30:00Z",
            "content": "In the nearly 30 years since Amazon launched as a humble online bookstore, it has moved into just about every aspect of our lives. Its now a retailer, a grocery store, a media streamer, a movie produ… [+4451 chars]"
    }, --}}


<div class="header">
    <div class="name">
        <h1 class="glow">Prime Now</h1>
        <span id="date"></span>
    </div>
   <div class="nav">
    <ul>
        <li><a href="/news">Home</a></li>
        <li><a href="/general">General</a></li>
        <li><a href="/crypto">Crypto</a></li>
        <li><a href="/stock">Stock</a></li>
        <li><a href="/business">Business</a></li>
        <li><a href="/tech">Tech</a></li>
        <li><a href="/scince">Scince</a></li>
        <li><a href="/health">Health</a></li>
        <li><a href="/entertainment">Entertainment</a></li>
        <li><a href="/sports">Sports</a></li>
        <li><a href="/politics">Politics</a></li>
        <li><a href="/lifeStyle">LifeStyle</a></li>
    </ul>
   </div>
    
</div>




<div class="link">
    {{-- <x-news-card/> --}}
    <form action="/search" method="GET">

        <div class="searchbar">
            <label for="seachBar">Search </label>
            <input type="text" name="searchInput" class="inputbar">
            <button type="submit" class="search-btn ">Search</button>

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
            <button type="submit" class="search-btn custmSearch-btn ">Search</button>
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






<script src="{{ url('js/script.js') }}"></script>
</body>
</html>