<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" id="menu1" href="" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-earth menu-icon"></i>
                <span class="menu-title">International</span>
                <i class="menu-arrow"></i>
            </a> 
            <div id="content1">
              <a href="addcountry.php" class="ml-5" style="text-decoration:none;color:#555555">Add Country</a><br>
              <a href="managecountry.php" class="ml-5" style="text-decoration:none;color:#555555">Manage Country</a><br>
              <a href="addoptionaltour.php" class="ml-5" style="text-decoration:none;color:#555555">Add Optional Tour</a><br>
              <a href="manageoptionaltour.php" class="ml-5" style="text-decoration:none;color:#555555">Manage Optional Tour</a>
              <a href="addpackage.php" class="ml-5" style="text-decoration:none;color:#555555">Add Package</a><br>
              <a href="packagestats.php" class="ml-5" style="text-decoration:none;color:#555555">Manage Package</a>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" id="menu5" href="" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-map-marker-radius menu-icon"></i>
                <span class="menu-title">Domestic</span>
                <i class="menu-arrow"></i>
            </a> 
            <div id="content5">
              <a href="addstate.php" class="ml-5" style="text-decoration:none;color:#555555">Add Destination</a><br>
              <a href="managestates.php" class="ml-5" style="text-decoration:none;color:#555555">Manage Destination</a><br>
              <a href="addstateoptionaltour.php" class="ml-5" style="text-decoration:none;color:#555555">Add Optional Tour</a><br>
              <a href="managestateoptionaltour.php" class="ml-5" style="text-decoration:none;color:#555555">Manage Optional Tour</a>
              <a href="addstatepackage.php" class="ml-5" style="text-decoration:none;color:#555555">Add Package</a><br>
              <a href="managestatepackage.php" class="ml-5" style="text-decoration:none;color:#555555">Manage Package</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" id="menu3" href="" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Visa</span>
                <i class="menu-arrow"></i>
            </a> 
            <div id="content3">
              <a href="addvisa.php" class="ml-5" style="text-decoration:none;color:#555555">Add Visa Country</a><br>
              <a href="managevisa.php" class="ml-5" style="text-decoration:none;color:#555555">Manage Visa</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" id="menu4" href="" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-account-edit menu-icon"></i>
                <span class="menu-title">Testimonial</span>
                <i class="menu-arrow"></i>
            </a> 
            <div id="content4">
              <a href="addtestimonials.php" class="ml-5" style="text-decoration:none;color:#555555">Add Testimonial</a><br>
              <a href="managetestimonials.php" class="ml-5" style="text-decoration:none;color:#555555">Manage Testimonials</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="editabout.php">
                <i class="mdi mdi-pencil menu-icon"></i>
                <span class="menu-title">Edit About Us</span>
            </a> 
          </li>


        </ul>
      </nav>
    <script>
      $(document).ready(function(){
        $("#content1").hide();
        $("#content2").hide();
        $("#content3").hide();
        $("#content4").hide();
        $("#content5").hide();
        $("#menu1").click(function(){
          $("#content1").slideToggle();
        });
        $("#menu2").click(function(){
          $("#content2").slideToggle();
        });
        $("#menu3").click(function(){
          $("#content3").slideToggle();
        });
        $("#menu4").click(function(){
          $("#content4").slideToggle();
        });
        $("#menu5").click(function(){
          $("#content5").slideToggle();
        });
      });
    </script>