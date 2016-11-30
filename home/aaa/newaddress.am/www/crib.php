<?php

/////////////////////////////////////////////////////////////////////////    Array    /////////////////////////////////////////////////////////////////////////////////////////

//in_array(12,$array)                                   //najuma ka 12 tiv@ $array-i mej...TRUE or FALSE
//$array_3 = array_marge($array_1,$array_2)             //2 masivner@ miacnuma irar u avelacnuma 3rd-i mej
//array_slice($array,1,2)                               //jnjelu procedurana

/////////////////////////////////////////////////////////////////////////    File    /////////////////////////////////////////////////////////////////////////////////////////

//file_put_contents(a.txt,"inch vor mi ban")            //file sarqelu ev mech inch vor mi ban avelacnelu hamar
//file_get_contents(a.txt)                              //file enw kardum
//file-exists(a.txt)                                    //stuguma ka ajdpisi file te ch.....TRUE or FALSE
//filesize(a.txt)                                       //hashvuma qani simvol ka
//unlink(a.txt)                                         //deleta anum file@

/////////////////////////////////////////////////////////////////////////    SERVER    /////////////////////////////////////////////////////////////////////////////////////////

//echo $_SERVER["REMOTE_ADDR"]                          //polzvateli ip adrressna talis

/////////////////////////////////////////////////////////////////////////    Others    /////////////////////////////////////////////////////////////////////////////////////////

//$smth=rand(1,10);                                              // 1-10 tiva vercnum patahakan
//$d= (int) ( $a / $b );                                         //amboxj mas
//$d = $a % $b                                                   //mnacord
//echo "Дата\tИмя\tПлатеж";                                      // = Дата Имя Платеж
//echo strlen('1234567');                                        // = tveri qanakna hashvum
//echo strspn("1234 is the answer,", "0123456789");              // = hashvuma tveri qanak@
//echo str_repeat("Hip",2);                                      // = HipHip
//echo strrev("dlrow olleH");                                    // = Hello world
//echo strstr('MartinElizbaryan@gmail.com', '@');                // = @gmail.com
//echo strtoupper("hooray!")                                     // = HOORAY
//echo substr("abcdef", 1);                                      // = "bcdef"
//echo substr("abcdef", 1, 3);                                   // = "bcd"
//echo substr("abcdef", -2);                                     // = "ef"
//echo substr("abcdef", -3, 1);                                  // = "d"
//echo substr("abcdef", 0, -1);                                  // = "abcde"
//echo substr("abcdef", 2, -1);                                  // = "cde"
//echo substr("abcdef", 4, -4);                                  // = ""
//echo substr("abcdef", -4, -2);                                 // = "cd"
//echo substr_replace('exo', 'bob', 0) . "<br />\n";             // = exo poxuma bob
//echo substr_replace('exo', 'bob', 0, 0) . "<br />\n";          // = exo-i dem@ gruma bob
//echo substr_replace('1234567890', '', 5, -1) . "<br />\n";     // = 5rd hamaric jnjuma minchev naxaverjin hamar
//echo substr_replace('1234567890', '', 5, 0) . "<br />\n";      // = 5rd hamaric jnjuma minchev verj
//echo ucfirst('hello world');                                   // = Hello world
//echo ucfirst(strtolower('HELLO WORLD'));                       // = Hello world!