<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Registration</title>
</head>
<body>
  <form action="" method="POST" class="mx-auto w-25 mt-5">
    <h1 class="display-6 text-center">REGISTRATION</h1>

    <div class="mb-3">
      <label for="name" class="form-label">Student's Name</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>
    
    <div class="mb-3">
      <label for="year" class="form-label">Year Level</label>
      <select name="year" id="year" class="form-select">
          <option value="" hidden>Choose your year level</option>
          <option value="1">Year 1</option>
          <option value="2">Year 2</option>
          <option value="3">Year 3</option>
          <option value="4">Year 4</option>
      </select>
    </div>
    
    <div class="mb-3">
      <label for="unit" class="form-label">Total Units</label>
      
      <input class="form-control" type="number" name="unit" id="unit" placeholder="Maximum of 23" max="23" min="1">
    </div>
    
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="laboratory" id="lab" value="lab">
      <label class="form-check-label"  for="lab">With lab</label>
    </div>  

    <div class="form-check form-check-inline mb-3">
      <input class="form-check-input"
      type="radio" name="laboratory" id="lab2" value="no_lab">
      <label class="form-check-label" for="lab2">Without lab</label>
    </div>
    
    
    <button type="submit" class="btn btn-secondary w-100" name="btn_submit">Submit</button>
  </form>
</body>
</html>

<?php
include "school.php";

if(isset($_POST['btn_submit'])){
  $name = $_POST['name'];
  $level = $_POST['year'];
  $unit = $_POST['unit'];
  $lab = $_POST['laboratory']; // lab or no_lab value
  $school = new School;
  $school -> setValue($level,$unit,$lab);
  $total_price = number_format($school->computeTotalPrice(),2);
  echo"<p>Student's Name: $name</p>";
  echo"<p>Year Level: $level</p>";
  echo"<p>Total Units: $unit</p>";
  echo"<p>Total Price: $total_price</p>";
}

?>