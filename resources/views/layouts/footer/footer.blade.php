
    <footer class="footer footer-black  footer-white ">
        <div class="container">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                  @foreach ($pages as $page)
                    <li>
                        <a href="{{ route('website.pages',['id'=>$page->id,'name'=> trim(str_replace(' ','_',$page->name))]) }}" target="_blank">{{ $page->name }}</a>
                    </li>
                  @endforeach

              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, Made By <i class="fa fa-heart heart"></i> <a href="https://www.facebook.com/profile.php?id=100011445331879" target="_blank">Mahmoud Nasr</a>
              </span>
            </div>
          </div>
        </div>
      </footer>
