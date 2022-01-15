<header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            My Flatshoes
          </span>
        </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('flatshoes') }}">Flat Shoes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('login') }}">LOGIN</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>