<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add Department</title>
    <style type="text/css">
    textarea 
    {
      display: block;
      width: 100%;
    }
    </style>
  </head>
  <body>
    <form action="?" method="post">
     <div>
        <label for="dname">Department Name:
          <input type="text" name="dname" id="dname"></label>
      </div>
      
      <div>
        <label for="dnum">Department Number:
          <input type="text" name="dnum" id="dnum"></label>
      </div>
      
      <div>
        <label>Department Manager's SSN</label>
        <select name= "ssn">
          <?php foreach ($ssns as $employeeSSN) : ?>
             <option value = "departmentManager"> </option>
            <?php echo $employeeSSN['ssn']; ?>
         
        </select>
        
        <label for="mgr_ssn">Department Manager's SSN:
        <input type="text" name="mgr_ssn" id="mgr_ssn"></label>
      </div>
    
     
      <div><input type="submit" value="Add"></div>
    </form>
  </body>
</html>
