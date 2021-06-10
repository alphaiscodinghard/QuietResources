<?php
namespace qdown\forms;  //сам ты даун

use php\compress\ZipFile;
use std, gui, framework, qdown;
use action\Element; 
use php\io\Stream; 
use php\gui\UXDialog; 


class MainForm extends AbstractForm
{


    /**
     * @event install.click-Left 
     */
    function doInstallClickLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        
        if ($this->pathEdit->text == '') //всем привет с вами яндередев и я покажу вам как красиво кодить и чтобы не лагало B)
            $this->toast('Укажите папку');
        
        elseif ($this->modLoader->selectedIndex == -1)
            $this->toast('Выберите загрузчик');
        
        elseif ($this->modLoader->selectedIndex == 0)
        {
        
            if ($this->optifine->selected == true)
                $this->Forge->call();
        
            else
                $this->ForgeOF->call();
        }
        elseif ($this->modLoader->selectedIndex == 1)
        {
        
            if ($this->optifine->selected == true)
                $this->Fabric->call();
        
            elseif (uiConfirm('OptiFabric не совместим с большинством модов на Fabric, и так же может вызвать вечные краши игры. Вы осознаёте риск и хотите продолжить?')) // нет ну совсем для дебилов расписал
                $this->FabricOF->call();
        }
    }

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $this->iconified = true;; //заныкал
    }

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        app()->shutdown();
    }

    /**
     * @event image.click 
     */
    function doImageClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        
    }
}
