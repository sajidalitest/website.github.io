<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
    <!---custm css start-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--custm css end-->
    <!--bootstrap start-->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--bootstrap end-->
    <!---font awesome start-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!---font awesome end-->
</head>
<body>
  <!--navbar strat-->
  <header>
  <nav class="navbar navbar-expand-lg  bg-primary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand fs-2 p-lg-3" href="#">SAJID ALI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-lg-auto fs-5">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        
         
        </ul>
        
      </div>
    </div>
  </nav>
  </header>
  <!--navbar end-->
  <!--carousel start-->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="image/image_1.png" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="image/image_2.jpg"  alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/image_3.jpg"  alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--carousel end-->
  <!--about start-->
    <section class="my-5" id="about">
      <div class="py-5">
        <h2 class="text-center">About </h2>
      </div>
      <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="image/my2.jpeg "  id="myphoto">
        </div>
        <div class="col-lg-6 col-md-6 col-12 py-5">
          <h2> I Am Sajid Ali</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae dolore accusamus provident corporis harum, aliquid quae doloremque, vel debitis suscipit perspiciatis nemo architecto cupiditate et veniam assumenda sapiente commodi tempore voluptatibus nisi odit. Ad a cupiditate in aut tempore culpa asperiores, perspiciatis architecto reprehenderit, nobis, placeat sapiente nulla distinctio? Sunt Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos veritatis ad libero perspiciatis voluptates officiis vero provident quod itaque. Laborum maiores sint neque quisquam dolorem architecto sunt odio sapiente iusto..
            sapiente commodi tempore voluptatibus nisi odit. Ad a cupiditate in aut tempore culpa asperiores, perspiciatis architecto reprehenderit, nobis, placeat sapiente nulla distinctio? Sunt Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos veritatis ad libero perspiciatis voluptates officiis vero provident quod itaque. Laborum maiores sint neque quisquam dolorem architecto sunt odio sapiente iusto.
          </p>
          <a href="cv.php" class="btn btn-primary ">Download CV</a>
        </div>
      </div>
      </div>

    </section>

  <!--about end-->
  <!--Gallery strat-->
    <section class="my-5 bg-primary" id="Gallery">
      <div class="py-5">
        <h2 class="text-center">Gallery</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 py-3">
            <img src="image/g1.jpg"class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-4 col-12 py-3">
            <img src="image/gallery4.jpg"class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-4 col-12 py-3">
            <img src="image/g2.jpg"class="img-fluid">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 py-3">
            <img src="image/g3.jpg"class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-4 col-12 py-3">
            <img src="image/galler3.jpg"class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-4 col-12 py-3">
            <img src="image/g4.jpg"class="img-fluid">
          </div>

        </div>
      </div>
    </section>
  <!--Gallery end-->
  <!--servicec start-->
  <section class="my-5 " id="services">
    <div class="py-5">
      <h2 class="text-center">Services </h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card" >
            <img src="image/php.png" class="img-fluid">
            <div class="card-body">
              <h5 class="card-title">PHP DEVELOPER</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 py-3"><div class="card" >
          <img src="image/servicese_1.jpg" class="img-fluid">
          <div class="card-body">
            <h5 class="card-title">WEB DEVELOLPER</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div></div>
        <div class="col-lg-4 col-md-4 col-12 py-3"><div class="card" >
          <img src="image/full-123.png" class="img-fluid">
          <div class="card-body">
            <h5 class="card-title">FULL STACK DEVELOPER</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div></div>
      </div>
    </div>

  </section>
  <!--services end-->
  <!--contact start-->
  <section >
    <section class="my-5 " id="contact">
      <div class="py-5">
        <h2 class="text-center">Contact</h2>
      </div>
      <div class="w-50 m-auto">
        <form action="youserinfo.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" autocapitalize="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Email Id</label>
            <input type="text" name="email" autocapitalize="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" autocapitalize="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Comment</label>
            <textarea class="form-control" name="comment">

            </textarea>

          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
          

        </form>
      </div>

  </section>
  <!--contact end-->
  <!---footer start-->
  <footer class=" bg-primary text-white pt-5 pb-4">
    <div class="container text-center text-md-start">
      <div class="row text-center text-md-start">
        <div class="col-lg-3 col-md-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Company Name</h5>
          <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime earum officia explicabo nostrum inventore fugit. Maxime dolorem, laboriosam, expedita neque ullam sequi accusamus laborum non odio magni alias accusantium dolorum odit? Inventore corrupti dolorum asperiores ab animi ut enim quam, dolor aliquam ducimus, quidem autem quibusdam quas, repellat consequatur. Ullam?</p>

        </div>
        <div class="col-lg-2 col-md-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-dark ">Product</h5>
          <p> <a href="#" class="text-white " style="text-decoration:none;"> TheProvider</a></p>
          <p> <a href="#" class="text-white " style="text-decoration:none;"> TheProvider</a></p>
          <p> <a href="#" class="text-white " style="text-decoration:none;"> TheProvider</a></p>
          <p> <a href="#" class="text-white " style="text-decoration:none;"> TheProvider</a></p>
        </div>
        <div class="col-lg-3 col-md-3 col-xl-3 mx-auto mt-3">
           <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Userfull links</h5>
           <p> <a href="#" class="text-white " style="text-decoration:none;"> hjjjjbbjbjbj</a></p>
          <p> <a href="#" class="text-white " style="text-decoration:none;"> TheProvider</a></p>
          <p> <a href="#" class="text-white " style="text-decoration:none;"> TheProvider</a></p>
          <p> <a href="#" class="text-white " style="text-decoration:none;"> TheProvider</a></p>

        </div>
        <div class="col-lg-4 col-md-4 col-xl-4 mx-auto mt-3  ">
          <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Contact</h5>
          <p class=""><i class="fa-solid fa-house m-2"></i>India chhattisgarh pin 490023 Vivekanand Nagar Kohka Bhilai</p>
          <p ><i class="fa-solid fa-envelope m-2"></i>sa4843761@gmail.com</p>
          <p><i class="fa-solid fa-phone m-2"></i>:918817606782</p>
          <p><a href="https://www.linkedin.com/in/sajid-ali-580299229/"><i class="fa-brands fa-linkedin text-bg-dark fs-3 m-2"></i></a>linkedin</p>
        </div>

      </div>


    </div>

  </footer>
  <!--footer end-->



     <!--js-->
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <!--end js-->
</body>
</html>