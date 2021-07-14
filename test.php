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
include 'autoload.php';
use DDEX\DDEX;
use DDEX\nodes\{
    ReleaseDeal,
    Usage,
    DealList,
    CLine,
    Deal,
    DealTerms,
    DisplayArtist,
    Genre,
    PLine,
    ReferenceTitle,
    Release,
    ReleaseDetailsByTerritory,
    ReleaseId,
    ReleaseList,
    Title,
    ReleaseResourceReferenceList,
    ResourceGroup,
    ResourceGroupContentItem,
    ValidityPeriod
};
use DDEX\DDEXSingleNode;

$RelList = new ReleaseList();
$rel = new Release('Release title', Release::TYPE_ALBUM, true);
$rel->setReleaseReference('CR123');
$RelList->setRelease([$rel]);

$ReleaseId = new ReleaseId();
$ReleaseId->setICPN(new DDEXSingleNode('ICPN', 'YOUR UPC OR EAN HERE', ['isEAN' => 'true']));
$ReleaseId->setCatalogNumber(new DDEXSingleNode('CatalogNumber', 'CR123', ['Namespace' => 'DPID:YOUR DPID HERE']));
$rel->setReleaseId($ReleaseId);

$ReleaseResourceReferenceList = new ReleaseResourceReferenceList();
$ReleaseResourceReferenceList->addReleaseResourceReference('A1', ReleaseResourceReferenceList::TYPE_PRIMARY);
$ReleaseResourceReferenceList->addReleaseResourceReference('A2', ReleaseResourceReferenceList::TYPE_SECONDARY);
$rel->setReleaseResourceReferenceList($ReleaseResourceReferenceList);

$ReleaseDetailsByTerritory = new ReleaseDetailsByTerritory();
$ReleaseDetailsByTerritory->setDisplayArtistName('Artist main name');
$ReleaseDetailsByTerritory->setTerritoryCode('Worldwide');
$ReleaseDetailsByTerritory->setLabelName(new \DDEX\DDEXSingleNode('LabelName', 'Came from JJ', ['LabelNameType' => 'DisplayLabelName']));
$ReleaseDetailsByTerritory->addTitle(new Title('Say my name', Title::TYPE_DISPLAY));
$ReleaseDetailsByTerritory->addTitle(new Title('Say my formal', Title::TYPE_FORMAL));
$ReleaseDetailsByTerritory->addDisplayArtist(new DisplayArtist('DUT2', DisplayArtist::ROLE_MAIN, 1));
$ReleaseDetailsByTerritory->addDisplayArtist(new DisplayArtist('DUT3', DisplayArtist::ROLE_MAIN, 2));
$ReleaseDetailsByTerritory->addDisplayArtist(new DisplayArtist('DUT4', DisplayArtist::ROLE_FEATURED, 3));
$ReleaseDetailsByTerritory->setParentalWarningType(DDEX::PARENT_WARNING_NONEXPLICIT);

$ResourceGroup = new ResourceGroup();
$ResourceGroup2 = new ResourceGroup('Disc 1');
$ResourceGroup->addResourceGroup($ResourceGroup2);

$ResourceGroupContentItem = new ResourceGroupContentItem();
$ResourceGroupContentItem->setResourceType(ResourceGroupContentItem::TYPE_Image);
$ResourceGroupContentItem->setSequenceNumber(1);
$ResourceGroupContentItem->setReleaseResourceReference(new DDEXSingleNode('ReleaseResourceReference', 'A1', ["ReleaseResourceType" => "SecondaryResource"]));
$ResourceGroup2->addResourceGroupContentItem($ResourceGroupContentItem);
$ResourceGroupContentItem2 = new ResourceGroupContentItem();
$ResourceGroupContentItem2->setResourceType(ResourceGroupContentItem::TYPE_Image);
$ResourceGroupContentItem2->setSequenceNumber(2);
$ResourceGroupContentItem2->setReleaseResourceReference(new DDEXSingleNode('ReleaseResourceReference','A2', ["ReleaseResourceType" => "SecondaryResource"]));
$ResourceGroup2->addResourceGroupContentItem($ResourceGroupContentItem2);

$ResourceGroupContentItem3 = new ResourceGroupContentItem();
$ResourceGroupContentItem3->setResourceType(ResourceGroupContentItem::TYPE_Image);
$ResourceGroupContentItem3->setSequenceNumber(3);
$ResourceGroupContentItem3->setReleaseResourceReference(new DDEXSingleNode('ReleaseResourceReference','A3', ["ReleaseResourceType" => "SecondaryResource"]));
$ResourceGroup->addResourceGroupContentItem($ResourceGroupContentItem3);
$ReleaseDetailsByTerritory->addResourceGroup($ResourceGroup);
$ReleaseDetailsByTerritory->setReleaseDate(date('Y-m-d'));
$ReleaseDetailsByTerritory->setGenre(new Genre('K-Pop', 'Hip Hop'));

$rel->addReleaseDetailsByTerritory($ReleaseDetailsByTerritory);

$PLine = new PLine('1999', 'Sound Republica, Inc.');
$CLine = new CLine('1999', 'Chillhop Music');

$rel->setPLine($PLine);
$rel->setCLine($CLine);

$dealList = new DealList();
$relDeal = new ReleaseDeal();
$relDeal->setDealReleaseReference('123');
$relDeal->setEffectiveDate(date('Y-m-d'));

$Deal = new Deal();
$DealTerms = new DealTerms();
$Deal->setDealTerms($DealTerms);

$DealTerms->setCommercialModelType('Comercial Type');
$DealTerms->setTerritoryCode('Worldwide');
$DealTerms->setValidityPeriod(new ValidityPeriod(date('Y-m-d\TH:i:s+00:00')));

$Usage = new Usage();
$Usage->setUseType('Stream');
$DealTerms->setUsage($Usage);

$relDeal->setDeal($Deal);

$dealList->addReleaseDeal($relDeal);
$dealList->addReleaseDeal($relDeal);
$dealList->addReleaseDeal($relDeal);

$xml = $RelList->toXML()->asXML();
$xml = str_replace('><','>'.PHP_EOL.'<', $xml);

var_dump($dealList->toXML()->asXML());
