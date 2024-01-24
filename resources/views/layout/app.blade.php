<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>












    <nav class="navbar navbar-expand-sm pt-1 rounded bg-dark text-center text-light ">
      <div class="container">
        <div class="webname" >
          <i class="fa-solid fa-graduation-cap me-5 fs-2 "></i>
          <span class=' me-3 fs-2 text-warning'>SafStore</span>
        </div>
           
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
         data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" 
         aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" />
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
  
          
          <ul class="navbar-nav me-auto mt-2 mt-lg-0 ">

            <li>
             @yield('link')
            </li>
          </ul>
        </div>
        </div>
        </nav>
   

















    <div class="container btn-light">
      <div class="card">
        <div class="container">
          <div class="text-center">
            

              @yield('title')
           @yield('content')
            
          </div>
          
          
         
          

    
         
        </div>
      </div>
    </div>
    
    










    <div class=' pt-1 rounded bg-dark text-center '>
      <div class="container">
      <div class="row align-items-center text-white">
        
      <div class="col-4  mt-2 text-light">
          <p>SafStore all rughts are saved @<span className="email fw-semibold text-end "> </span> </p>
        </div>
        <div class="col-4  mt-2 text-muted">
          
        </div>
        <div class="col-4 ">
          <Link><i class="email fa-brands fa-twitter ps-4" />twitter</Link>
          <Link><i class=" email fa-brands fa-linkedin ps-4" />linkedin</Link>
          
        </div>
      </div>
    </div>
    
    
        </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>