<?php
namespace qdown\modules;

use php\compress\ZipFile;
use std, gui, framework, qdown; 
use action\Element; 
use php\io\Stream; 
use php\gui\UXDialog; 


class MainModule extends AbstractModule
{

    /**
     * @event Forge.action 
     */
    function doForgeAction(ScriptEvent $e = null)
    {    
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $this->showPreloader('Загружаем...');
        Element::loadContentAsync($this->file, 'Link', function () use ($e, $event) {
            $this->hidePreloader();
            $this->showPreloader('Распаковываем...');
            $zipFile = new ZipFile('QDTemp.zip');
            $zipFile->unpack($this->pathEdit->text);
            unlink('QDTemp.zip');
            $this->hidePreloader();
            UXDialog::show('Готово!');    
        });

    }

    /**
     * @event ForgeOF.action 
     */
    function doForgeOFAction(ScriptEvent $e = null)
    {    
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $this->showPreloader('Загружаем...');
        Element::loadContentAsync($this->file, 'Link', function () use ($e, $event) {
            $this->hidePreloader();
            $this->showPreloader('Распаковываем...');
            $zipFile = new ZipFile('QDTemp.zip');
            $zipFile->unpack($this->pathEdit->text);
            unlink('QDTemp.zip');
            $this->hidePreloader();
            UXDialog::show('Готово!');    
        });
    }

    /**
     * @event Fabric.action 
     */
    function doFabricAction(ScriptEvent $e = null)
    {    
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $this->showPreloader('Загружаем...');
        Element::loadContentAsync($this->file, 'Link', function () use ($e, $event) {
            $this->hidePreloader();
            $this->showPreloader('Распаковываем...');
            $zipFile = new ZipFile('QDTemp.zip');
            $zipFile->unpack($this->pathEdit->text);
            unlink('QDTemp.zip');
            $this->hidePreloader();
            UXDialog::show('Готово!');    
        });
    }

    /**
     * @event FabricOF.action 
     */
    function doFabricOFAction(ScriptEvent $e = null)
    {    
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $this->showPreloader('Загружаем...');
        Element::loadContentAsync($this->file, 'Link', function () use ($e, $event) {
            $this->hidePreloader();
            $this->showPreloader('Распаковываем...');
            $zipFile = new ZipFile('QDTemp.zip');
            $zipFile->unpack($this->pathEdit->text);
            unlink('QDTemp.zip');
            $this->hidePreloader();
            UXDialog::show('Готово!');    
        });
    }

}
