
<div class="container flexColumnCenter">
    <div class="headerLogo">
        <img src="{{asset("img\logo.png")}}" alt="La Molisana Logo">
    </div>
    <div class="headerNavbar">
        <ul class="inlineList flexRowSpaceAround">
            <li class="{{ (Request::route()->getName() == "Homepage") ? "active" : ""}}">
                <a href="{{route("Homepage")}}">Home</a>
            </li>
            <li class="{{ (Request::route()->getName() == "Prodotti-Pasta") ? "active" : ""}}">
                <a href="{{route("Prodotti-Pasta")}}">Prodotti</a>
            </li>
            <li class="{{ (Request::route()->getName() == "News") ? "active" : ""}}">
                <a href="{{route("News")}}">News</a>
            </li>
        </ul>
    </div>
</div>
