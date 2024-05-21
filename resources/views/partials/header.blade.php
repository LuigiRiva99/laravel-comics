<!-- <header>
  <div class="container">
    <div class="text-center" >
      <ul class="list-unstyled d-flex gap-3 justify-content-center">
        <li>
          <a href="{{ route('home') }}">Home</a>
        </li>
        <li>
          <a href="{{ route('comics') }}">Comics</a>
        </li>
        <li>
          <a href="">About</a>
        </li>
        <li>
          <a href="">Contact</a>
        </li>
        <li>
          <a href="">Lavora con noi</a>
        </li>
      </ul>
    </div>
  </div>
</header> -->

<header>
    <div class="header_container">
        <div class="header_nav d-flex align-center justify-content-center">
            <ul class="link_list d-flex gap-3 mb-0 list-unstyled ">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('comics') }}">Comics</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<style>
p{
    margin-bottom: 0;
}    

header{
    background-color: #265078;
    color: white;
}

a{
    color: white
}

.header_nav{
    height: 100px;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}
</style>