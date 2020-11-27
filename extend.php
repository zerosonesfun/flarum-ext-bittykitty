<?php

/*
 * A Flarum extension template for BBCode created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[bk=angry]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Angry.svg" alt="retro pixelated purple kitty emoji with an angry face" title="Kitty Angry"></span>'
            );
            $config->BBCodes->addCustom(
                '[bk=happy]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Happy.svg" alt="retro pixelated purple kitty emoji with a happy face" title="Kitty Happy"></span>'
            );
            $config->BBCodes->addCustom(
                '[bk=cool]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Kewl.svg" alt="retro pixelated purple kitty emoji with cool sunglasses" title="Kitty Kewl"></span>'
            );
            $config->BBCodes->addCustom(
                '[bk=kiss]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Kissy.svg" alt="retro pixelated purple kitty emoji blowing a kiss" title="Kitty Kiss"></span>'
            );
            $config->BBCodes->addCustom(
                '[bk=laugh]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Laughy.svg" alt="retro pixelated purple kitty emoji laughing" title="Kitty Laugh"></span>'
            );
            $config->BBCodes->addCustom(
                '[bk=nanny]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Nanny.svg" alt="retro pixelated purple kitty emoji going nanny-nanny-boo-boo" title="Kitty Nanny Nanny Boo Boo"></span>'
            );
            $config->BBCodes->addCustom(
                '[bk=sad]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Sad.svg" alt="retro pixelated purple kitty emoji with a sad face" title="Kitty Sad"></span>'
            );
            $config->BBCodes->addCustom(
                '[bk=speechless]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Speechless.svg" alt="retro pixelated purple kitty emoji with no mouth because kitty is speechless" title="Kitty Speechless"></span>'
            );
            $config->BBCodes->addCustom(
                '[bk=wink]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Winky.svg" alt="retro pixelated purple kitty emoji winking" title="Kitty Wink"></span>'
            );
            $config->BBCodes->addCustom(
                '[bk=wow]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@m1/assets/Icons/svg/Wow.svg" alt="retro pixelated purple kitty emoji with a shocked face" title="Kitty Shock"></span>'
            );
        })
];
