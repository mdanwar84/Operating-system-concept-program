<?php
include('header.php');
include('dbcon.php');
session_start();

?>
<style>
    .food-nav{
        display: flex;
        width: 100%;
        margin-top: 30px;
        position: sticky;
        top:0px;
        background-color:crimson;
        border-radius:50px;
        
    }
    .food-nav ul{
        display: flex;
        padding: 10px;
        align-items: center;
        justify-content: center;
        margin-left: 50px;
    }
    .food-nav ul li{
        list-style: none;
        padding: 10px;
        text-align:center;
        margin-left: 70px;
    }
    .food-nav ul li:hover{
        background-color:white;
        color:white;
        border-radius:10px;
    }
    .food-nav ul li a{
        text-decoration: none;
        font-size:20px;
        text-align:center;
        color:black;
        font-weight:700;
    }
    .food-h{
        text-align:center;
    }
</style>
<nav class="food-nav">
    <ul>
        
        <li><a href="#south">South-Indian</a></li>
        <li><a href="#italian">Italian</a></li>
        <li><a href="#mah">Maharashtrian</a></li>
        <li><a href="#punjabi">Punjabi</a></li>
        <li><a href="#chinese">Chinese</a></li>
        <li><a href="#deserts">Deserts</a></li>
    </ul>
</nav>

<div class="container">
    <!-- ----------------------------------- South Indian-------------------------- -->
    <h1 class="food-h">South-Indian</h1>
    <div class="row" id="south">
    
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://th.bing.com/th/id/OIP.kZrgWstklM5VCYhrVEkAVQHaHa?w=768&h=768&rs=1&pid=ImgDetMain" alt="dosa">
                <div class="card-body">
                    <h5 class="card-title">Dosa</h5>
                    <p class="card-text">Price : Rs 100</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Dosa">
                   <input type="hidden" name="price" value="100">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://th.bing.com/th/id/OIP.nLsW6EI7W_KwH7FPjQ4TvwHaEd?rs=1&pid=ImgDetMain" alt="idli">
                <div class="card-body">
                    <h5 class="card-title">Idli Sambhar</h5>
                    <p class="card-text">Price : Rs 80</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Idli">
                   <input type="hidden" name="price" value="80">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://th.bing.com/th/id/R.9aea0a5313d2ebb0c9fe4dec9bec25ca?rik=K52FUOIVyU50IQ&pid=ImgRaw&r=0" alt="masakadosa">
                <div class="card-body">
                    <h5 class="card-title">Masala Dosa</h5>
                    <p class="card-text">Price : Rs 120</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Masala Dosa">
                   <input type="hidden" name="price" value="120">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2022/03/cheese-dosa.jpg.webp" alt="cheese dosa">
                <div class="card-body">
                    <h5 class="card-title">Cheese Dosa</h5>
                    <p class="card-text">Price : Rs 120</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Cheese Dosa">
                   <input type="hidden" name="price" value="120">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://th.bing.com/th/id/OIF.ymHwen4rLUDbbuEcjrpvkA?rs=1&pid=ImgDetMain" alt="onion">
                <div class="card-body">
                    <h5 class="card-title">Onion Utthapa</h5>
                    <p class="card-text">Price : Rs 110</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="onion Utthapa">
                   <input type="hidden" name="price" value="110">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://th.bing.com/th?id=OIP.alSGx80oLLNiYfk34KaFEQHaE8&w=306&h=204&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" alt="vadasambhar">
                <div class="card-body">
                    <h5 class="card-title">Vada Sambhar</h5>
                    <p class="card-text">Price : Rs 120</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Vada Sambhar">
                   <input type="hidden" name="price" value="120">
                </div>
            </div>
            </form>
        </div>
       
      

    </div>
    <!-- ================================== Italian===================================== -->
    <h1 class="food-h">Italian</h1>
    <div class="row" id="italian">
       
        <div class="col-lg-3">
           
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://th.bing.com/th/id/OIP.pVeRJjUNvxCH8BFCDBGJLQHaHa?rs=1&pid=ImgDetMain" alt="pasta">
                <div class="card-body">
                    <h5 class="card-title">Chilli Pasta</h5>
                    <p class="card-text">Price : Rs 200</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Chili Pasta">
                   <input type="hidden" name="price" value="200">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://th.bing.com/th/id/R.87b5187c5cd92ede3a3e94b25ac08cfa?rik=ZoOnXFBbe8%2bv0Q&pid=ImgRaw&r=0" alt="Burger">
                <div class="card-body">
                    <h5 class="card-title">Veg Cheese Burger</h5>
                    <p class="card-text">Price : Rs 110</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Burger">
                   <input type="hidden" name="price" value="110">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://th.bing.com/th/id/R.02470f6ff8b859b8e0f64c97ab54fb5b?rik=kD%2b4Dl%2fzEKDREA&riu=http%3a%2f%2fwww.pngall.com%2fwp-content%2fuploads%2f2018%2f04%2fPasta-PNG-File.png&ehk=PbGh4Jch8uacPOIsxkVoeGPB182dIK8rttGix%2fPWSpo%3d&risl=&pid=ImgRaw&r=0" alt="pasta">
                <div class="card-body">
                    <h5 class="card-title">Pasta</h5>
                    <p class="card-text">Price : Rs 160</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Pasta">
                   <input type="hidden" name="price" value="160">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://images7.alphacoders.com/596/596343.jpg" alt="pizza">
                <div class="card-body">
                    <h5 class="card-title">Pizza</h5>
                    <p class="card-text">Price : Rs 250</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Pizza">
                   <input type="hidden" name="price" value="250">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://static.wixstatic.com/media/2341a8_d3eacbf0db8e4d89a91344e35366f46e~mv2.jpg/v1/crop/x_0,y_382,w_1440,h_1033/fill/w_850,h_610,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/IMG_1412_JPG.jpg" alt="margereta">
                <div class="card-body">
                    <h5 class="card-title">Margereta</h5>
                    <p class="card-text">Price : Rs 150</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Margereta">
                   <input type="hidden" name="price" value="150">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="https://i.ytimg.com/vi/-d9Ndn1-g7w/hqdefault.jpg" alt="capsi">
                <div class="card-body">
                    <h5 class="card-title">New Capsi Pizza</h5>
                    <p class="card-text">Price : Rs 160</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Capsi Pizza">
                   <input type="hidden" name="price" value="160">
                </div>
            </div>
            </form>
            
        </div>
       
      
        
    </div>
    <!-- ------------------------------------Mah------------------------------------------- -->
    <h1 class="food-h">Maharashtrian</h1>
    <div class="row" id="mah">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="https://th.bing.com/th/id/R.ac8f5486f6b7d50f756b0d343daecd0e?rik=Ow%2fgzvuiJ0dujQ&pid=ImgRaw&r=0" alt="handi">
               <div class="card-body">
                   <h5 class="card-title">Veg Handi</h5>
                   <p class="card-text">Price : Rs 100</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Handi">
                  <input type="hidden" name="price" value="100">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="https://th.bing.com/th/id/R.d40ce8b827436e6555340141a5ac8a06?rik=kZNXISaU5LRzNQ&riu=http%3a%2f%2fcdn-cms.f-static.com%2fuploads%2f71762%2f2000_57f30dca91534.jpg&ehk=lZdZwZCdSI%2fXxFExoF8BXwU%2fb0xQUPUekJl1JRil040%3d&risl=&pid=ImgRaw&r=0" alt="maratha">
               <div class="card-body">
                   <h5 class="card-title">Veg Maratha</h5>
                   <p class="card-text">Price : Rs 140</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Maratha">
                  <input type="hidden" name="price" value="140">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="https://th.bing.com/th/id/OIP.Mam5xhSgtzdSEBUtatgItwHaFj?w=1500&h=1125&rs=1&pid=ImgDetMain" alt="mah">
               <div class="card-body">
                   <h5 class="card-title">maharashtrian specian Thali</h5>
                   <p class="card-text">Price : Rs 360</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="maharshtra thali">
                  <input type="hidden" name="price" value="360">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="https://th.bing.com/th/id/OIP._TZq4PKyrtUudtFcIcdTLAHaE8?rs=1&pid=ImgDetMain" alt="sandwich">
               <div class="card-body">
                   <h5 class="card-title">Sandwich</h5>
                   <p class="card-text">Price : Rs 100</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="sandwich">
                  <input type="hidden" name="price" value="100">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="https://cdn.tasteatlas.com/images/dishes/8120dc68369f415bb0308e8f9d4e2205.png?width=280&height=280" alt="panner">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="https://www.thestatesman.com/wp-content/uploads/2019/05/french-fries-1024x683.jpg" alt="frenchfries">
               <div class="card-body">
                   <h5 class="card-title">French Fries</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="French Fries">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
   <!-- ---------------------------------------punjabi------------------------------------ -->
   <h1 class="food-h">Punjabi</h1>
   <div class="row" id="punjabi">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="https://th.bing.com/th/id/OIP.j6VH4YcKhjTrGLuhTsH5wwHaFj?rs=1&pid=ImgDetMain" alt="paneer-tikka">
               <div class="card-body">
                   <h5 class="card-title">Paneer Tikka</h5>
                   <p class="card-text">Price : Rs 220</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Tikka">
                  <input type="hidden" name="price" value="220">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="https://images.ctfassets.net/3s5io6mnxfqz/3ZWkmR6pOdj6LvbbPArUsy/10bb7b0414150ff851d83c751028acf2/AdobeStock_433355205.jpeg?w=828" alt="shai">
               <div class="card-body">
                   <h5 class="card-title">Shai Paneer</h5>
                   <p class="card-text">Price : Rs 110</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Shai Paneer">
                  <input type="hidden" name="price" value="110">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="https://th.bing.com/th/id/OIP.6tu7Mz_K1e1S0kN3brUm8gHaE8?rs=1&pid=ImgDetMain" alt="paratha">
               <div class="card-body">
                   <h5 class="card-title">Paneer Paratha</h5>
                   <p class="card-text">Price : Rs 160</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer Paratha">
                  <input type="hidden" name="price" value="160">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/paneer3.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Gravy</h5>
                   <p class="card-text">Price : Rs 50</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer Gravy">
                  <input type="hidden" name="price" value="50">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/thartarat.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Veg Thartarat</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Thartarat">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
   <!-- ------------------------------------------chinese-------------------------- -->
   <h1 class="food-h">Chinese</h1>
   <div class="row" id="chinese">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/paneerchilli.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Chili</h5>
                   <p class="card-text">Price : Rs 120</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer Chili">
                  <input type="hidden" name="price" value="120">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/manchu.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Manchurion</h5>
                   <p class="card-text">Price : Rs 110</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Manchurion">
                  <input type="hidden" name="price" value="110">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/sezwan.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Sezwan Rice</h5>
                   <p class="card-text">Price : Rs 160</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Sezwan">
                  <input type="hidden" name="price" value="160">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/nood.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Veg Dry Noodles</h5>
                   <p class="card-text">Price : Rs 120</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Dry Noodels">
                  <input type="hidden" name="price" value="120">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/momo.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Boiled Momos</h5>
                   <p class="card-text">Price : Rs 170</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Momos">
                  <input type="hidden" name="price" value="170">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/hakka.jpg" alt="hakks">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 110</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Hakka">
                  <input type="hidden" name="price" value="110">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
   <!-- ---------------------------------------------deserts---------------------------------- -->
   <h1 class="food-h">Deserts</h1>
   <div class="row" id="deserts">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/faluda.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Faluda</h5>
                   <p class="card-text">Price : Rs 100</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Faluda">
                  <input type="hidden" name="price" value="100">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/chocochips.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Choco Chips Ice-cream</h5>
                   <p class="card-text">Price : Rs 70</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Chocochips">
                  <input type="hidden" name="price" value="70">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/cmilkshake.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Chocolate Milkshake</h5>
                   <p class="card-text">Price : Rs 110</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Chocolate Milk">
                  <input type="hidden" name="price" value="110">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/mangomilk.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Mango Milk Shake</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Mango Milk">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/vanila.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Vanilla Ice-cream</h5>
                   <p class="card-text">Price : Rs 50</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Vanila icecream">
                  <input type="hidden" name="price" value="50">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/strawberry.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Strawberry Ice-Cream</h5>
                   <p class="card-text">Price : Rs 170</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Strawberry ice-cream">
                  <input type="hidden" name="price" value="170">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
</div>
</body>
</html>