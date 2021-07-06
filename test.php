<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author darius
 */

$relDeal = new DDEX\nodes\ReleaseDeal();
$relDeal->setDealReleaseReference('123');
$relDeal->setEffectiveDate(date('Y-m-d'));

$Deal = new DDEX\nodes\Deal();
$DealTerms = new \DDEX\nodes\DealTerms();
$Deal->setDealTerms($DealTerms);

$DealTerms->setCommercialModelType('Comercial Type');
$DealTerms->setTerritoryCode('Worldwide');
$DealTerms->setStartDateTime(date('Y-m-d\TH:i:s+00:00'));

$Usage = new \DDEX\nodes\Usage();
$Usage->setUseType('Stream');
$DealTerms->setUsage($Usage);

$relDeal->setDeal($Deal);

echo $relDeal->toXML();