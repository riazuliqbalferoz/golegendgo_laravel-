<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account Summary</title>

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
    <link rel="stylesheet" href="/assets/css/myIdInfo.css" />
  </head>
  <body>
    <div class="order-summary container">
      <!-- top header -->
      <div class="row top-header py-3 align-items-center mx-lg-5">
        <div class="col-6 d-flex align-items-center">
          <i class="fas fa-arrow-left mr-4"></i>
          <i class="far fa-address-card mr-2"></i>
          <span class="info-header">My ID Info</span>
        </div>
        <div class="col-6 text-right align-items-center">
          <i class="far fa-user mr-2 p-2 rounded-circle"></i>
          <span>GBL 000 01</span>
        </div>
      </div>

      <!-- account summary -->
      <div class="row shadow mt-4 mx-lg-5">
        <div class="col pr-0 left pl-0">
          <h5 class="text-center py-2 summary shadow mb-0">Account Summary</h5>
          <ul class="list-group p-0">
            <li class="list-group-item active pl-2 pl-md-4">
              <i class="fas fa-fingerprint mr-2"></i>ID Status
            </li>
            <li class="list-group-item pl-2 pl-md-4">
              <i class="fas fa-fingerprint mr-2"></i>Current Balances
            </li>
            <li class="list-group-item pl-2 pl-md-4">
              <i class="fas fa-fingerprint mr-2"></i>Product Balance
            </li>
            <li class="list-group-item pl-2 pl-md-4">
              <i class="fas fa-fingerprint mr-2"></i>Net Genetation Income
            </li>
            <li class="list-group-item pl-2 pl-md-4">
              <i class="fas fa-fingerprint mr-2"></i>Net Reffecrence Income
            </li>
            <li class="list-group-item pl-2 pl-md-4">
              <i class="fas fa-fingerprint mr-2"></i>Self Purchase Report
            </li>
            <li class="list-group-item pl-2 pl-md-4">
              <i class="fas fa-fingerprint mr-2"></i>Vouchers
            </li>
            <li class="list-group-item pl-2 pl-md-4">
              <i class="fas fa-fingerprint mr-2"></i>Gift Card
            </li>
          </ul>
        </div>
        <!-- right list -->
        <div class="col right">
          <h5 class="text-center py-2 balance">Balance</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">0.00</li>
            <li class="list-group-item">0.00</li>
            <li class="list-group-item">0.00</li>
            <li class="list-group-item">0.000</li>
            <li class="list-group-item">0.000000</li>
            <li class="list-group-item">0.000000</li>
            <li class="list-group-item">0.000000</li>
            <li class="list-group-item">0.000000</li>
          </ul>
        </div>
      </div>

      <!-- form info -->
      <div class="row mt-4 shadow mx-lg-5">
        <div class="form-info col-12">
          <!-- gbl -->
          <div class="gbl">
            <div class="gbl-header row py-3 align-items-center px-3 px-lg-4">
              <div class="col">GBL 000 01 Info</div>
              <div class="col text-right">
                <i class="fas fa-pencil-alt"></i> Edit
              </div>
            </div>
            <div class="form-body mt-3 px-3 px-lg-4">
              <form>
                <div class="form-group row">
                  <label for="inputdate" class="col-3 col-form-label pr-0">Joining Date</label>
                  <div class="col-9">
                    <input type="text" class="form-control shadow" id="inputdate">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputName" class="col-3 col-form-label">Full Name</label>
                  <div class="col-9">
                    <input type="text" class="form-control shadow" id="inputName">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail" class="col-3 col-form-label">E mail</label>
                  <div class="col-9">
                    <input type="text" class="form-control shadow" id="inputEmail">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputID" class="col-3 col-form-label">NID No</label>
                  <div class="col-9">
                    <input type="text" class="form-control shadow" id="inputID">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPhone" class="col-3 col-form-label">Phone No</label>
                  <div class="col-9">
                    <input type="text" class="form-control shadow" id="inputPhone">
                  </div>
                </div>
              </form>
            </div>
          </div>

          <!-- guardian Info -->
           <div class="gbl">
            <div class="gbl-header row py-3 align-items-center  px-3 px-lg-4">
              <div class="col">GBL 000 01 Info</div>
              <div class="col text-right">
                <i class="fas fa-pencil-alt"></i> Edit
              </div>
            </div>
            <div class="form-body mt-3  px-3 px-lg-4">
              <form>
                <div class="form-group row">
                  <label for="inputFather" class="col-3 col-form-label pr-0">Father's Name</label>
                  <div class="col-9">
                    <input type="text" class="form-control shadow" id="inputFather">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputMother" class="col-3 col-form-label pr-0">Mother's Name</label>
                  <div class="col-9">
                    <input type="text" class="form-control shadow" id="inputMother">
                  </div>
                </div>
              </form>
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
