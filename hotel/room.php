<?php
include('header.php');
include('dbcon.php');


?>
<style>
    .room-status{
        display: none;
    }
</style>

<div id="room-home">
     <figure>
         <img src="https://th.bing.com/th/id/OIP.dlWlEPcLBThjEwGS18VYAwHaE8?rs=1&pid=ImgDetMain" alt="delux">
         <img src="https://www.kayak.com/rimg/himg/f9/99/36/leonardo-2737762-aab19077_O-497705.jpg?width=1366&height=768&crop=true" alt="delux">
         <img src="https://th.bing.com/th/id/R.a53f9ed127d238961cd44f3ff351f6a5?rik=0SJGkjeL%2fanm2A&riu=http%3a%2f%2fwww.grandlordhotel.com%2fmedias%2froom%2fbig%2f80%2fdeluxe03.jpg&ehk=pV6MxX4Nqzr7PCxa3QC9xK%2f4ILmpxTsnF%2bRlyJXY6Uk%3d&risl=&pid=ImgRaw&r=0" alt="delux">
         <img src="https://watermark.lovepik.com/photo/20211120/large/lovepik-deluxe-hotel-room-picture_500484665.jpg" alt="delux">
         <img src="https://i.ytimg.com/vi/BAF5rmgcsFk/maxresdefault.jpg" alt="delux">
         
     </figure>
        

</div>

<div id="f1">
    <h2 class="room-h2"><i class="fas fa-hotel"></i> SEARCH YOUR ROOMS HERE</h2>
         <form action="room.php " method="get"> 
         <center><table >
             <tr>
                 
                <th width="20%" height="50px" required>Check In Date</th>
                 <th width="20%" height="50px" required>Check Out Date</th>
                 <th width="20%" height="50px">Room</th>
                 <td rowspan="2"><input type="submit" name="sub" id="check-btn" value="Check"  ></td>
             </tr>
             <tr>
                
                <td width="20%" height="50px"><center><input type="date" name="ci" required></center></td>
                 <td width="20%" height="50px"><center><input type="date" name="co" required></center></td>
                 <td width="20%" height="50px">
                    <center> <select name="room">
                         <option >1</option>
                         <option >2</option>
                         <option >3</option>
                         <option >4</option>
                         <option >5</option>
                        

                     </select></center>
            </form>
           
                 </td>
             </tr>
         </table></center>
         <?php
               $r = $_GET['room'];
               $ci=$_GET['ci'];
               $co=$_GET['co'];
         ?>
         <!---------------------------------  delux ac--------------------- -->
        
         <?php
               $qry="SELECT * FROM `deluxacroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `deluxacroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag">Delux A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 1100 Rs</p>
                     <form action="r1.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Delux AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="https://images.rosewoodhotels.com/is/image/rwhg/hi-hgv-26330925-rhgmodelbedroom-1" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag">Delux Ac Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :( Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
            
             <!---------------------------------   ac--------------------- -->

             <?php
               $qryy="SELECT * FROM `acroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `acroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag"> A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 900 Rs</p>
                     <form action="r2.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="A.C. Room" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag"> Ac Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :( Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
            
             <!---------------------------------  non ac--------------------- -->
             <?php
               $qryy="SELECT * FROM `nonac` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `nonac` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag">Non A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 700 Rs</p>
                     <form action="r3.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Non AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag">Non Ac Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :( Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
            


     </div>

    <div class="room-status">

     <section id="rooms-right">
        
    </section>
    <section id="rooms-right">
       
    </section>
    <section id="rooms-right">
        
    </section>
    </div>
    
   
<?php
include('headfooter.php');
?>

</body>
</html>