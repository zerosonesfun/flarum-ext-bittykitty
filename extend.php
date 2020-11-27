<?php

/*
 * A Flarum extension created by Billy Wilcosky which links to Billy's original Bitty Kitty emoji.
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
                '[bk={CHOICE=Angry,Happy,Cool,Kiss,Laugh,Tongue,Sad,Speechless,Wink,Wow;caseSensitive}]',
                '<span class="bitty-kitty"><img src="https://cdn.jsdelivr.net/gh/zerosonesfun/BittyKitty@1.0/dist/icons/SVG/{CHOICE}.svg" alt="retro pixelated purple kitty with {CHOICE} face" title="Kitty {CHOICE}"></span>'
            );
        })
];
