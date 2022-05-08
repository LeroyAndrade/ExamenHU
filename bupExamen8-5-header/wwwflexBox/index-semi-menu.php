<!DOCTYPE html>
<html lang="nl">
<head>
 <meta charset="utf-8">
 <meta name="description" content="HW">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="keywords" content=" ">
 <meta name="author" content="Leroy Andrade">

 <title>Hogeschool Utrecht</title>
 <meta name="author" content="Hier komt jouw naam">
 <link rel="stylesheet" type="text/css" href="./opmaak/style.css?v8">
</head>

<body lang="nl">

<div id="headerContainer" class="sticky">
 <section class="top" >

  <!--          img1-->
  <div id="placeholderImage"><img src="./img/main/placeholderImage.svg" alt="test"></div>
  <!--      <span><img src="https://via.placeholder.com/70x46" alt="test"></span>-->

  <!--leeg 2/3  -->
  <div> &nbsp; </div>

  <!-- hamburger button -->
  <div>
   <!--            <span class="fas hamburger_button""> </span>-->
   <!--              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hamburgerButton nav__knop fas hamburger_button" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">-->
   <!--                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />-->
   <!--              </svg>-->

   <div class="nav__knop">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hamburgerButton nav__knop fas hamburger_button" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
     <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
    </svg>

    <div class="fas sluitKnop verbergen"> &#215; </div>
   </div>

   <div>
    <!--      &#8801;-->
 </section>

 <nav>
  <ul class="verbergen geopendeMenuItems">
   <li class="nav__item"> <a href= "#"          class="nav__link"> <span class=""> Home           </span>  </a>  </li>
   <li class="nav__item"> <a href= "#"          class="nav__link"> <span class="nav__text"> Overzicht      </span>  </a>  </li>
   <li class="nav__item"> <a href= "#"          class="nav__link"> <span class="nav__text"> Over           </span>  </a>  </li>
   <li class="nav__item"> <a href= "#"          class="nav__link"> <span class="nav__text"> Contact        </span>  </a>  </li>
  </ul>
 </nav>

 <hr>
</div>

<!--  <hr class="hrOne">-->


<header>
 <article class="headerMainTekst">Overzicht</article>
 <br>
 <select id = "mainSelect" name = "country">
  <option value = "java" selected disabled>filteren &#46;&#46;</option>
  <option value = "java">Ontwerpen&#44; ontwikkelen en maken van producten</option>
  <option value = "ruby">Media vormgeven &#38; Ict</option>
  <option value = "oracle">Constructies en Bouwwerken</option>
  <option value = "tableau">Materiaaltechnologie</option>
  <option value = "tableau">Elektrische systemen &#44; Elektronica en Robotica</option>
  <option value = "tableau">Traditional &#38; Digital Fabrication</option>
  <option value = "tableau">Circulair Skills</option>
 </select>
 </div>
</header>

<div class="xyz"></div>

<main>

 <br>
 <section class="mainItems">
  <article class="itemCluster">
            <span>
                <img src="./img/main/gears.svg" alt="gears">
            </span>

   <span class="itemClusterText">Techniek</span>
   <br>
   <button class="buttonMain">Bekijk</button>
   <br>
  </article>

 </section>

 <br>
 <section class="mainItems">
  <article class="itemCluster">
            <span>
                <img src="./img/main/gears.svg" alt="gears">
            </span>

   <span class="itemClusterText">Techniek</span>
   <br>
   <button class="buttonMain">Bekijk</button>
   <br>
  </article>
 </section>

 <br>
 <section class="mainItems">
  <article class="itemCluster">
            <span>
                <img src="./img/main/bootmachine.svg" alt="gears">
            </span>

   <span class="itemClusterText">Techniek</span>
   <br>
   <button class="buttonMain">Bekijk</button>
   <br>
  </article>
 </section>

 <br>
 <section class="mainItems">
  <article class="itemCluster">
            <span>
                <img src="./img/main/hamer.svg" alt="gears">
            </span>
   <span class="itemClusterText">Techniek</span>
   <br>
   <button class="buttonMain">Bekijk</button>
   <br>
  </article>
 </section>
</main>


<script src="./js/javaScript.js"></script>
</body>



</html>
