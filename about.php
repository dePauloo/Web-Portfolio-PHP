<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="img/user.jpg" alt="profile">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.</p>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                    <p class="tab-links" onclick="opentab('graphic')">Graphic</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>CAD</span><br>Designing 2D and 3D Model</li>
                        <li><span>CAM</span><br>Automate and Control Machine Using Software</li>
                        <li><span>Electrical</span><br>Electrical Maintenance</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2022</span><br>Internship at Production Unit Mikael Vocational High School</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2026</span><br>Diplom Engineering from ATMI Polytechnic</li>
                        <li><span>2023</span><br>Vocational High School</li>
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
