<?php 
include_once 'header.php';
?>
<style>
<?php include 'styles/pages/index.css'; ?>
</style>

<div class="wrapper">
    <section class="index-intro">
    <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<p class='session-welcome'>Hello there <span> " . $_SESSION["useruid"] . "</span></p>";
                }
                else{
                    echo "<h3>
                    <i class='far fa-truck'></i>
                    Choose your delivery day, 7 days a week
                    <a href='#'>More Info</a>
                   </h3>";
                }
                ?>
    </section>
            

    <section id="banner">
        <div class="container1">
            <div class="container-left">
                <h1>Big Bite</br>Doughnuts</h1>
            </div>

            <div class="container-right">
                <img src="img/pink-donut.png" alt="">
                <p>Try our one-of-a-kind doughnuts, hand made with the freshest and finest ingredients.</p>
                <button><a href="./pages/shop.html"><span>Explore <i
                                class="fas fa-chevron-down"></i></span></a></button>
            </div>
        </div>
    </section>

    <section>
        <div class="container2">
            <p>DELIVERED NEXT DAY, 7 DAYS A WEEK ACROSS THE UK</p>
            <p class="text">Order before 2pm and get it tomorrow!</p>
        </div>
    </section>

    <section id="cards">
        <div class="cards">
            <div class="card">
                <img src="img/original-glazed.png" alt="">
                <h2>Original Glazed</h2>
                <p>£2.50</p>
                <button>Buy</button>
            </div>
            <div class="card">
                <img src="img/chocolate-dreamcake.png" alt="">
                <h2>Chocolate Dreamcake</h2>
                <p>£2.50</p>
                <button>Buy</button>
            </div>
            <div class="card">
                <img src="img/simply-the-zest.png" alt="">
                <h2>Simply The Zest</h2>
                <p>£2.50</p>
                <button>Buy</button>
            </div>
            <div class="card">
                <img src="img/strawberries-and-cream.png" alt="">
                <h2>Strawberries & Dream</h2>
                <p>£2.50</p>
                <button>Buy</button>
            </div>

        </div>
    </section>

    <section id="promo">
        <div class="promo-banner">
            <h2>Get 10% off your first order!</h2>
            <p>Hey there! <br>What kind of gift are you browsing today?</br></p>
            <select id="gift" name="gifts">
                <option value="" disabled selected>What kind of gift...</option>
                <option value="choco">Chocolatey</option>
                <option value="fruit">Fruity</option>
                <option value="classic">Something Classic</option>
                <option value="special">Something Special</option>
            </select>
            <input type="text" id="email" name="email" placeholder="Enter your email address">
            <button>Get Discount</button>
        </div>
    </section>

<?php 
include_once 'footer.php';
?>