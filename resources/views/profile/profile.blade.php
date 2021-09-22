<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

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
    <link rel="stylesheet" href="/assets/css/profile.css" />
</head>
<body>
    <div class="container mt-2">
        <section class="page-nav py-3">
            <i class="fas fa-arrow-left mr-4"></i>
            <i class="far fa-user mr-2"></i>
            <p> My Profile</p>
        </section>

        <!-- profile image -->
        <section class="profile-img mt-2 mb-4 text-center">
          <i class="fas fa-pen rounded-circle bg-light shadow p-3"></i>
          <img src="../assets/img/profile.png" class="rounded-circle mx-auto d-block" alt="" height="150px" width="150px">
          <h3 class="mt-3">Your Name Here</h3>
        </section>

        <!-- imformation -->
        <section class="info my-5 container shadow">
          <div class="personal">
            <div class="row header py-3 text-white">
              <div class="col"><h6>Personal Information</h6></div>
              <div class="col text-right">
                <i class="fas fa-pen mr-2"></i>
                <h6>Edit</h6>
              </div>
            </div>
            <!-- info list -->
            <div class="information py-3">
              <div class="row my-2">
                <div class="col">Full Name</div>
                <div class="col">Text Here</div>
              </div>
              <div class="row my-2">
                <div class="col">E mail</div>
                <div class="col">Text Here</div>
              </div>
              <div class="row my-2">
                <div class="col">Phone No</div>
                <div class="col">Text Here</div>
              </div><div class="row my-2">
                <div class="col">NID No</div>
                <div class="col">Text Here</div>
              </div>
              <div class="row my-2">
                <div class="col">Date Of Birth</div>
                <div class="col">Text Here</div>
              </div>
              <div class="row my-2">
                <div class="col">Permanent</div>
                <div class="col">Text Here</div>
              </div>
            </div>
          </div>

          <div class="guardian">
            <div class="row header py-3 text-white">
              <div class="col"><h6>Guardian Information</h6></div>
              <div class="col text-right">
                <i class="fas fa-pen mr-2"></i>
                <h6>Edit</h6>
              </div>
            </div>
            <!-- info list -->
            <div class="information pt-2 pb-3">
              <div class="row my-2">
                <div class="col">Father's Name</div>
                <div class="col">Text Here</div>
              </div>
              <div class="row my-2">
                <div class="col">Mother's</div>
                <div class="col">Text Here</div>
              </div>

            </div>
          </div>

          <div class="adress">
            <div class="row header py-3 text-white">
              <div class="col"><h6>Adress</h6></div>
              <div class="col text-right">
                <i class="fas fa-pen mr-2"></i>
                <h6>Edit</h6>
              </div>
            </div>
            <!-- info list -->
            <div class="information py-3">
              <div class="row my-2">
                <div class="col">Present Adress</div>
                <div class="col">Text Here</div>
              </div>
              <div class="row my-2">
                <div class="col">Permanent Adress</div>
                <div class="col">Text Here</div>
              </div>
            </div>
          </div>

          <div class="naminee">
            <div class="row header py-3 text-white">
              <div class="col"><h6>Nominee</h6></div>
              <div class="col text-right">
                <i class="fas fa-pen mr-2"></i>
                <h6>Edit</h6>
              </div>
            </div>
            <!-- info list -->
            <div class="information py-3">
              <div class="row my-2">
                <div class="col">Name</div>
                <div class="col">Text Here</div>
              </div>
              <div class="row my-2">
                <div class="col">Relation</div>
                <div class="col">Text Here</div>
              </div>
              <div class="row my-2">
                <div class="col">Mobil No</div>
                <div class="col">Text Here</div>
              </div>
            </div>
          </div>

          <!-- password -->
          <div class="password">
            <div class="row header py-3 text-white">
              <div class="col"><h6>Password</h6></div>
              <div class="col text-right">
                <i class="fas fa-pen mr-2"></i>
                <h6>Edit</h6>
              </div>
            </div>
          </div>

        </section>
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