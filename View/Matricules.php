<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Matricules</title>
</head>
<a href="http://localhost/sebelta/admin/logout"><button type="button" class="btn btn-danger m-3">Logout</button></a>
<body style="padding: 100px; background-color: rgb(40, 15, 51) ;">
    <table class="table align-middle mb-0 bg-dark">
  <thead class="bg-light">
    <tr>
      <th>Matricule</th>
      <th>Date</th>
      <th>Seatbelt</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($matricules as $matricule){; ?>
        <tr>

        <td>
        <div class="d-flex align-items-center">
          
          <div class="ms-3">
            <p class="fw-bold text-white mb-1"><?php echo $matricule['Matricule']; ?> </p>
           
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal text-white mb-1"><?php echo $matricule['ladate']; ?> </p>
     
      </td>
      <td>
        <span class="badge <?php if($matricule['seatbelt'] == "False"){echo 'bg-warning'; }else{echo 'bg-success';}; ?>  rounded-pill d-inline"><?php echo $matricule['seatbelt']; ?> </span>
      </td>
        
       
        </tr>
         <?php };?>
  </tbody>
</table>
</body>
</html>