<?php

    class RepeatCounter
    {

        function CountRepeats($phraseInput, $keywordInput)
        {
            $repeatCounter = 0;
            $keywordInput == strtolower($keywordInput);
            $phraseInputArray = explode(" ", $phraseInput);
            foreach ($phraseInputArray as $word) {
                $word = str_replace("\"", "", $word);
                if ($keywordInput == $word ||
                $keywordInput == strtolower($word)) {
                    $repeatCounter++;
                }
            }
            return $repeatCounter;
        }
    }
 ?>
