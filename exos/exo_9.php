<?php
$phrase = 'Bonjour tout le monde';
$vowels = ['a', 'e', 'i', 'o', 'u', 'y'];

$lowPhrase = strtolower($phrase);

$nbVowel = 0;

for ($i = 0; $i < strlen($lowPhrase); $i++)
{
    foreach ($vowels as $vowel)
    {
        if ($vowel == $lowPhrase[$i])
        {
            $nbVowel++;
        }
    }
}
echo $nbVowel;
?>