<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
<h1>Basic HTML Form</h1>

<p>Name:</p>
    <form action="result.php" method="post">
    <br>First Name:</br> 
    <input type="text" name="firstName" value=""><br>
    
    <br>Last Name:</br>
    <input type="text" name="lastName" value=""><br>


    <br><p>Other Questions:</p></br>
<p> Choose a drink:</p>
    <input type="radio" id="drink" name="Drink" value="Coffee">
    <label for="Drink">Coffee</label><br>
    <input type="radio" id="drink" name="Drink" value="Tea">
     <label for="Drink">Tea</label><br>
    <input type="radio" id="drink" name="Drink" value="Hot Chocolate">
     <label for="Drink">Hot Chocolate</label><br>

     <p>What ice cream do you like?</p>
     <input type="checkbox" id="icecream" name="icecream" value="Chocolate">
  <label for="icecream"> Chocolate</label><br>
  <input type="checkbox" id="icecream" name="icecream" value="Chocolate Pudding">
  <label for="icecream"> Chocolate Pudding</label><br>
  <input type="checkbox" id="icecream" name="icecream" value="Chocolate Peanut Butter">
  <label for="icecream"> Chocolate Peanut Butter</label><br>
    <input type="checkbox" id="icecream" name="icecream" value="Vanilla">
  <label for="icecream"> Vanilla</label><br>
  <input type="checkbox" id="icecream" name="icecream" value="Strawberry">
  <label for="icecream"> Strawberry</label>


<br><select name="school"></br>
        <option value="deltion">Deltion</option>
        <option value="windesheim">Windesheim</option>
        <option value="avans">Avans</option>
        <option value="zuyd">Zuyd</option>
<br></select></br>







  <p><label for="comments">Please provide comments:</label></p>
  <textarea id="comments" name="comments" rows="4" cols="50"></textarea>

<br><input type="submit" value="Submit"></br>
  </form>


 







</body>
</html>