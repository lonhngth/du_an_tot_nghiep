  <div class="header">
    <div class="container">
      <div class="">
        <div class="flex gap-3 items-center justify-center">
          <!-- <form action="" method="post">
            @csrf
            <div class="flex">
              <input type="text" name="keyword_submit" class="border border-[#dddd] px-3 py-2" placeholder="Tìm kiếm ..." value="{{old('key_words')}}">
              <button type="submit" class="pl-5">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </form> -->
          <div class="flex gap-3 items-center">
            @auth
            <a class="text-black-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
              <span class="font-bold uppercase">
                {{auth()->user()->name}}
              </span>
            </a>
            <form class="inline" method="POST" action="{{route('user.logout')}}">
              @csrf
              @method('get')
              <button type="submit">
                <a href="{{route('user.logout')}}" class="text-black-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                  <i class="fa-solid fa-door-closed"></i>
                </a>
              </button>
            </form>
            @if (auth()->user()->role == 1)
            <a href="{{route('admin.index')}}" class="text-black-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
              <i class="fa-solid fa-house"></i>
            </a>
            @endif

            @else
            <a href="{{route('user.register')}}" class="text-black-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
              <i class="fa-solid fa-user-plus"></i> Register
            </a>
            <a href="{{route('user.login_form')}}" class="text-black-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
              <i class="fa-solid fa-arrow-right-to-bracket"></i>
              Login</a>
            </a>
            @endauth
          </div>
        </div>
        <ul class="flex items-center gap-3 justify-center mt-4 menu header">
          <li><a href="{{route('client.home')}}">Trang chủ</a></li>
          <li><a href="album.html">Thư viện ảnh</a></li>
          <li><a href="about.html">Về chúng tôi</a></li>
          <li><a href="price.html">Bảng giá</a></li>
          <li><a href="contact.html">Liên hệ</a></li>
        </ul>

       
      </div>
    </div>
  </div>