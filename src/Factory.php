<?php
namespace YuliusArdian\Validation;

use Illuminate\Validation;
use Illuminate\Translation;
use Illuminate\Filesystem\Filesystem;

class Factory
{
	private $factory;
	
	public function __construct($lang = 'en')
	{
		$this->factory = new Validation\Factory($this->loadTranslator($lang));
	}
	
    protected function loadTranslator($lang)
    {
        $filesystem = new Filesystem();		
        $loader = new Translation\FileLoader($filesystem, dirname(dirname(__FILE__)) . '/src/lang');	
		$loader->addNamespace('lang', dirname(dirname(__FILE__)) . '/lang');
        $loader->load($lang, 'validation', 'lang');
        return new Translation\Translator($loader, $lang);
    }
	
    public function __call($method, $args)
    {
        return call_user_func_array([$this->factory, $method], $args);
    }	
}