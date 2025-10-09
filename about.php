<div id="about">
  <div class="container">
    <div class="row">
      <div class="about-col-1">
        <img src="img/user.jpg" alt="profile">
      </div>
      <div class="about-col-2">
        <h1 class="sub-title">About Me</h1>
        <?php include("koneksi.php");
        $sql = "SELECT tentang FROM aboutme";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {

            echo '<p><span>' . $row["tentang"] . '</p>';
          }
        }

        $conn->close();
        ?>

        <div class="tab-titles">
          <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
          <p class="tab-links" onclick="opentab('experience')">Experience</p>
          <p class="tab-links" onclick="opentab('education')">Education</p>
          <p class="tab-links" onclick="opentab('graphic')">Graphic</p>
        </div>
        <div class="tab-contents active-tab" id="skills">
          <ul>
            <?php include("koneksi.php");
            $sql = "SELECT skill, keterangan FROM skills";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {

                echo '<li><span>' . $row["skill"] . '</span><br>' . $row["keterangan"] . '</li>';
              }
            }

            $conn->close();
            ?>
          </ul>
        </div>
        <div class="tab-contents" id="experience">
          <ul>
            <?php include("koneksi.php");
            $sql = "SELECT tahun, pengalaman FROM experience";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {

                echo '<li><span>' . $row["tahun"] . '</span><br>' . $row["pengalaman"] . '</li>';
              }
            }

            $conn->close();
            ?>
          </ul>
        </div>
        <div class="tab-contents" id="education">
          <ul>
            <?php include("koneksi.php");
            $sql = "SELECT tahunn, institusi FROM education";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {

                echo '<li><span>' . $row["tahunn"] . '</span><br>' . $row["institusi"] . '</li>';
              }
            }

            $conn->close();
            ?>
          </ul>
        </div>
        <div class="tab-contents" id="graphic">
          <ul>
            <li><span>Skill Chart</span><br>Visual Representation of Technical Abilities</li>
          </ul>
          <div class="chart-container">
            <canvas id="skillRadarChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>