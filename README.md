# _word_frequency_

#### _An application that tells how frequently a word is used in an inputted phrase, Wednesday, 23 2016_

#### By _**Tim Bourgault**_

## Description

_The app that takes a phrase and a word then outputs the number of times the word appears in the phrase_

| Behavior |      Input    | Output|
|----------|:-------------:|:-----:|
| When the phrase entered is a single word and the keyword entered matches it, the app returns the number 1. | Phrase Input: "tiny", Keyword Input: "tiny" | "1" |
| When the phrase entered consists of multiple words, and within that phrase there are words that match the keyword entered, the app returns the number of instances that the keyword appears in the phrase, but only if the keyword matches exactly | Phrase Input: "There is a tiny person named Tiny who lives with tiny people that make tiny sand castles in Tiny Town", Keyword Input: "tiny"| "3" |
| Again the app counts all exact keyword matches as well as any capitalized versions of the keyword within the phrase | Phrase Input: "There is a tiny person named Tiny who lives with tiny people that make tiny sand castles in Tiny Town", Keyword Input: "tiny" | "5" |


## Setup/Installation Requirements

* _Clone the program from it's github repository_
* _Navigate to the project directory in a command line software_
* _Type: "cd web" to move into the "web" folder_
* _Type: "php -S localhost:8000" to create a local server for the project_
* _Open the browser of your choice and type in this URL to load the project: "localhost:8000:_
* _You can also view the page online at the URL: timothy-bourgault.github.io/word_frequency


## Known Bugs

_There are no known bugs_

## Support and contact details

_If any issues arise, please send notification to tim.bourgault@gmail.com. Thanks!_

## Technologies Used

_Written using PHP, Silex, PHPUnit testing, Twig, and Bootstrap_

### License

*This product can be used in accordance with the provisions under its MIT license.*

Copyright (c) 2016 **_Tim Bourgault_**
