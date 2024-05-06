<?php
$link_array[] = array();
$description_array[] = array();

//Adding websites
$link_array[0] = "http://www.bbc.com/";
$link_array[1] = "http://www.etsy.com/";
$link_array[2] = "http://www.khanacademy.org/";
$link_array[3] = "http://www.imgur.com/";
$link_array[4] = "http://www.reddit.com/";
$link_array[5] = "http://www.medium.com/";
$link_array[6] = "http://www.twitch.tv/";
$link_array[7] = "http://www.spotify.com/";
$link_array[8] = "http://www.github.com/";
$link_array[9] = "http://www.canva.com/";

//Adding descriptions
$description_array[0] = "Międzynarodowe wiadomości i rozrywka.";
$description_array[1] = "Rękodzieło i przedmioty vintage.";
$description_array[2] = "Darmowe zasoby edukacyjne.";
$description_array[3] = "Udostępnianie i hosting obrazów.";
$description_array[4] = "Agregacja wiadomości społecznościowych i dyskusje.";
$description_array[5] = "Platforma do publikowania artykułów.";
$description_array[6] = "Platforma do streamingu na żywo dla graczy.";
$description_array[7] = "Strumieniowanie muzyki i podcastów.";
$description_array[8] = "Hosting dla rozwoju oprogramowania.";
$description_array[9] = "Narzędzia i szablony do projektowania graficznego.";

$token = fopen("./lista.txt", "w+");
for ($i = 0; $i < 9; $i++) {
    fwrite($token, $link_array[$i].";".$description_array[$i]."\n");
}
fwrite($token, $link_array[$i].";".$description_array[$i]);
fclose($token);
        

