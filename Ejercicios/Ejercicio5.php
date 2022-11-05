<?php
    $db = mysqli_connect('localhost', 'root', 'root') or 
        die ('Unable to connect. Check your connection parameters.');
    // make sure you're using the right database
    mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
        $query = <<<ENDSQL
                INSERT INTO reviews
            (review_movie_id, review_date, reviewer_name, review_comment,
                review_rating)
            VALUES 
                (4, "2006-11-27", "Juan Antonio", "This movie is a legend into the action movie, the story of peter parker
                it's so great and the enemies of him are so cool", 5),
                (4, "2009-02-11", "Eufrasio Contreras", "This type of superheroe movies have never excited me too much, the only 
                good thing about it it's the combat choreography, but for the rest, i don't give it a very good rate", 2),
                (4, "2012-06-17", "Tomas Rodriguez", " I really like this type of movies, the mix between combat and superheroes amazes me, 
                    the design of the enemies is very interesting and as a fan of comics I find it very faithful to the original comic.", 5),
                (5, "2006-10-06", "Enrique Lopez", "The war movies are my favorites, I will never get tired of seeing them, 
                    this film together with the one from Stalingrad seems to me to be authentic audiovisual gems, the moments of action and drama are sublime.", 5),
                (5, "2004-01-06", "Alex Rodriguez", "As a fan of World War II movies, this seems to me an ode to war, 
                    with a part as mythical as the Normandy landing is simply incredible and the final part with its epicity is surprising.", 5),
                (5, "2003-03-12", "Joel Fernando", "I have never been a fan of war movies but this one has managed to captivate me especially with the beginning, 
                    it does not seem like a masterpiece but I think it is quite good.", 3),
                (6, "2013-07-04", "Lazaro Martinez", "I find this movie quite interesting, the moment when the hunters arrive on the island and are surprised to see that tribe and then I love the great gorilla, 
                    it is a very entertaining movie.", 4),
                (6, "2017-02-23", "Fernando Lorca", "This movie seems pretty bad to me, I don't like this type of fantasy movie and 
                    I don't like everything that surrounds the actors who play it. Regrettable movie.", 1),
                (6, "2014-05-30", "Daniel Lopez", "It seems to me an entertaining movie with its pluses and minuses but the action moments are entertaining and for the simple fact of seeing the great gorilla 
                    it seems enough to me to see the movie.", 3)
    ENDSQL;
    mysqli_query($db, $query) or die(mysqli_error($db));

    echo 'data inserted successfully!';
    /*
    $query = 
    'SELECT AVG (review_rating) FROM reviews WHERE review_movie_id = 1';
    $result = mysqli_select_db($db,$query) or die(mysqli_error($db));
    $row = mysqli_fetch_row($result);
    echo "El resultado del AVG es:  ".$row[0];*/
    ?>