<?php
    require_once "src/WordFrequency.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_wordFrequency_noMatches()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phraseInput = "tony";
            $keywordInput = "tiny";

            // Act
            $result = $test_RepeatCounter->countRepeats($phraseInput, $keywordInput);

            // Assert
            $this->assertEquals(0, $result);
        }

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

        function test_wordFrequency_multiWordMatch()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phraseInput = "tiny tiny";
            $keywordInput = "tiny";

            // Act
            $result = $test_RepeatCounter->countRepeats($phraseInput, $keywordInput);

            // Assert
            $this->assertEquals(2, $result);
        }

        function test_wordFrequency_multiWordMatchWithCaps()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phraseInput = "There is a tiny person named Tiny who lives with tiny people that make tiny sand castles in Tiny Town";
            $keywordInput = "tiny";

            // Act
            $result = $test_RepeatCounter->countRepeats($phraseInput, $keywordInput);

            // Assert
            $this->assertEquals(5, $result);
        }
    }
?>
