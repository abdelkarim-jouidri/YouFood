<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="stylesheet" href="/layout.css">
</head>
<body>
<header class="header">
    <div class="logo-toggle">
     
      <div class="logo-img d-flex gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 64 64"><path fill="currentColor" d="M56.411.719S7.623.704 7.637.719C3.14.719.612 3.044.612 7.793v48.966c0 4.443 2.273 6.769 6.766 6.769h49.173c4.493 0 6.769-2.21 6.769-6.769V7.793c.001-4.634-2.275-7.074-6.909-7.074zM30.749 23.374c0 1.536-1.399 3.181-3.215 3.181V52.49c0 3.682-5.018 3.682-5.018 0V26.555c-1.767 0-3.306-1.361-3.306-3.4V8.882c0-1.242 1.795-1.29 1.795.049v10.55h1.503V8.833c0-1.141 1.729-1.214 1.729.049v10.599h1.553V8.848c0-1.193 1.678-1.241 1.678.047v10.586h1.528V8.848c0-1.18 1.753-1.227 1.753.047v14.479zm13.386 29.104c0 3.601-5.028 3.547-5.028 0V36.496H36.43V12.199c0-5.656 7.706-5.656 7.706 0v40.279z"/></svg>
      <h1 class="fs-1 ">YouFood</h1>
      </div>
    </div>

   
    @auth
    <form action="/logout" method="POST" class="inline">
      @csrf
      <div class="logout d-flex gap-4 align-items-center">
        <span class="fw-bold">Welcome {{auth()->user()->name}}</span>
        
        <button type="submit">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="red" d="M400 54.1c63 45 104 118.6 104 201.9c0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4C7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31c-41.5 30.8-68 79.6-68 134.9c-.1 92.3 74.5 168.1 168 168.1c91.6 0 168.6-74.2 168-169.1c-.3-51.8-24.7-101.8-68.1-134c-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z"/></svg>
        </button>
      </div>
    </form>
    @endauth
    @guest
      <a href="/login" class="fw-normal">Login as an admin</a>
    @endguest

  </header>
  <div class="Container">
      <!----------------------------------------------------------------------- side bar ------------------------------------------------------->
   @auth
      <aside class="sidebar" data-sidebar>
      <div class="middle-sidebar">
        <ul class="sidebar-list">
          <li class="sidebar-list-item  " onclick="makeElementActive(this)">
            <a href="/plates" id="home-link" class="sidebar-link  ">
              <svg class="sidebar-icon " viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" ><g ><path d="M4,10V21h6V15h4v6h6V10L12,3Z" ></path></g></svg>
              <div class="hidden-sidebar sidebar-link-text ">Accueil</div>
            </a>
          </li>
          <li class="sidebar-list-item " onclick="makeElementActive(this)">
            <a href="/plates" class="sidebar-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M21 15c0-4.625-3.507-8.441-8-8.941V4h-2v2.059c-4.493.5-8 4.316-8 8.941v2h18v-2zM2 18h20v2H2z"/></svg>
                          <div class="hidden-sidebar sidebar-link-text ">Plats</div>
            </a>
          </li>
          <li class="sidebar-list-item " onclick="makeElementActive(this)">
            <a href="/users/{{auth()->user()->id}}" class="sidebar-link">
              <svg  xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 48 48">
                <g fill="currentColor">
                  <path fill-rule="evenodd" d="M24 42c9.941 0 18-8.059 18-18S33.941 6 24 6S6 14.059 6 24s8.059 18 18 18Zm0 2c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z" clip-rule="evenodd"/>
                  <path d="M12 35.63c0-1.033.772-1.906 1.8-2.02c7.715-.854 12.72-.777 20.418.019a1.99 1.99 0 0 1 1.108 3.472c-9.085 7.919-14.277 7.81-22.686.008c-.41-.38-.64-.92-.64-1.478Z"/>
                  <path fill-rule="evenodd" d="M34.115 34.623c-7.637-.79-12.57-.864-20.206-.019A1.028 1.028 0 0 0 13 35.631c0 .286.119.557.32.745c4.168 3.866 7.326 5.613 10.413 5.624c3.098.011 6.426-1.722 10.936-5.652a.99.99 0 0 0-.554-1.724ZM13.69 32.616c7.796-.863 12.874-.785 20.632.018a2.99 2.99 0 0 1 1.662 5.221c-4.575 3.988-8.385 6.16-12.257 6.145c-3.883-.014-7.525-2.223-11.766-6.158A3.018 3.018 0 0 1 11 35.63a3.028 3.028 0 0 1 2.69-3.015Z" clip-rule="evenodd"/>
                  <path d="M32 20a8 8 0 1 1-16 0a8 8 0 0 1 16 0Z"/>
                  <path fill-rule="evenodd" d="M24 26a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm0 2a8 8 0 1 0 0-16a8 8 0 0 0 0 16Z" clip-rule="evenodd"/>
                </g>
              </svg>
              <div class="hidden-sidebar sidebar-link-text ">Profil</div>
            </a>
          </li>
        
        </ul>
      </div>

    </aside>
  @endauth
      <!----------------------------------------------------------------------- End of side bar ------------------------------------------------->

    <main class="content p-3 gap-3">
       
           
      @yield('content')

    </main>
  </div>
  <footer>
  copyright
  </footer>
</body>
</html>