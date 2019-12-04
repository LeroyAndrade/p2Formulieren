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

<label for="naam1">Naam</label>
   <input type="text" name="naam1" id="naam1" placeholder="Bv Jan Jansen">

<label for="">In welke klas zit jij ? * </label>
     <option value="selectClass" selected>selecteer jouw klas</option>
     <option value="MD1A">MD1A</option>
     <option value="MD1B">MD1B</option>
</select>
<br/>  <br><br>
  <section class="border1">
    <h1 class="">Welbevinding</h1>
    <br>
    <span class="lheight">Hoe positief ben je op dit moment over je opleiding</span><br/><br/>

      <input type="radio" name="secChec1" id="w100" value="1">
        <label for="w100">1</label>

      <input type="radio" name="secChec1" id="w110" value="2">
        <label for="w110">2</label>
<!--
      <input type="radio" name="secChec1" id="w111" value="3">
        <label for="w111">3</label>


      <input type="radio" name="secChec1" id="w112" value="4">
        <label for="w112">4</label>


      <input type="radio" name="secChec1" id="w113" value="5">
        <label for="w113">5</label>


      <input type="radio" name="secChec1" id="w114" value="6">
        <label for="w114">6</label>


      <input type="radio" name="secChec1" id="w115" value="7">
        <label for="w115">7</label>


      <input type="radio" name="secChec1" id="w116" value="8">
        <label for="w116">8</label>


      <input type="radio" name="secChec1" id="w117" value="9">
        <label for="w117">9</label>


      <input type="radio" name="secChec1" id="w118" value="10">
        <label for="w118">10</label>
-->
  <br><br>
<input type="submit" value="Verstuur">

    </section>
  </form>
</body>
</html>
