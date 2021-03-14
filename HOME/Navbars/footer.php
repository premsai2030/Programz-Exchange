<div id="open">
  <nav class="navbar-nav fixed-bottom" style="background-color: black">
  <div class="row" style="padding: 10px;">
    <div class="col-3">
<center>
  <a href="<?php echo $home_url; ?>"  class="navbar-brand" style="color: white;font-size: 15px;">
Home</a>
</center>   </div>
    <div class="col-3">
<center>
<a href="<?php echo $public_url; ?>"  class="navbar-brand" style="color: white;font-size: 15px;">
Public</a>
</center>

    </div>
        <div class="col-3">
<center>
<a  href="<?php echo $private_url; ?>"  class="navbar-brand" style="color: white;font-size: 15px;">
Private</a>
</center>

    </div>
        <div class="col-3">
<center>
<a href="<?php echo $logout ; ?>" class="navbar-brand" style="color: white;font-size: 15px;">Logout
</a>
</center>

    </div>
  </div>
</nav>
</div>
<script type="text/javascript">
        setTimeout(() => {
                document.getElementById("blm").style.display = "none";
                document.getElementById("blm1").style.display = "none";
                document.getElementById("more").style.display = "block";
            }

            , 2000);
        document.getElementById("more").style.display = "none";
    </script>
</body>
 </html>