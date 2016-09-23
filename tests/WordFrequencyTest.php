<?php
    require_once "src/WordFrequency.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_wordFrequency_oneWordMatch()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phraseInput = "tiny";
            $keywordInput = "tiny";

            // Act
            $result = $test_RepeatCounter->countRepeats($phraseInput, $keywordInput);

            // Assert
            $this->assertEquals(1, $result);
        }

    }

        // protected function tearDown()
        // {
        //     WordFrequency::deleteAll();
        //     Matches::deleteAll();
        // }



?>
