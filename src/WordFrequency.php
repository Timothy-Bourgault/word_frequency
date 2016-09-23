<?php

    class RepeatCounter
    {

        function CountRepeats($phraseInput, $keywordInput)
        {
            $repeatCounter = 0;
            $phraseInputArray = explode(" ", $phraseInput);
            foreach ($phraseInputArray as $word) {
                $word = str_replace("\"", "", $word);
                if ($keywordInput == $word) {
                    $repeatCounter++;
                }
            }
            return $repeatCounter;
        }
    }
 ?>
