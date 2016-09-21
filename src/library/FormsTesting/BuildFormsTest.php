<?php
namespace src\library\FormsTesting;
use src\library\Build\BuildInterface;
use Memio\Memio\Config\Build;
use Memio\Model\File;
use Memio\Model\Object;
use Memio\Model\Property;
use Memio\Model\Method;
use Memio\Model\Argument;
use Memio\Model\Contract;
use Memio\Model\Constant;
use Memio\Model\FullyQualifiedName;
use src\library\FormsTesting\Components\FillFormAndSubmit;
use src\library\FormsTesting\Components\SetUp;
use src\library\FormsTesting\Components\TearDown;
use src\library\FormsTesting\Components\TestValidFormSubmission;


require_once "./vendor/simple-html-dom/simple-html-dom/simple_html_dom.php";


/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 12.09.2016
 * Time: 15:26
 */
class BuildFormsTest implements BuildInterface
{
    public $urls;

    public $host;

    public $dictionary = array();

    public function __construct($urls, $host, $dictionary) {
        $this->urls = $urls;
        $this->host = $host;
        $this->dictionary = $dictionary;
    }

    public function create()
    {

        // TODO: Implement create() method.
        for($i=0; $i<count($this->urls); $i++) {


            $html = new \simple_html_dom();
            $html->load_file($this->urls[$i]);

            foreach($html->find('form') as $form) {

                $data = array();

                if($form->action != '') {

                    $encode = md5($form->action);

                    if(!file_exists('./built_tests/Form_'.$encode.'Test.php')) {
                        $file = File::make('src/Vendor/Project/MyService.php');

                        $file->addFullyQualifiedName(new FullyQualifiedName('Goutte\Client'));
                        $file->addFullyQualifiedName(new FullyQualifiedName('Facebook\WebDriver\JavaScriptExecutor'));
                        $file->addFullyQualifiedName(new FullyQualifiedName('Facebook\WebDriver\Remote\DesiredCapabilities'));
                        $file->addFullyQualifiedName(new FullyQualifiedName('Facebook\WebDriver\Remote\RemoteWebDriver'));
                        $file->addFullyQualifiedName(new FullyQualifiedName('Facebook\WebDriver\Support\Events\EventFiringWebDriver'));
                        $file->addFullyQualifiedName(new FullyQualifiedName('Facebook\WebDriver\WebDriverBy'));
                        $file->addFullyQualifiedName(new FullyQualifiedName('PHPUnit_Framework_TestCase'));



                        $class = Object::make('built_tests\Form_'.$encode.'Test');
                        $class->extend(new Object('\PHPUnit_Framework_TestCase'));



                        // set error level
                        $internalErrors = libxml_use_internal_errors(true);

                        $document = new \DOMDocument();
                        $document->loadHTML($form->innertext);

                        // Restore error level
                        libxml_use_internal_errors($internalErrors);

                        $inputs = $document->getElementsByTagName("input");

                        $data['inputs'] = array();
                        $data['button'] = '';
                        foreach ($inputs as $input) {
                            foreach($this->dictionary as $key => $value) {
                                similar_text($input->getAttribute("name"), $key, $percent);
                                if($percent > 70) {
                                    $data['inputs'][$input->getAttribute("name")] = $value;
                                } elseif (strpos(strtolower($input->getAttribute("name")), strtolower($key))) {
                                    $data['inputs'][$input->getAttribute("name")] = $value;
                                }
                            }
                        }


                        $nodes = $document->getElementsByTagName("button");
                        foreach ($nodes as $node) {
                            $data['button'] =  $node->nodeValue;
                        }

                        $data['action'] =  $form->action;
                        $data['page_url'] = $this->urls[$i];


                        $setUp = SetUp::create();
                        $tearDown = TearDown::create();
                        $fillFormAndSubmit = FillFormAndSubmit::create($data);
                        $testValidFormSubmission = TestValidFormSubmission::create();

                        $class->addProperty(
                            new Property('webDriver')
                        );

                        $class->addMethod(
                            Method::make('setUp')
                                ->setBody(
                                    $setUp
                                )
                        );

                        $class->addMethod(
                            Method::make('tearDown')
                                ->setBody(
                                    $tearDown
                                )
                        );

                        $class->addMethod(
                            Method::make('fillFormAndSubmit')
                                ->setBody(
                                    $fillFormAndSubmit
                                )
                        );

                        $class->addMethod(
                            Method::make('testValidFormSubmission')
                                ->setBody(
                                    $testValidFormSubmission
                                )
                        );



                        $file->setStructure($class);

                        // Generate the code and display in the console
                        $prettyPrinter = Build::prettyPrinter();
                        $generatedCode = $prettyPrinter->generateCode($file);

                        file_put_contents('./built_tests/Form_'.$encode.'Test.php', $generatedCode);
                    }
                }
            }
        }
    }
}