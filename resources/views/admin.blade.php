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
    <title>RbxMarket Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="./assets/css/theme.min.css"
    />

  </head>

  <body
    class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset"
  >
    <header
      id="header"
      class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white"
    >
      <div class="navbar-nav-wrap">
        

        <div class="navbar-nav-wrap-content-start">
          <div class="col">
            <h1 class="page-header-title">RbxMarket</h1>
          </div>
        </div>

        <div class="navbar-nav-wrap-content-end">
          <!-- Navbar -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <!-- Account -->
              <div class="dropdown">
                <a
                  class="navbar-dropdown-account-wrapper"
                  href="{{route("api.admin.logout")}}">
                  Выйти
                </a>

                
              </div>
              <!-- End Account -->
            </li>
          </ul>
          <!-- End Navbar -->
        </div>
      </div>
    </header>

    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <div class="row">
          <div class="col-sm-6 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Продано робуксов сегодня</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <h2 class="card-title text-inherit">{{ $spentRobuxToDay }}</h2>
                  </div>
                  <!-- End Col -->
                </div>
              </div>
            </a>
            <!-- End Card -->
          </div>
          <div class="col-sm-6 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Заработано рублей</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <h2 class="card-title text-inherit">{{ $sumRubToDay }}</h2>
                  </div>
                  <!-- End Col -->
                </div>
              </div>
            </a>
            <!-- End Card -->
          </div>
       
        </div>
        <!-- End Stats -->
        <div id="emailSection" class="card mb-4">
          <div class="card-header">
            <h4 class="card-title">Курс</h4>
          </div>

          <!-- Body -->
          <div class="card-body ">
            <form>
              <!-- Form -->
              <div class="row mb-4">
                <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Курс робуксов</label>

                <div class="col-sm-9">
                  <input type="number" class="form-control" name="rate" value="{{$rate->rate}}" id="rate" placeholder="Введите курс">
                  <span class="invalid-feedback"></span>
                </div>
              </div>
              <!-- End Form -->

              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Сохранить</button>
              </div>
            </form>
            <script>
              document.querySelector("form").addEventListener("submit", async (e) => {
                e.preventDefault();
                $.ajax({
                  url: "{{route("api.admin.rate")}}",
                  type: "POST",
                  data: {
                    _token: "{{ csrf_token() }}",
                    rate: document.querySelector("input[name=newEmail]").value,
                  }
                  success: function (data) {
                    if(data.status == "success"){
                      window.location.reload();
                    } else {
                      var spanInvalid =document.querySelector("span.invalid-feedback");
                      spanInvalid.innerHTML = data.message;
                      spanInvalid.style.display = "block";
                    }
                  },
                  error: function (data) {
                    alert("Ошибка изменения курса");
                  },
                
                })
              });
            </script>
            <!-- End Form -->
          </div>
          <!-- End Body -->
        </div>
        <div class="table-responsive datatable-custom position-relative">
          <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
            
            <table
              id="datatable"
              class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer"
              
              role="grid"
            >
              <thead class="thead-light">
                <tr role="row">
                 
                  <th
                    class="table-column-pe-0 sorting"
                    tabindex="0"
                    aria-controls="datatable"
                    rowspan="1"
                    colspan="1"
                    style="width: 241.067px"
                    aria-label="Name: activate to sort column ascending"
                  >
                    Имя
                  </th>
                  <th
                    class="sorting"
                    tabindex="0"
                    aria-controls="datatable"
                    rowspan="1"
                    colspan="1"
                    style="width: 168.85px"
                    aria-label="Position: activate to sort column ascending"
                  >
                    Сумма руб.
                  </th>
                  <th
                    class="sorting"
                    tabindex="0"
                    aria-controls="datatable"
                    rowspan="1"
                    colspan="1"
                    style="width: 147.917px"
                    aria-label="Country: activate to sort column ascending"
                  >
                  Сумма R$.
                  </th>
                  <th
                    class="sorting"
                    tabindex="0"
                    aria-controls="datatable"
                    rowspan="1"
                    colspan="1"
                    style="width: 126.5px"
                    aria-label="Status: activate to sort column ascending"
                  >
                    Статус
                  </th>
                  <th
                    class="sorting"
                    tabindex="0"
                    aria-controls="datatable"
                    rowspan="1"
                    colspan="1"
                    style="width: 169.45px"
                    aria-label="Portfolio: activate to sort column ascending"
                  >
                    Дата
                  </th>
                  <th
                    class="sorting"
                    tabindex="0"
                    aria-controls="datatable"
                    rowspan="1"
                    colspan="1"
                    style="width: 93.867px"
                    aria-label="Role: activate to sort column ascending"
                  >
                    Действия
                  </th>
                  <th
                    class="sorting_disabled"
                    rowspan="1"
                    colspan="1"
                    style="width: 111.817px"
                    aria-label=""
                  ></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($errorTransactions as $transaction )
                
              
                <tr role="row" class="odd">
                  
                  <td class="table-column-pe-0">
                    <a class="d-flex align-items-center">
                      <div class="avatar avatar-circle">
                        <img
                          class="avatar-img"
                          src="{{$transaction->avatar}}"
                          alt="Image Description"
                        />
                      </div>
                      <div class="ms-3">
                        <span class="d-block h5 text-inherit mb-0"
                          >{{$transaction->username}}
                          </span>
                       
                      </div>
                    </a>
                  </td>
                  <td>
                  {{$transaction->sum}} руб.
                  </td>
                  <td>{{$transaction->sumRobux}} R$</td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Ошибка отправки
                  </td>
                  
                  <td>{{$transaction->created_at}}</td>
                  <td>
                    <button
                      type="button"
                      data-id="{{$transaction->id}}"
                      class="btn btn-primary btn-sm"
                    >Отправить еще раз
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <script>
                document.querySelectorAll("button").forEach((button) => {
                  button.addEventListener("click", async (e) => {
                    e.preventDefault();
                    $.ajax({
                      url: "{{route("api.admin.retry")}}",
                      type: "POST",
                      data: {
                        _token: "{{ csrf_token() }}",
                        id: button.getAttribute("data-id"),
                      },
                      success: function (data) {
                        window.location.reload();
                      },
                      error: function (data) {
                        alert("Ошибка отправки");
                      },
                    });
                  });
                });
              </script>
            </table>
            
          </div>
        </div>
      </div>
      
    </main>

  </body>
</html>
