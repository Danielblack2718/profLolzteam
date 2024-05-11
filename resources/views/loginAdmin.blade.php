<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Title -->
    <title>RbxMarket Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link
      rel="stylesheet"
      href="/assets/css/theme.min.css"
    />
  </head>

  <body>
    <main id="content" role="main" class="main">
      <div
        class="position-fixed top-0 end-0 start-0 bg-img-start"
        style="
          height: 32rem;
          background-image: url(/assets/svg/card-6.svg);
        "
      >
        <!-- Shape -->
        <div class="shape shape-bottom zi-1">
          <svg
            preserveAspectRatio="none"
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            viewBox="0 0 1921 273"
          >
            <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
          </svg>
        </div>
        <!-- End Shape -->
      </div>

      <!-- Content -->
      <div class="container py-5 py-sm-7">
        
        <div class="mx-auto" style="max-width: 30rem">
          <!-- Card -->
          <div class="card card-lg mb-5">
            <div class="card-body">
              <!-- Form -->
              <form action="{{route("api.admin.login")}}" method="POST">
                <div class="text-center">
                  <div class="mb-5">
                    <h1 class="display-5">Войти</h1>
                  </div>
                </div>

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="login"
                    >Логин</label
                  >
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    name="login"
                    id="login"
                    placeholder="Логин"
                    aria-label="Логин"
                    required
                  />
                  <span class="invalid-feedback"
                    ></span
                  >
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label" for="password"
                    >Пароль</label
                  >

                  <div
                    class="input-group input-group-merge"
                    data-hs-validation-validate-class
                  >
                    <input
                      type="password"
                      class="js-toggle-password form-control form-control-lg"
                      name="password"
                      id="password"
                      placeholder="Пароль"
                      aria-label="Пароль"
                      required
                      minlength="5"
                      
                    />
                   
                  </div>

                  <span class="invalid-feedback"
                    ></span
                  >
                </div>
                <!-- End Form -->

                

                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary btn-lg">
                    Войти
                  </button>
                </div>
                @csrf
              </form>
              <script>
                $(document).ready(function(){
                  $("form").submit(function(e){
                    e.preventDefault();
                    $.ajax({
                      url: $(this).attr("action"),
                      type: $(this).attr("method"),
                      data: $(this).serialize(),
                      success: function(data){
                        if(data.status == "success"){
                          window.location.href = "{{route("admin")}}";
                        }else{
                          var spanInvalid =document.querySelectorAll(".invalid-feedback");
                          spanInvalid[1].innerHTML = data.message;
                          spanInvalid[1].style.display = "block";
                        }
                      }
                    });
                  });
                });
              </script>
              <!-- End Form -->
            </div>
          </div>
          <!-- End Card -->

       
        </div>
      </div>
      <!-- End Content -->
    </main>
    
  </body>
</html>
