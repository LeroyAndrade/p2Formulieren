<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="author" content="Leroy Andrade">
<meta name="content" content="FroPeriode2Opdracht1">
<meta name="description" content="Project&nbsp;1">
  <meta name="keywords" content="Leroy Andrade,periode 2, opdracht 1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>customer info</title> <!-- de title aanpassen  -->
  <link type="text/css" rel="stylesheet" href="./style/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- voeg de meta-informatie author toe  -->
</head>

<body lang="nl">


  <h1>Een plan voor jouw ontwikkeling</h1>
  <p>Om een eerste stat lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
<form action="./pagina.php" method="get">

<label for="naam1">Naam &#42;</label>
   <input type="text" id="naam1" name="naam1" placeholder="Vul hier je naam in" autofocus required>
<br>
<label>In welke klas zit jij&#63; &#42; </label>
  <select name="selecteerKlas">
       <option value="">selecteer jouw klas</option>
       <option value="MD1A">MD1A</option>
       <option value="MD1B">MD1B</option>
  </select>

  <br>

<section class="mooi">
  <fieldset>
    <legend>Welbevinding</legend>
    <br>
    <p>Hoe positief ben je op dit moment over je opleiding</p>

    <label for="w1001"><input type="radio" name="positief" id="w1001" value="1">1</label>
    <label for="w1002"><input type="radio" name="positief" id="w1002" value="2">2</label>
    <label for="w1003"><input type="radio" name="positief" id="w1003" value="3">3</label>
    <label for="w1004"><input type="radio" name="positief" id="w1004" value="4">4</label>
    <label for="w1005"><input type="radio" name="positief" id="w1005" value="5">5</label>
    <label for="w1006"><input type="radio" name="positief" id="w1006" value="6">6</label>
    <label for="w1007"><input type="radio" name="positief" id="w1007" value="7">7</label>
    <label for="w1008"><input type="radio" name="positief" id="w1008" value="8">8</label>
    <label for="w1009"><input type="radio" name="positief" id="w1009" value="9">9</label>
    <label for="w1000"><input type="radio" name="positief" id="w1000" value="10">10</label>
</fieldset>
    <p>Hoe positief ben je op dit moment over je opleiding</p>
<fieldset>
    <label for="w10011"><input type="radio" name="positief2" id="w10011" value="1">1</label>
    <label for="w10022"><input type="radio" name="positief2" id="w10022" value="2">2</label>
    <label for="w10033"><input type="radio" name="positief2" id="w10033" value="3">3</label>
    <label for="w10044"><input type="radio" name="positief2" id="w10044" value="4">4</label>
    <label for="w10055"><input type="radio" name="positief2" id="w10055" value="5">5</label>
    <label for="w10066"><input type="radio" name="positief2" id="w10066" value="6">6</label>
    <label for="w10077"><input type="radio" name="positief2" id="w10077" value="7">7</label>
    <label for="w10088"><input type="radio" name="positief2" id="w10088" value="8">8</label>
    <label for="w10099"><input type="radio" name="positief2" id="w10099" value="9">9</label>
    <label for="w10000"><input type="radio" name="positief2" id="w10000" value="10" >10</label>
</fieldset>
    <p>Ga je door met deze opleiding</p>
<fieldset>
    <label for="w100111"><input type="radio" name="positief3" id="w100111" value="1">1</label>
    <label for="w100222"><input type="radio" name="positief3" id="w100222" value="2">2</label>
    <label for="w100333"><input type="radio" name="positief3" id="w100333" value="3">3</label>
    <label for="w100444"><input type="radio" name="positief3" id="w100444" value="4">4</label>
    <label for="w100555"><input type="radio" name="positief3" id="w100555" value="5">5</label>
    <label for="w100666"><input type="radio" name="positief3" id="w100666" value="6">6</label>
    <label for="w100777"><input type="radio" name="positief3" id="w100777" value="7">7</label>
    <label for="w100888"><input type="radio" name="positief3" id="w100888" value="8">8</label>
    <label for="w100999"><input type="radio" name="positief3" id="w100999" value="9">9</label>
    <label for="w100000"><input type="radio" name="positief3" id="w100000" value="10" >10</label>
</fieldset>
</section>
<br>


<section class="sterk">
  <fieldset>
    <legend>Sterke kanten</legend>
    <p>Wat zijn je sterke kanten in programmeren?</p>

    <label for="sterk1"><input type="checkbox" name="sterkeKant4" id="sterk1" value="Coderen in HTML en CSS">Coderen in HTML&#47;CSS</label>
    <label for="sterk2"><input type="checkbox" name="sterkeKant4" id="sterk2" value="Programmeren in Java">Programmeren in Java</label>
    <label for="sterk3"><input type="checkbox" name="sterkeKant4" id="sterk3" value="Programmeren in Javascript">Scripting&#58; Programmeren in Javascript</label>
    <label for="sterk4"><input type="checkbox" name="sterkeKant4" id="sterk4" value="Planning" >Planning</label>
    <label for="sterk5"><input type="checkbox" name="sterkeKant4" id="sterk5" value="Samenwerken">Samenwerken</label>
  </fieldset>
</section>

<section class="zelfReflecteren">
  <fieldset>
    <legend>Nog te ontwikkelen&#63;</legend>
    <p>Aan welke skills moet je nog wat extra aandacht besteden&#63;</p>

    <label for="zelfReflectie1"><input type="checkbox" name="zelfReflectie5" id="zelfReflectie1" value="Coderen in HTML en CSS">Coderen in HTML&#47;CSS</label>
    <label for="zelfReflectie2"><input type="checkbox" name="zelfReflectie5" id="zelfReflectie2" value="Programmeren in Java">Programmeren in Java</label>
    <label for="zelfReflectie3"><input type="checkbox" name="zelfReflectie5" id="zelfReflectie3" value="Programmeren in Javascript">Scripting&#58; Programmeren in Javascript</label>
    <label for="zelfReflectie4"><input type="checkbox" name="zelfReflectie5" id="zelfReflectie4" value="Planning" >Planning</label>
    <label for="zelfReflectie5"><input type="checkbox" name="zelfReflectie5" id="zelfReflectie5" value="Samenwerken">Samenwerken</label>
  </fieldset>
</section>

<section class="sterk">
  <fieldset>
    <legend>Tot nu toe</legend>
    <p>Wat vind je het leukste vak tot nu toe&#63;</p>

    <label for="TotNu1"><input type="checkbox" name="sterkeKant6" id="TotNu1" value="PRO1" >PRO1</label>
    <label for="TotNu2"><input type="checkbox" name="sterkeKant6" id="TotNu2" value="PRO2" >PRO2</label>
    <label for="TotNu3"><input type="checkbox" name="sterkeKant6" id="TotNu3" value="SLB" >SLB</label>
    <label for="TotNu4"><input type="checkbox" name="sterkeKant6" id="TotNu4" value="NED" >NED</label>
    <label for="TotNu5"><input type="checkbox" name="sterkeKant6" id="TotNu5" value="ENG" >ENG</label>
    <label for="TotNu6"><input type="checkbox" name="sterkeKant6" id="TotNu6" value="PROJ" >PROJ</label>
    <label for="TotNu7"><input type="checkbox" name="sterkeKant6" id="TotNu7" value="TPR" >TPR</label>
    <label for="TotNu8"><input type="checkbox" name="sterkeKant6" id="TotNu8" value="WVO" >WVO</label>
    <label for="TotNu9"><input type="checkbox" name="sterkeKant6" id="TotNu9" value="UXD" >UXD</label>
    <label for="TotNu10"><input type="checkbox" name="sterkeKant6" id="TotNu10" value="REK" >REK</label>

    <p>Met hoeveel zin ga je naar school&#63;</p>
      <section class="mooi">
      <label for="motivatie1"><input type="radio" name="motivatie7" id="motivatie1" value="1">1</label>
      <label for="motivatie2"><input type="radio" name="motivatie7" id="motivatie2" value="2">2</label>
      <label for="motivatie3"><input type="radio" name="motivatie7" id="motivatie3" value="3">3</label>
      <label for="motivatie4"><input type="radio" name="motivatie7" id="motivatie4" value="4">4</label>
      <label for="motivatie5"><input type="radio" name="motivatie7" id="motivatie5" value="5">5</label>
      <label for="motivatie6"><input type="radio" name="motivatie7" id="motivatie6" value="6">6</label>
      <label for="motivatie7"><input type="radio" name="motivatie7" id="motivatie7" value="7">7</label>
      <label for="motivatie8"><input type="radio" name="motivatie7" id="motivatie8" value="8">8</label>
      <label for="motivatie9"><input type="radio" name="motivatie7" id="motivatie9" value="9">9</label>
      <label for="motivatie10"><input type="radio" name="motivatie7" id="motivatie10" value="10" >10</label>
      </section>
        </fieldset>
</section>

<p>Wat wil je in de toekomst nog doen&#63;</p>
<textarea name="textGebied" placeholder="Voeg hier nog extra info bij alstublieft&#33;" rows="9" cols="42"></textarea>
  <br>
<input type="submit" value="Verstuur">
  </form>


  <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2F30168.hosts2.ma-cloud.nl%2Fbewijzenmap%2Fperiode2%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=nl" target="_blank">
                        <img style="border:0;width:88px;height:31px"
                            src="http://30168.hosts2.ma-cloud.nl/bewijzenmap/periode1.1/pro1/splash/w3cHTML.png"
                            alt="Valide CSS!" />
                        </a>

                        <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2F30168.hosts2.ma-cloud.nl%2Fbewijzenmap%2Fperiode2%2F" target="_blank">
                            <img style="border:0;width:88px;height:31px"
                                src="http://30168.hosts2.ma-cloud.nl/bewijzenmap/periode1.1/pro1/splash/w3CSS.png"
                                alt="Valide CSS!" />
                            </a>
</body>
</html>
