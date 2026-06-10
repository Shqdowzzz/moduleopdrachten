<?php 
           $cars = isset($_POST['cars']) ? $_POST['cars'] : '';
           $afbeelding_url = "";

            echo "<h3>Gekozen auto</h3>";

            if ($cars == "audi") {
                $afbeelding_url = "https://images.powerkraut.nl/UCuYv2iBmLO1NxeLDuwgqJlETXWsgzuhrGA98a9uk_o/resize:fill:525/plain/https://www.maasdekoning.nl/content/uploads/2022/06/Audi-A3.jpg?hash%3D1717770423@webp";
            }
            else if ($cars == "mercedes") {
                $afbeelding_url = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.maasdekoning.nl%2Faudi-modellen%2F&psig=AOvVaw1KBwbFttWLmWRXV4i_7P8X&ust=1761741468151000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCIDmtcT0xpADFQAAAAAdAAAAABAE";
            }
            else if ($cars == "ford") {
                $afbeelding_url = "https://www.ford.nl/content/dam/guxeu/global-shared/vehicle-images/ranger/ford-new_ranger_phev-eu-16x9-768x432.png";
            }
            if ($afbeelding_url == "") {
                echo '<img src="' . $afbeelding_url . '" alt="' . $cars . '">';
            }
        
?>

