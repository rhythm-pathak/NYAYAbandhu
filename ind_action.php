<?php include("header.php"); ?>
<table id="structure">
  <tr>
    <td id="navigation">

      <font face=Broadway>Quick Links:</font><br><br>
        <a href="http://supremecourtofindia.nic.in/" target="_blank">Supreme Court of India</a><br><br>
        <a href="http://www.advocatekhoj.com/library/judgments/announcement.php" target="_blank">Recent Cases</a><br><br>
        <a href="http://topyaps.com/top-10-famous-court-cases-in-india" target="_blank">Some famous Indian Cases</a><br><br>
        <a href="http://rti.gov.in/" target="_blank">Right To Information</a><br><br>
        <a href="http://nalsa.gov.in/lsams/nologin/applicationFiling.action?requestLocale=en" target="_blank">NALSA Legal Service</a><br><br>

    </td>
    <td id="page">
      <div id="imgl"><img align="right" src="logo.png" width="500px"></div>
      <h2><u>NYAYAbandhu</u></h2>

        Similar Cases:<br>
        <ul type="square">
          <?php
          $case=$_POST['cname'];
          $comp=urlencode($case);
            echo "<li>"."<font face=Broadway>"."<a target=_blank href=https://indiankanoon.org/search/?formInput={$comp}%20%20+doctypes:judgments>Some previous ".$case." cases in India</a>"."<br>"."<br>";
            echo "<li>"."<a target=_blank href=https://indiankanoon.org/search/?formInput={$comp}%20%20+doctypes:laws>Laws in Indian Constitution related to "."$case"." </a>"."<br>"."<br>"."</font>";
          ?>
        </ul>
      <form method="post" action="mailto.php">
        Email: <input type="text" name="email"><br><br>State: <input type="text" name="state"><br><br>
        Case Description:<br><br>
        <textarea name="desc" rows="5" columns="7"></textarea><br><br>
        
        <input type="submit" name="Mail">
      </form>


    </td>
  </tr>
</table>
<?php include("footer.php"); ?>
