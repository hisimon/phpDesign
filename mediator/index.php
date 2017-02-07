<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-20
 */

$titleFromDb = 'waste of a rib';

$bandFromDb = 'Never Again';

$mediator = new MusiccontainerMediator();
$cd = new CD( $mediator );
$cd ->title = $titleFromDb;
$cd ->band = $bandFromDb;

$cd ->changeBandName('Never once Again');

