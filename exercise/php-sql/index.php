<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Real Estate</title>
</head>

<body>
    <!------------------------------------------navbar---------------------------->
<section class="background">   
<nav class="navbar h-nav">
        <ul class="nav-list v-class">
            <div class="logo"><img src="img/logo4.jpeg" alt="logo"></div>
            <li><a href="#">Home</a></li>
            <li><a href="#services">Buy & Sell</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <div class="rightNav v-class">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <section class="firstsection">
        <div class="box-main">
            <div class="firsthalf">
                <p class="big-text">A different approach to buying and selling real estate</p>
                <p class="small-text">Find the home you’ve been looking for on HomeFinder, the top online real estate
                    search portal</p>
                <div class="buttons">
                    <button class="btn">Find More</button>
                </div>
            </div>
            <div class="secondhalf">
                <img src="img/logo5.jpeg" alt="main background">
            </div>
        </div>
    </section>
    </section>
    <!------------------------------------------right section---------------------------->
    <section class="section" id="services">
        <div class="para">
            <p class="secTag big-text">Make The Best Choice</p>
            <p class="secSubTag sm">Helping you make the best buying, selling, renting & financing decisions with
                start-to-finish advice, personalized tools, and smart home tips.Living brings the same level of quality
                and finishes that you have come to expect from
                our homes to the most dynamic urban markets in the nation. Each beautifully crafted condominium
                community offers innovative architecture, elegant finishes, world-class amenities, and unequaled
                services that accentuate a lifestyle of luxury.</p>
        </div>
        <div class="thumbnail">
            <img src="img/home1.jpg" width="350" height="350" alt="home one" class="imgF">

        </div>
    </section>
    <!-------------------------------------------left section------------------------------------->
    <section class="section secLeft">
        <div class="para">
            <p class="secTag big-text">No Void Periods</p>
            <p class="secSubTag sm">It does not matter whether your property is occupied or vacant,
                either way you will receive guaranteed rent payments from us. There is no need to worry about void
                periods, as even if your property is vacant or the tenants have not paid their rent, our guaranteed rent
                scheme means that we will still pay you. Secure regular income by working with our experienced property
                letting team.</p>
        </div>
        <div class="thumbnail">
            <img src="img/home2.jpg" width="350" height="350" alt="home two" class="imgF">

        </div>
    </section>
    <!--------------------------------------------right section----------------------------------->
    <section class="section">
        <div class="para">
            <p class="secTag big-text">Internal Condition Guaranteed </p>
            <p class="secSubTag sm">We offer landlords peace of mind when it comes to looking after their rental
                properties.
                We guarantee the internal condition of the property and often improve the property by re-decorating in
                neutral colours throughout at the start of the agreement.
                We have the properties cleaned once a week and spot checked and inspected every 4 weeks.</p>       </div>
        <div class="thumbnail">
            <img src="img/home3.jpg" width="350" height="350" alt="home three" class="imgF">

        </div>
    </section>

    <section class="contact" id="contact">
    
        <h1 class="text-center">Contact Us</h1>
        <div class="form">
        <form action="userinfo.php" method="post">
            <input class="form-input" type="text" name="user" id="user" placeholder="Enter Your userame">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your Email">
            <input class="form-input" type="phone" name="phone" id="phone" placeholder="Enter Your Phone number">
            <textarea class="form-input" name="comments" id="comments" cols="30" rows="10"
                placeholder="Tell Us Your Concern"></textarea>
            <button class="btn btn-dark">Submit</button>
        </div>
    </form>
    </section>

    <script src="script.js"></script>
</body>

</html>