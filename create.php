<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Sicksheet</title>
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
 <style>
  .container{
    background-color: greenyellow;
    color: purple;
  }
 </style>
</head>
<body>
 <section>
 <h1 style="text-align: center;margin: 50px 0;">PATIENTS INFORMATION</h1>
 <div class="container">
  <header class="d-flex justify-content-between my-4">
    <h2>Add New Patient</h2>
    <div>
      <a href="index.php" class="btn btn-primary">View</a>
    </div>

  </header>
 <form action="processing.php" method="post">
 <div class="row">

  <div class="form-element my-4">
 <label for="">Patient Name</label>
 <input type="text" name="patient"  class="form-control" placeholder="Enter two Names" required>
 </div>

 <div class="form-element my-4">
 <label for="">Date of Birth</label>
 <input type="date" name="birthday" id="date" class="form--control" required>
 </div>

<div class="form-element my-4">
<label for="">Sex</label>
<input type="radio" name="sex" value="male">Male
<input type="radio" name="sex" value="female">Female
</div>

<div class="form-element my-4">
 <label for="">Next of Kin</label>
 <input type="text" name="kin"  class="form-control" placeholder="Enter two Names" required>
 </div>


 <div class="form-element my-4">
 <label for="">Phone Number</label>
 <input type="tel" name="phonenumber" id="phonenumber" class="form-control" placeholder="Include countrycode" required>
  </div>

  <div class="form-element my-4">
 <label for="">Date of Admission</label>
 <input type="date" name="admission" id="date" class="form--control" required>
 </div>

 <div class="form-element my-4">
 <label for="">Date of Permission</label>
 <input type="date" name="permission" id="date" class="form--control" required>
 </div>


 <div class="form-element my-4">
 <label for="">Disease Name</label>
 <input type="text" name="disease"  class="form-control"  required>
 </div>

 <div class="form-element my-4">
 <label for="">Medicine</label>
 <input type="text" name="medicine"  class="form-control"  required>
 </div>

 <div class="form-element my-4">
 <label for="">Doctor Name</label>
 <input type="text" name="doctor"  class="form-control" placeholder="Enter two Names" required>
 </div>
 
 <div class="form-element my-4">
 <input type="submit" name="create" id="create" class="btn btn-primary">
  </div>

</div>
 </form>
 </div>
 </section>
</body>
</html>