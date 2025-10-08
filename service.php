<div id="services">
  <div class="container">
    <h1 class="sub-title">My Services</h1>
    <div class="services-list">
      <div>
        <i class="fa-solid fa-compass-drafting"></i>
        <h2>CAD Project</h2>
        <?php include("koneksi.php");
          $id = 1; 
          $sql = "SELECT * FROM servicee WHERE id = $id";
          $result = $conn->query($sql);
                            
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<p><span>'.$row["layanan"].'</p>';
            }
          } 

          $conn->close();
        ?>
      </div>
      <div>
        <i class="fa-solid fa-desktop"></i>
        <h2>CAM Project</h2>
        <?php include("koneksi.php");
          $id = 2; 
          $sql = "SELECT * FROM servicee WHERE id = $id";
          $result = $conn->query($sql);
                            
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<p><span>'.$row["layanan"].'</p>';
            }
          } 

          $conn->close();
        ?>
      </div>
      <div>
        <i class="fa-solid fa-bolt"></i>
        <h2>Electrical Project</h2>
        <?php include("koneksi.php");
          $id = 3; 
          $sql = "SELECT * FROM servicee WHERE id = $id";
          $result = $conn->query($sql);
                            
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<p><span>'.$row["layanan"].'</p>';
            }
          } 
          $conn->close();
        ?>
      </div>
    </div>
  </div>
</div>
