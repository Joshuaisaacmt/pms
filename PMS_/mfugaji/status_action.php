<?php
    include "../connection.php";      session_start ();
    $user_id = $_SESSION['user_id'];

    if(isset($_POST['submit'])){
      
        if($_POST['product_type'] == 'Brolier'){
            // // depart function
            $product_type = "Brolier";
            $product_arrival = $_POST['product_arrival'];
            $product_qnty = $_POST['product_qnty'];
            $product_status = 1;
            $ratedate = strtotime("$product_arrival");
            $date = strtotime("+28 day", $ratedate);
            $returnDate = date("Y-m-d", $date);
        }
        elseif ($_POST['product_type'] == 'Layering') {
            // // depart function
            $product_type = "Layering";
            $product_arrival = $_POST['product_arrival'];
            $product_qnty = $_POST['product_qnty'];
            $product_status = 1;
            $ratedate = strtotime("$product_arrival");
            $date = strtotime("+168 day", $ratedate);
            $returnDate = date("Y-m-d", $date);
        }
        elseif ($_POST['product_type'] == 'Chotara') {
            // // depart function
            $product_type = "Chotara";
            $product_arrival = $_POST['product_arrival'];
            $product_qnty = $_POST['product_qnty'];
            $product_status = 1;
            $ratedate = strtotime("$product_arrival");
            $date = strtotime("+28 day", $ratedate);
            $returnDate = date("Y-m-d", $date);
        }
        

         // Taarifa zaidi malisho
/* -------------------------------------------------------------Brolier data----------------------------------------------------------------*/
        if($product_type == 'Brolier'){
            // taarifa kuhus sk 1 - 14 (wiki 1 na 2)
            $age1 = strtotime("$product_arrival");
            $date_age1 = strtotime("+7 day", $age1);
            $returnDate_age1 = date("Y-m-d", $date_age1);

            $aged3 = date("Y-m-d", $age1);
            $food_gm1 = ($product_qnty * 22);
            $food1_kg = ($food_gm1 / 1000);
            $food_bags = ($food1_kg/50);    
            $water = (($product_qnty * 4)/ 100);
            $subject_1 = "Broiler Pre-Starter";
            $details_1 = " Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi
                            tarehe ". $returnDate_age1." <br> Ili kuwatengenezea 
                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri 
                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum"; 
            $activity_1 = "  Kiwango na ulishaji wake ni ifuatavyo:-
                            <br> Wiki ya 1: Gramu ".$food_gm1. " Utakuwa Unawapa kwa siku 7, 
                            kwanzia tarehe ".$aged3." kwa kila siku moja. ";
                    
    
            // taarifa kuhus age wiki 3 - 8
            $age2 = strtotime("$returnDate_age1");
            $date_age2 = strtotime("+20 day", $age2);
            $returnDate_age2 = date("Y-m-d", $date_age2);

            $aged2 = date("Y-m-d", $age2);
            $food_gm2 = ($product_qnty * 27);
            $wik3 = strtotime("+8 day", $age2);
            $wik3_date = date("Y-m-d", $wik3); //   wiki 2

            $food2_kg = ($food_gm2 /1000);
            $food_bags_2 = ($food2_kg/50);
            $water_2 = (($product_qnty * 6)/ 100);
            $subject_2 = "Broiler Starter";
            $details_2 = "Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, 
            hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na 
            kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale 
            chakula gani bora, hawawezi kutoa mazao bora";
            $activity_2 ="Kiwango na ulishaji wake ni ifuatavyo:-
                <br> Wiki ya 3: Gramu ".$food_gm2. "  Utakuwa Unawapa kwa siku 7, 
                kwanzia tarehe ".$aged2." kwa kila siku moja. 
            " ;                        
    
            // Taarifa kuhus UMRI WA WIKI 9 – 18
            $age3 = strtotime("$returnDate_age2");
            $date_age3 = strtotime("+9 day", $age3);
            $returnDate_age3 = date("Y-m-d", $date_age3);

            $aged1 = strtotime("Y-m-d", $age3);
            $food_gm4 = ($product_qnty * 56);
            $wik4 = strtotime("+8 day", $age3);
            $wik4_date = date("Y-m-d", $wik4); //   wiki 3

            $food3_kg = ($food_gm4 /1000);
            $food_bags_3 = ($food3_kg/50);
            $water_3 = (($product_qnty * 20)/ 100);
            $subject_3 = "Broiler Grower";
            $details_3 = "Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.";
            $activity_3 = " Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-
                <br> Wiki ya 3: Gramu ".$food_gm4. "  Utakuwa Unawapa kwa siku 7, 
                kwanzia tarehe ".$aged1." kwa kila siku moja. 
            ";

             // Taarifa kuhus UMRI WA WIKI 9 – 18
             $age4 = strtotime("$returnDate_age3");
             $date_age4 = strtotime("+15 day", $age4);
             $returnDate_age4 = date("Y-m-d", $date_age4);
 
             $aged = strtotime("Y-m-d", $age1);
             $food_gm5 = ($product_qnty * 56);
             $wik4 = strtotime("+27 day", $age3);
             $wik4_date = date("Y-m-d", $wik4); //   wiki 3
 
             $food4_kg = ($food_gm5 /1000);
             $food_bags_4 = ($food3_kg/50);
             $water_4 = (($product_qnty * 20)/ 100);
             $subject_4 = "Broiler Finisher";
             $details_4 = "Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.";
             $activity_4 = " Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-
                 <br> Wiki ya 3: Gramu ".$food_gm5. "  Utakuwa Unawapa kwa siku 7, 
                 kwanzia tarehe ".$aged." kwa kila siku moja hadi tarehe ".$wik4_date ;

/*--------------------------------------------------- Brolier medical information -----------------------------------------------------------------*/
                $med1_sys = strtotime("+7 day", $age1);
                $med1_date = strtotime("Y-m-d", $med1_sys);   // siku 2 - 6  
                $med1_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med1_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo";   
                $med1_gonjwa = "Chanjo ya Newcastle";
                $med1_tech = "Hatua zifuatavyo namna ya kuaandaa Dawa:-
                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu 
                                    kwanzia siku ya pili baada ya ingia hadi tarehe ".$med1_date."
                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo";         
                
                $med2_sys = strtotime("+7 day", $med1_date);
                $med2_date = strtotime("Y-m-d", $med2_sys);   // wiki 1   
                $med2_time = date("Y-m-d", strtotime("+7 day", $med1_date));
                $med2_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Gumboro";
                $med2_gonjwa = "Chanjo ya Gumboro ";
                $med2_tech = "Hatua zifuatavyo namna ya kuaandaa Dawa:-
                            <br> i) Hatua ya kwanza weka chanjo ya gumboro kwenye maji  masaa 2 tu. 
                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo";
                
                $med3_sys = strtotime("+2 day", $med2_date);
                $med3_date = strtotime("Y-m-d", $med3_sys);   // sk 16
                $med4_sys = strtotime("+4 day", $med3_date);
                $med4_date = strtotime("Y-m-d", $med4_sys);   // sk 20
                $med3_time = date("Y-m-d", strtotime("+6 day", $med2_date));
                $med3_purpose = "Hii chanjo inasaidia kuongeza nguvu kwa vifaranga kujikinga na magonjwa.";
                $med3_gonjwa = "Coccidiosis";
                $med3_tech = "Zifuatavyo aina ya Dawa:-
                            <br> Trisulmycine / Trimazine  au dawa yoyote vatamin ambayo inatachanganywa kwenye maji
                            <br> Hii dawa inatumika kwanzia tarehe ". $med3_date." hadi tarehe  ". $med4_date ;

                $med5_sys = strtotime("+1 day", $med4_date);                
                $med5_date = strtotime("Y-m-d", $med5_sys);   // wiki 21  
                $med4_time = date("Y-m-d", strtotime("+1 day", $med4_date));
                $med4_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo";   
                $med4_gonjwa = "Gumboro";
                $med4_tech = "Hii newcastle vaccine (lasota) inachanganywa kwenye maji. 
                             Hii dawa inatumika kwanzia tarehe ". $med5_date;    
                
                $med6_sys = strtotime("+14 day", $med5_date);
                $med6_date = strtotime("Y-m-d", $med6_sys);   // wik6 8  
                $med7_sys = strtotime("+28 day", $med6_date);
                $med7_date = strtotime("Y-m-d", $med7_sys);   // wik6 8  
                $med5_time = date("Y-m-d", strtotime("+42 day", $med5_date));
                $med5_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Ndui";
                $med5_gonjwa = "Ndui fowl pox vaccine";
                $med5_tech = "Hii ndui fowl pox vaccine  ni Sindano ambayo wekwa kwenye maji. 
                            Hii dawa inatumika kwanzia tarehe ". $med6_date." kila siku mpaka tarehe ". $med7_date;
                
                $med8_sys = strtotime("+7 day", $med7_date);
                $med8_date = strtotime("Y-m-d", $med8_sys);   // wiki 1  
                $med6_time = date("Y-m-d", strtotime("+7 day", $med7_date));
                $med6_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga zidiya ya ugonjwa wa mnyoo";
                $med6_gonjwa = "Minyoo pipperazine cirtratte";
                $med6_tech = "Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji 
                            Hii dawa inatumika kwanzia tarehe ". $med6_date." 
                            kila siku mpaka tarehe ". $med7_date;


                $med9_sys = strtotime("+91 day", $med8_date);
                $med9_date = strtotime("Y-m-d", $med9_sys);   // wiki 1  
                $med7_time = date("Y-m-d", strtotime("+91 day", $med8_date));
                $med7_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo";   
                $med7_gonjwa = "Chanjo ya Newcastle kwa masaa 2 tu";
                $med7_tech = "Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji 
                            Hii dawa inatumika kwanzia tarehe ". $med9_date." 
                            kila siku";        

        }
/* ---------------------------------------------------------Chotara data----------------------------------------------------------------*/
        elseif($product_type == 'Chotara'){
            // taarifa kuhus sk 1 - 14 (wiki 1 na 2)
            $age1 = strtotime("$product_arrival");
            $date_age1 = strtotime("+7 day", $age1);
            $returnDate_age1 = date("Y-m-d", $date_age1);

            $aged3 = date("Y-m-d", $age1);
            $food_gm1 = ($product_qnty * 22);
            $food1_kg = ($food_gm1 / 1000);
            $food_bags = ($food1_kg/50);    
            $water = (($product_qnty * 4)/ 100);
            $subject_1 = "Broiler Pre-Starter";
            $details_1 = " Chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi
                            tarehe ". $returnDate_age1." <br> Ili kuwatengenezea 
                            kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri 
                            wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum"; 
            $activity_1 = "  Kiwango na ulishaji wake ni ifuatavyo:-
                            <br> Wiki ya 1: Gramu ".$food_gm1. " Utakuwa Unawapa kwa siku 7, 
                            kwanzia tarehe ".$aged3." kwa kila siku moja. ";
                    
    
            // taarifa kuhus age wiki 3 - 8
            $age2 = strtotime("$returnDate_age1");
            $date_age2 = strtotime("+20 day", $age2);
            $returnDate_age2 = date("Y-m-d", $date_age2);

            $aged2 = date("Y-m-d", $age2);
            $food_gm2 = ($product_qnty * 27);
            $wik3 = strtotime("+8 day", $age2);
            $wik3_date = date("Y-m-d", $wik3); //   wiki 2

            $food2_kg = ($food_gm2 /1000);
            $food_bags_2 = ($food2_kg/50);
            $water_2 = (($product_qnty * 6)/ 100);
            $subject_2 = "Broiler Starter";
            $details_2 = "Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, 
            hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na 
            kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale 
            chakula gani bora, hawawezi kutoa mazao bora";
            $activity_2 ="Kiwango na ulishaji wake ni ifuatavyo:-
                <br> Wiki ya 3: Gramu ".$food_gm2. "  Utakuwa Unawapa kwa siku 7, 
                kwanzia tarehe ".$aged2." kwa kila siku moja. 
            " ;                        
    
    
            // Taarifa kuhus UMRI WA WIKI 9 – 18
            $age3 = strtotime("$returnDate_age2");
            $date_age3 = strtotime("+9 day", $age3);
            $returnDate_age3 = date("Y-m-d", $date_age3);

            $aged1 = strtotime("Y-m-d", $age3);
            $food_gm4 = ($product_qnty * 56);
            $wik4 = strtotime("+8 day", $age3);
            $wik4_date = date("Y-m-d", $wik4); //   wiki 3

            $food3_kg = ($food_gm4 /1000);
            $food_bags_3 = ($food3_kg/50);
            $water_3 = (($product_qnty * 20)/ 100);
            $subject_3 = "Broiler Grower";
            $details_3 = "Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.";
            $activity_3 = " Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-
                <br> Wiki ya 3: Gramu ".$food_gm4. "  Utakuwa Unawapa kwa siku 7, 
                kwanzia tarehe ".$aged1." kwa kila siku moja.";

             // Taarifa kuhus UMRI WA WIKI 9 – 18
             $age4 = strtotime("$returnDate_age3");
             $date_age4 = strtotime("+15 day", $age4);
             $returnDate_age4 = date("Y-m-d", $date_age4);
 
             $aged = strtotime("Y-m-d", $age1);
             $food_gm5 = ($product_qnty * 56);
             $wik4 = strtotime("+27 day", $age3);
             $wik4_date = date("Y-m-d", $wik4); //   wiki 3
 
             $food4_kg = ($food_gm5 /1000);
             $food_bags_4 = ($food3_kg/50);
             $water_4 = (($product_qnty * 20)/ 100);
             $subject_4 = "Broiler Finisher";
             $details_4 = "Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.";
             $activity_4 = " Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-
                 <br> Wiki ya 3: Gramu ".$food_gm5. "  Utakuwa Unawapa kwa siku 7, 
                 kwanzia tarehe ".$aged." kwa kila siku moja hadi tarehe ".$wik4_date ;

/*--------------------------------------------------- chotara medical information -----------------------------------------------------------------*/
                $med1_sys = strtotime("+7 day", $age1);
                $med1_date = strtotime("Y-m-d", $med1_sys);   // siku 2 - 6     
                $med1_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med1_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga ugonjwa wa Mdondo";
                $med1_gonjwa = "Chanjo ya Newcastle";
                $med1_tech = "Hatua zifuatavyo namna ya kuaandaa Dawa:-
                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu 
                                    kwanzia siku ya pili baada ya ingia hadi tarehe ".$med1_date."
                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo";         
                
                $med2_sys = strtotime("+7 day", $med1_date);
                $med2_date = strtotime("Y-m-d", $med2_sys);   // wiki 1   
                $med3_time = date("Y-m-d", strtotime("+7 day", $med1_date));
                $med3_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";
                $med2_gonjwa = "Chanjo ya Gumboro masaa 2 tu";
                $med2_tech = "Hatua zifuatavyo namna ya kuaandaa Dawa:-
                            <br> i) Hatua ya kwanza weka chanjo ya gumboro kwenye maji  masaa 2 tu. 
                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo";
                
                $med3_sys = strtotime("+2 day", $med2_date);
                $med3_date = strtotime("Y-m-d", $med3_sys);   // sk 16
                $med4_sys = strtotime("+4 day", $med3_date);
                $med4_date = strtotime("Y-m-d", $med4_sys);   // sk 20
                $med4_time = date("Y-m-d", strtotime("+6 day", $med2_date));
                $med4_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";
                $med3_gonjwa = "Coccidiosis";
                $med3_tech = "Zifuatavyo aina ya Dawa:-
                            <br> Trisulmycine / Trimazine  au dawa yoyote vatamin ambayo inatachanganywa kwenye maji
                            <br> Hii dawa inatumika kwanzia tarehe ". $med3_date." hadi tarehe  ". $med4_date ;

                $med5_sys = strtotime("+1 day", $med4_date);                
                $med5_date = strtotime("Y-m-d", $med5_sys);   // wiki 21  
                $med5_time = date("Y-m-d", strtotime("+1 day", $med4_date));
                $med5_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";   
                $med4_gonjwa = "Gumboro";
                $med4_tech = "Hii newcastle vaccine (lasota) inachanganywa kwenye maji. 
                             Hii dawa inatumika kwanzia tarehe ". $med5_date;    
                
                $med6_sys = strtotime("+14 day", $med5_date);
                $med6_date = strtotime("Y-m-d", $med6_sys);   // wik6 8  
                $med7_sys = strtotime("+28 day", $med6_date);
                $med7_date = strtotime("Y-m-d", $med7_sys);   // wik6 8  
                $med6_time = date("Y-m-d", strtotime("+14 day", $med5_date));
                $med6_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";
                $med5_gonjwa = "Ndui fowl pox vaccine";
                $med5_tech = "Hii ndui fowl pox vaccine  ni Sindano ambayo wekwa kwenye maji. 
                            Hii dawa inatumika kwanzia tarehe ". $med6_date." kila siku mpaka tarehe ". $med7_date;
                
                $med8_sys = strtotime("+7 day", $med7_date);
                $med8_date = strtotime("Y-m-d", $med8_sys);   // wiki 1  
                $med7_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med7_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";
                $med6_gonjwa = "Minyoo pipperazine cirtratte";
                $med6_tech = "Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji 
                            Hii dawa inatumika kwanzia tarehe ". $med6_date." 
                            kila siku mpaka tarehe ". $med7_date;


                $med9_sys = strtotime("+91 day", $med8_date);
                $med9_date = strtotime("Y-m-d", $med9_sys);   // wiki 1 
                $med8_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med8_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";    
                $med7_gonjwa = "Chanjo ya Newcastle kwa masaa 2 tu";
                $med7_tech = "Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji 
                            Hii dawa inatumika kwanzia tarehe ". $med9_date." 
                            kila siku";         

        }
/* ---------------------------------------------------------Layering data----------------------------------------------------------------*/
             // Taarifa zaidi malisho      
            elseif ($product_type == 'Layering'){
                // taarifa kuhus sk 1 - 14 (wiki 1 na 2)
                $age1 = strtotime("$product_arrival");
                $date_age1 = strtotime("+14 day", $age1);
                $returnDate_age1 = date("Y-m-d", $date_age1);

                $aged3 = date("Y-m-d", $age1);
                $wik1 = strtotime("+8 day", $age1);
                
                $wik_date = date("Y-m-d", $wik1);
                $food_gm1 = ($product_qnty * 12);
                $food_gm2 = ($product_qnty * 22);
                $food1_kg = (($food_gm1 / 1000) + ($food_gm2 / 1000));
                $food_bags = ($food1_kg/50);    
                $water = (($product_qnty * 5)/ 100);
                $subject_1 = "Super Starter";
                $details_1 = " Super Starter chakula kwajili ya Vifaranga utaanza kuwapa siku ya kwanza walipo ingia hadi
                                tarehe ". $returnDate_age1." <br> Chakula hiki kwa ajili ya kuwatengenezea 
                                kinga mbadala ili waweze kuhimili mikiki mikiki ya vijidudu vya magonjwa kadri 
                                wanavyoendelea kukua, wanapewa chakula hicho kwa kiwango maalum"; 
                $activity_1 = "  Kiwango na ulishaji wake ni ifuatavyo:-
                                <br> Wiki ya 1: Gramu ".$food_gm1. " kwanzia tarehe ".$aged3." kwa kila siku moja. 
                                <br> Wiki ya 2: Gramu ".$food_gm2. " kwanzia tarehe ".$wik_date." kwa kila siku moja. ";
                        
        
                // taarifa kuhus age wiki 3 - 8
                $age2 = strtotime("$returnDate_age1");
                $date_age2 = strtotime("+42 day", $age2);
                $returnDate_age2 = date("Y-m-d", $date_age2);

                $med2_sys = strtotime("+7 day", $age);
                $med2_date = strtotime("Y-m-d", $med_sys);   // wiki 1

                $aged2 = date("Y-m-d", $age2);
                $food_gm3 = ($product_qnty * 27);
                $wik3 = strtotime("+8 day", $age2);
                $wik3_date = date("Y-m-d", $wik3); //   wiki 3

                $wik2_sys =  strtotime("$wik3_date");
                $food_gm4 = ($product_qnty * 32);
                $wik4 = strtotime("+8 day", $wik2_sys);
                $wik4_date = date("Y-m-d", $wik4); //   wiki 4

                $wik3_sys =  strtotime("$wik4_date");
                $food_gm5 = ($product_qnty * 38);
                $wik5 = strtotime("+8 day", $wik3_sys);
                $wik5_date = date("Y-m-d", $wik5); //   wiki 5

                $wik4_sys =  strtotime("$wik4_date");
                $food_gm6 = ($product_qnty * 42);
                $wik6 = strtotime("+8 day",  $wik4_sys);
                $wik6_date = date("Y-m-d", $wik6); //   wiki 6

                $wik5_sys =  strtotime("$wik5_date");
                $food_gm7 = ($product_qnty * 46);
                $wik7 = strtotime("+8 day", $wik5_sys);
                $wik7_date = date("Y-m-d", $wik7);  //   wiki 7

                $wik6_sys =  strtotime("$wik7_date");
                $food_gm8 = ($product_qnty * 50);
                $wik8 = strtotime("+8 day", $wik6_sys);
                $wik8_date = date("Y-m-d", $wik8); //   wiki 8

                $food2_kg = (($food_gm3 +$food_gm4+ $food_gm5+ $food_gm6+ $food_gm7+ $food_gm8) /1000);
                $food_bags_2 = ($food2_kg/50);
                $water_2 = (($product_qnty * 7)/ 100);
                $subject_2 = "Chick Starter";
                $details_2 = "Chakula hiki kwa ajili ya kuendelea kuwajenga miili yao waweze kupokea virutubisho vizuri, 
                hii inatokana na kwamba kuna baadhi ya viinilishe vinafanya kazi ya kumeng’enya chakula na 
                kupatikana viinilishe vingine, kwahiyo vikikosekana katika mwili wa kuku basi hata wale 
                chakula gani bora, hawawezi kutoa mazao bora, lakini kwa kuwapa “Chick Starter” itawapelekea
                kuwa na virutubisho hivyo muhimu.";
                $activity_2 ="Kiwango na ulishaji wake ni ifuatavyo:-
                    <br> Wiki ya 3: Gramu ".$food_gm3. " kwanzia tarehe ".$aged2." kwa kila siku moja. 
                    <br> Wiki ya 4: Gramu ".$food_gm4." kwanzia tarehe ".$wik4_date." kwa kila siku moja. 
                    <br> Wiki ya 5: Gramu ".$food_gm5." kwanzia tarehe ".$wik5_date." kwa kila siku moja. 
                    <br> Wiki ya 6: Gramu ".$food_gm6." kwanzia tarehe ".$wik6_date." kwa kila siku moja. 
                    <br> Wiki ya 7: Gramu ".$food_gm7." kwanzia tarehe ".$wik7_date." kwa kila siku moja. 
                    <br> Wiki ya 8: Gramu ".$food_gm8." kwanzia tarehe ".$wik8_date." kwa kila siku moja. 
                " ;   
                
        
                // Taarifa kuhus UMRI WA WIKI 9 – 18
                $age3 = strtotime("$returnDate_age2");
                $date_age3 = strtotime("+8 day", $age3);
                $returnDate_age3 = date("Y-m-d", $date_age3);

                $aged1 = strtotime("Y-m-d", $age3);
                $food_gm9 = ($product_qnty * 56);
                $wik9 = strtotime("+8 day", $age3);
                $wik9_date = date("Y-m-d", $wik9); //   wiki 9

                $wik7_sys =  strtotime("$wik9_date");
                $food_gm10 = ($product_qnty * 62);
                $wik10 = strtotime("+8 day", $wik7_sys);
                $wik10_date = date("Y-m-d", $wik10); //   wiki 10

                $wik8_sys =  strtotime("$wik10_date");
                $food_gm11 = ($product_qnty * 64);
                $wik11 = strtotime("+8 day", $wik8_sys);
                $wik11_date = date("Y-m-d", $wik11); //   wiki 11

                $wik9_sys =  strtotime("$wik11_date");
                $food_gm12 = ($product_qnty * 66);
                $wik12 = strtotime("+8 day", $wik9_sys);
                $wik12_date = date("Y-m-d", $wik12); //   wiki 12

                $wik10_sys =  strtotime("$wik12_date");
                $food_gm13 = ($product_qnty * 68);
                $wik13 = strtotime("+8 day", $wik10_sys);
                $wik13_date = date("Y-m-d", $wik13);  //   wiki 13

                $wik11_sys =  strtotime("$wik13_date");
                $food_gm14 = ($product_qnty * 74);
                $wik14 = strtotime("+8 day", $wik11_sys);
                $wik14_date = date("Y-m-d", $wik14); //   wiki 14
                
                $wik12_sys =  strtotime("$wik14_date");
                $food_gm15 = ($product_qnty * 74);
                $wik15 = strtotime("+8 day", $wik12_sys);
                $wik15_date = date("Y-m-d", $wik15); //   wiki 15

                $wik13_sys =  strtotime("$wik15_date");
                $food_gm16 = ($product_qnty * 80);
                $wik16 = strtotime("+8 day", $wik13_sys);
                $wik16_date = date("Y-m-d", $wik16); //   wiki 16

                $wik14_sys =  strtotime("$wik16_date");
                $food_gm17 = ($product_qnty * 82);
                $wik17 = strtotime("+8 day", $wik14_sys);
                $wik17_date = date("Y-m-d", $wik17); //   wiki 17

                $wik15_sys =  strtotime("$wik17_date");
                $food_gm18 = ($product_qnty * 88);
                $wik18 = strtotime("+8 day", $wik15_sys);
                $wik18_date = date("Y-m-d", $wik18); //   wiki 18

                $food3_kg = (($food_gm9 + $food_gm10 + $food_gm11 + $food_gm12 + $food_gm13 + $food_gm14 + $food_gm15 + $food_gm16 + $food_gm17 + $food_gm18) /1000);
                $food_bags_3 = ($food3_kg/50);
                $water_3 = (($product_qnty * 20)/ 100);
                $subject_3 = "Grower Mash";
                $details_3 = "Chakula hiki kwa ajili ya kuwakuza na kuwajenga mfumo wa uzazi kwa maandalizi ya utagaji.";
                $activity_3 = " Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-
                    <br> Wiki ya 9: Gramu ".$food_gm9. " kwanzia tarehe ".$aged1." kwa kila siku moja. 
                    <br> Wiki ya 10: Gramu ".$food_gm10." kwanzia tarehe ".$wik10_date." kwa kila siku moja. 
                    <br> Wiki ya 11: Gramu ".$food_gm11." kwanzia tarehe ".$wik11_date." kwa kila siku moja. 
                    <br> Wiki ya 12: Gramu ".$food_gm12." kwanzia tarehe ".$wik12_date." kwa kila siku moja. 
                    <br> Wiki ya 13: Gramu ".$food_gm13." kwanzia tarehe ".$wik13_date." kwa kila siku moja. 
                    <br> Wiki ya 14: Gramu ".$food_gm14." kwanzia tarehe ".$wik14_date." kwa kila siku moja.
                    <br> Wiki ya 15: Gramu ".$food_gm15." kwanzia tarehe ".$wik15_date." kwa kila siku moja.
                    <br> Wiki ya 16: Gramu ".$food_gm16." kwanzia tarehe ".$wik16_date." kwa kila siku moja.
                    <br> Wiki ya 17: Gramu ".$food_gm17." kwanzia tarehe ".$wik17_date." kwa kila siku moja.
                    <br> Wiki ya 18: Gramu ".$food_gm18." kwanzia tarehe ".$wik18_date." kwa kila siku moja.
                ";
                            
        
                // taarifa kuhus UMRI WA WIKI 19 – 40
                $age4 = strtotime("$returnDate_age3"); 
                $date_age4 = strtotime("+31 day", $age4);
                $returnDate_age4 = date("Y-m-d", $date_age4);

                $aged = date("Y-m-d", $age4);
                $food_gm19 = ($product_qnty * 92);
                $wik19 = strtotime("+8 day", $age4);
                $wik9_date = date("Y-m-d", $wik9); //   wiki 19

                $wik16_sys =  strtotime("$wik9_date");
                $food_gm20 = ($product_qnty * 102);
                $wik20 = strtotime("+8 day", $wik16_sys);
                $wik20_date = date("Y-m-d", $wik20); //   wiki 20

                $wik17_sys =  strtotime("$wik20_date");
                $food_gm21 = ($product_qnty * 108);
                $wik21 = strtotime("+8 day", $wik17_sys);
                $wik21_date = date("Y-m-d", $wik21); //   wiki 21

                $wik18_sys =  strtotime("$wik21_date");
                $food_gm22 = ($product_qnty * 114);
                $wik22 = strtotime("+8 day", $wik18_sys);
                $wik22_date = date("Y-m-d", $wik22); //   wiki 22

                $wik19_sys =  strtotime("$wik22_date");
                $food_gm23 = ($product_qnty * 116);
                $wik23 = strtotime("+8 day", $wik19_sys);
                $wik23_date = date("Y-m-d", $wik23);  //   wiki 23

                $wik20_sys =  strtotime("$wik23_date");
                $food_gm24 = ($product_qnty * 120);
                $wik24 = strtotime("+8 day", $wik20_sys);
                $wik24_date = date("Y-m-d", $wik24); //   wiki 24

                $wik21_sys =  strtotime("$wik24_date");
                $food_gm25 = ($product_qnty * 130);
                $wik25 = strtotime("+8 day", $wik21_sys);
                $wik25_date = date("Y-m-d", $wik25); //   wiki 25 - 40

                $food4_kg = (($food_gm19 + $food_gm20 + $food_gm21 + $food_gm22 + $food_gm23 + $food_gm24 + $food_gm25) /1000);
                $food_bags_4 = ($food4_kg/50);
                $water_4 = (($product_qnty * 8)/ 100);
                $subject_4 = "“Layers Phase 1";
                $details_4 = "Huu ni umri ambao kuku wanataga kwa kiwango kikubwa sana (85% hadi 100%) 
                hali ambayo inawafanya kutumia nguvu nyingi mno, hivyo hupewa chakula hiki kwa ajili ya 
                kufidia nguvu ya ziada wanayotumia ili waendelee kutaga kwa kiwango hichohicho.";
                
                $activity_4 = "Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-
                    <br> Wiki ya 19: Gramu ".$food_gm19. " kwanzia tarehe ".$aged." kwa kila siku moja. 
                    <br> Wiki ya 20: Gramu ".$food_gm20." kwanzia tarehe ".$wik20_date." kwa kila siku moja. 
                    <br> Wiki ya 21: Gramu ".$food_gm21." kwanzia tarehe ".$wik21_date." kwa kila siku moja. 
                    <br> Wiki ya 22: Gramu ".$food_gm22." kwanzia tarehe ".$wik22_date." kwa kila siku moja. 
                    <br> Wiki ya 23: Gramu ".$food_gm23." kwanzia tarehe ".$wik23_date." kwa kila siku moja. 
                    <br> Wiki ya 24: Gramu ".$food_gm24." kwanzia tarehe ".$wik24_date." kwa kila siku moja.
                    <br> Wiki ya 25 mpaka wiki mwisho: Gramu ".$food_gm25." kwanzia tarehe ".$wik25_date." kwa kila siku moja.
                ";

                // taarifa kuhus UMRI WA WIKI 41 – 80
                $age5 = strtotime("$returnDate_age4"); 
                $date_age5 = strtotime("+7 day", $age5);
                $returnDate_age5 = date("Y-m-d", $date_age5);

                $food_gm41 = ($product_qnty * 130);
                $wik41 = strtotime("+7 day", $age5);
                $wik41_date = date("Y-m-d", $wik41); //   wiki 41 - 80

                $food5_kg = (($food_gm41 * 7) /1000);
                $food_bags_5 = ($food5_kg / 50);
                $water_5 = (($product_qnty * 7)/ 100);
                $subject_5 = "Layers Phase 2";
                $details_5 = "Katika umri huu kuku wanakuwa wameanza kuchoka na huanza kutaga kwa kiwango
                 cha kawaida (65% hadi 75%) hivyo chakula hiki kwa ajili kuendeleza (maintain) kiwango chao hicho kwa muda mrefu. 
                 <br>Kiwango chao ni 'Gram 130 kwa kuku mmoja kwa siku moja'";

                 $activity_5 = "Kiwango cha chakula kinategemea na wiki kama ifuatavyo:-
                    <br> Wiki ya 41 nakuendelea : Gramu ".$food_gm41." kwanzia tarehe ".$wik41_date." kwa kila siku moja.
                ";
/* -----------------------------------------------------Layering medical information--------------------------------------------------------*/

                $med1_sys = strtotime("+7 day", $age1);
                $med1_date = strtotime("Y-m-d", $med1_sys); 
                $med1_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med1_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";   // siku 2 - 6     
                $med1_gonjwa = "Chanjo ya Newcastle";
                $med1_tech = "Hatua zifuatavyo namna ya kuaandaa Dawa:-
                            <br> i) Hatua ya kwanza weka chanjo ya newcastle kwenye maji  kwa masaa 2 tu 
                                    kwanzia siku ya pili baada ya ingia hadi tarehe ".$med1_date."
                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo"; 

                
                $med2_sys = strtotime("+7 day", $med1_date);
                $med2_date = strtotime("Y-m-d", $med2_sys);   // wiki 1   
                $med2_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med2_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";
                $med2_gonjwa = "Chanjo ya Gumboro masaa 2 tu";
                $med2_tech = "Hatua zifuatavyo namna ya kuaandaa Dawa:-
                            <br> i) Hatua ya kwanza weka chanjo ya gumboro kwenye maji  masaa 2 tu. 
                            <br> ii) Hatua ya pili weka maji na viatmin mara baada ya kutoa maji ya chanjo";
                
                $med3_sys = strtotime("+2 day", $med2_date);
                $med3_date = strtotime("Y-m-d", $med3_sys);   // sk 16
                $med4_sys = strtotime("+4 day", $med3_date);
                $med4_date = strtotime("Y-m-d", $med4_sys);   // sk 20
                $med3_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med3_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";
                $med3_gonjwa = "Coccidiosis";
                $med3_tech = "Zifuatavyo aina ya Dawa:-
                            <br> Trisulmycine / Trimazine  au dawa yoyote vatamin ambayo inatachanganywa kwenye maji
                            <br> Hii dawa inatumika kwanzia tarehe ". $med3_date." hadi tarehe  ". $med4_date ;

                $med5_sys = strtotime("+1 day", $med4_date);                
                $med5_date = strtotime("Y-m-d", $med5_sys);   // wiki 21 
                $med4_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med4_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";    
                $med4_gonjwa = "Gumboro";
                $med4_tech = "Hii newcastle vaccine (lasota) inachanganywa kwenye maji. 
                             Hii dawa inatumika kwanzia tarehe ". $med5_date;    
                
                $med6_sys = strtotime("+14 day", $med5_date);
                $med6_date = strtotime("Y-m-d", $med6_sys);   // wik6 8  
                $med7_sys = strtotime("+28 day", $med6_date);
                $med7_date = strtotime("Y-m-d", $med7_sys);   // wik6 8 
                $med5_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med5_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga"; 
                $med5_gonjwa = "Ndui fowl pox vaccine";
                $med5_tech = "Hii ndui fowl pox vaccine  ni Sindano ambayo wekwa kwenye maji. 
                            Hii dawa inatumika kwanzia tarehe ". $med6_date." kila siku mpaka tarehe ". $med7_date;
                
                $med8_sys = strtotime("+7 day", $med7_date);
                $med8_date = strtotime("Y-m-d", $med8_sys);   // wiki 1
                $med6_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med6_purpose = "Hii dawa inasaidia kuongeza nguvu kwa vifaranga.";  
                $med6_gonjwa = "Minyoo pipperazine cirtratte";
                $med6_tech = "Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji 
                            Hii dawa inatumika kwanzia tarehe ". $med6_date." 
                            kila siku mpaka tarehe ". $med7_date;


                $med9_sys = strtotime("+91 day", $med8_date);
                $med9_date = strtotime("Y-m-d", $med_sys);   // wiki 1   
                $med1_time = date("Y-m-d", strtotime("+7 day", $age1));
                $med8_purpose = "Hii chanjo inasaidia kuongeza kinga kwa vifaranga ili kujikinga";  
                $med8_gonjwa = "Chanjo ya Newcastle ";
                $med7_tech = "Hii Pipperazine cirtratte au dawa yoyote ya vitamin maji 
                            Hii dawa inatumika kwanzia tarehe ". $med9_date." 
                            kila siku";                  
    
        }
/* --------------------------------------------------import captured data into database----------------------------------------------------------------*/
                       //database connection
            $age_sql .= "INSERT INTO  med_activity (product_type, user_id, med_purpose, med_time, med_status, med_treat)  
                       VALUES ('$product_type','$user_id','$med1_purpose','$med1_time','$med1_gonjwa','$med1_tech');";
        
            $age_sql .= "INSERT INTO  med_activity (product_type,user_id, med_purpose, med_time, med_status, med_treat)  
                       VALUES ('$product_type','$user_id','$med2_purpose','$med2_time','$med2_gonjwa','$med2_tech');";

            $age_sql .= "INSERT INTO  med_activity (product_type, user_id, med_purpose, med_time, med_status, med_treat)  
                        VALUES ('$product_type','$user_id','$med3_purpose','$med3_time','$med3_gonjwa','$med3_tech');";

            $age_sql .= "INSERT INTO  med_activity (product_type, user_id, med_purpose, med_time, med_status, med_treat)  
                       VALUES ('$product_type','$user_id','$med4_purpose','$med4_time','$med4_gonjwa','$med4_tech');";
        
            $age_sql .= "INSERT INTO  med_activity (product_type, user_id, med_purpose, med_time, med_status, med_treat)  
                       VALUES ('$product_type','$user_id','$med5_purpose','$med5_time','$med5_gonjwa','$med5_tech');";

            $age_sql .= "INSERT INTO  med_activity (product_type, user_id, med_purpose, med_time, med_status, med_treat)   
                        VALUES ('$product_type','$user_id','$med6_purpose','$med6_time','$med6_gonjwa','$med6_tech');";

            $age_sql .= "INSERT INTO  med_activity (product_type, user_id, med_purpose, med_time, med_status, med_treat)   
                       VALUES ('$product_type','$user_id','$med7_purpose','$med7_time','$med7_gonjwa','$med7_tech');";

/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
            $age_sql .= "INSERT INTO  my_activity (food_subject, food_details, product_type, product_qnty, data_actvty, schedule_activity, user_id, water_activity, food_qnty,food_bags)
                       VALUES ('$subject_1','$details_1','$product_type','$product_qnty','$activity_1','$returnDate_age1','$user_id','$water','$food1_kg','$food_bags');";

            $age_sql .= "INSERT INTO  my_activity (food_subject, food_details,product_type, product_qnty, data_actvty, schedule_activity, user_id, water_activity, food_qnty, food_bags)
                       VALUES ('$subject_2','$details_2','$product_type','$product_qnty', '$activity_2','$returnDate_age2','$user_id','$water_2','$food2_kg','$food_bags_2');";

            $age_sql .= "INSERT INTO  my_activity (food_subject, food_details,product_type, product_qnty, data_actvty, schedule_activity, user_id, water_activity, food_qnty, food_bags)
                      VALUES ('$subject_3','$details_3','$product_type','$product_qnty', '$activity_3','$returnDate_age3','$user_id','$water_3','$food3_kg','$food_bags_3');";

            $age_sql .= "INSERT INTO  my_activity (food_subject, food_details,product_type, product_qnty,  data_actvty, schedule_activity, user_id, water_activity, food_qnty, food_bags)
                      VALUES ('$subject_4','$details_4','$product_type','$product_qnty', '$activity_4','$returnDate_age4','$user_id','$water_4','$food4_kg','$food_bags_4');";
    
            $age_sql .= "INSERT INTO product_info (user_id,tarh_arrival,product_qnty,product_type,tarh_depart)
                      VALUES ('$user_id', '$product_arrival', '$product_qnty','$product_type','$returnDate');";

            $age_sql .="UPDATE users SET status = '$product_status' WHERE user_id = '$user_id'";


            $age_query = mysqli_multi_query($con, $age_sql);

                if($age_query){        
                    echo"<script> alert('Hongera, taarifa imefanikiwa Kutumwa')</script>";
                    header('location:home.php');
                }
        }
?>