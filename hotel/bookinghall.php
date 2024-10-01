<?php
  include('dbcon.php');
  include('header.php');

?>

<div class="hall-container">
  <div class="hall-img">
    <img src="https://images.creativemarket.com/0.1.0/ps/8558940/1820/1213/m1/fpnw/wm1/yr6ylm9gutkmk0vyytdlh2irzfbzudyslort1si46lrshm1i2v649xbtgouxzmxo-.jpg?1592472857&s=3ecc8425357f627e32fbcc97201c718c" alt="partyhall">
  </div>
  <div id="book-form">
    <form action="bh.php" method="post">
      <center>
        <table>
          <tr>
            <th width="20%" height="50px">Check Hall Avaibility</th>
            <td rowspan="2"><input type="submit" name="sub" value="Check" required></td>
          </tr>
          <tr>
            <td width="20%" height="50px"><center><input type="date" name="hall"></center></td>
          </tr>
        </table>
      </center>
    </form>
  </div>
</div>

</body>
</html>