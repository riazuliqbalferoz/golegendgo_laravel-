<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Check Balace</title>

    <!-- font -->
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/fonts/all.min.css" />

    <!-- boostrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <!-- css -->
    <link rel="stylesheet" href="/assets/css/checkBalance.css" />
  </head>
  <body>
    <div class="container">
       <div class="mt-2 mx-lg-5 px-lg-5">
      <div class="page-header d-flex align-items-center py-3">
        <i class="fas fa-arrow-left mr-4"></i>
        <i class="fas fa-calculator mr-2 align-self-center"></i>
        <span>Check Balance</span>
      </div>
      <div class="balance-info shadow mt-4">
        <h4 class="text-center py-3">My Account</h4>
        <div class="balance-colups pb-4 pr-3">
          <div class="row">
            <div class="col-6 pr-0">
              <div
                class="nav flex-column nav-pills active-col ml-3"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <a
                  class="nav-link active py-3 pl-lg-5"
                  id="v-pills-current-tab"
                  data-toggle="pill"
                  href="#v-pills-current"
                  role="tab"
                  aria-controls="v-pills-current"
                  aria-selected="true"
                >
                  <i class="fas fa-coins p-2 mr-2"></i>
                  Current Bal.
                </a>
                <a
                  class="nav-link py-3 pl-lg-5"
                  id="v-pills-product-tab"
                  data-toggle="pill"
                  href="#v-pills-product"
                  role="tab"
                  aria-controls="v-pills-product"
                  aria-selected="false"
                  >
                  <i class="fas fa-hand-holding-usd p-2 mr-2"></i>
                  Product Bal.
                  </a
                >
                <a
                  class="nav-link py-3 pl-lg-5"
                  id="v-pills-vouchers-tab"
                  data-toggle="pill"
                  href="#v-pills-vouchers"
                  role="tab"
                  aria-controls="v-pills-vouchers"
                  aria-selected="false"
                  >
                  <i class="fas fa-vr-cardboard p-2 mr-2"></i>
                  Vouvhers Bal.
                  </a
                >
                <a
                  class="nav-link py-3 last-link pl-lg-5 gift"
                  id="v-pills-gift-tab"
                  data-toggle="pill"
                  href="#v-pills-gift"
                  role="tab"
                  aria-controls="v-pills-gift"
                  aria-selected="false"
                  >
                   <i class="fas fa-credit-card p-2 mr-2"></i>
                   Gift Card
                  </a
                >
              </div>
            </div>

            <!-- right info -->
            <div class="col-6 text-center">
              <div class="tab-content" id="v-pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="v-pills-current"
                  role="tabpanel"
                  aria-labelledby="v-pills-current-tab"
                >
                  <ul class="list-group text-secondary">
                    <li class="list-group-item py-3">0.000</li>
                    <li class="list-group-item">0.000</li>
                    <li class="list-group-item">0.000</li>
                    <li class="list-group-item border-0">0.000</li>
                  </ul>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-product"
                  role="tabpanel"
                  aria-labelledby="v-pills-product-tab"
                >
                  2
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-vouchers"
                  role="tabpanel"
                  aria-labelledby="v-pills-vouchers-tab"
                >
                  3
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-gift"
                  role="tabpanel"
                  aria-labelledby="v-pills-gift-tab"
                >
                  4
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
   

    <!-- boosstrap js -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
