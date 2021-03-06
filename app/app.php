<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordFrequency.php";

    // add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    // Initialize application
    $app = new Silex\Application();

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('word_frequency.html.twig');
    });

    $app->post('/results_page', function() use ($app) {
        $phraseInput = $_POST['phraseInput'];
        $keywordInput = $_POST['keywordInput'];
        $repeatCounter = new RepeatCounter;
        $wordFrequency = $repeatCounter->countRepeats($phraseInput, $keywordInput);
        return $app['twig']->render('results_page.html.twig', array('wordFrequency' => $wordFrequency, 'phraseInput' => $phraseInput, 'keywordInput' => $keywordInput));
    });

    return $app;
 ?>
