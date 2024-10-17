<?php

namespace Themes\Prolo {

    class Controller extends \Idno\Common\Theme
    {
        function registerTranslations()
        {

            \Idno\Core\Idno::site()->language()->register(
                new \Idno\Core\GetTextTranslation(
                    'prolo',
                    dirname(__FILE__) . '/languages/'
                )
            );
        }
    }

}

