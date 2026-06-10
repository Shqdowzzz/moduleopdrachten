<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <p> Wat is je geslacht:</p>
    <input type="radio" name="geslacht" value="Man"
     for="Drink">Man</<br>
    <input type="radio" name="geslacht" value="Vrouw"
      for="Drink">Vrouw</<br>
    <input type="radio" name="geslacht" value="Onbekend"
      for="Drink">Onbekend</<br>
      <input type="submit"><br>
      <?php
      echo $_GET['geslacht'];
      ?>


      <br><p>Select a school:</p></br>
<select>
        <option value="Option 1">Deltion</option>
        <option value="Option 2">Windesheim</option>
        <option value="Option 3">Avans</option>
        <option value="Option 4">Zuyd</option>
        <?php


            <p>What ice cream do you like?</p></br>
     <input type="checkbox" name="icecream" value="Chocolate"   
  for="icecream"> Chocolate</br>
  <input type="checkbox"  name="icecream" value="Chocolate Pudding"
  for="icecream"> Chocolate Pudding</br>
  <input type="checkbox" name="ice cream" value="Chocolate Peanut Butter"
  for="icecream"> Chocolate Peanut Butter</br>
    <input type="checkbox" name="icecream" value="Vanilla"
  for="icecream"> Vanilla</br>
  <input type="checkbox" name="ice cream" value="Strawberry"
  for="icecream"> Strawberry</br>
        


</select>


</form>




    
</body>
</html>