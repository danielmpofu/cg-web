<?php

$vision = "Our vision is to become an African Giant. By African Giant we are talk ing about becoming a company that will offer all the services you require for you and your business to get going.
Our mission is to employ and empower our local people in our offices which are spread across";

$activeCompanies = "6";
$totalBranches = "11";
$happyClients = "1200";
$africanCountries = "4";
$address = "24 Barnes, The Grange Hre, ZW";
class BrandItem
{
    public $logoUrl, $categoryName, $aboutLink, $description;
}

$gc = new BrandItem();
$gc->categoryName = "Solars & Renewable Energy";
$gc->logoUrl = "http://greencalloway.com/assets/img/logo.png";
$gc->aboutLink = "http://greencalloway.com/about.php";
$gc->description = "In line with sustainability, to become the region's leading supplier of solar water pumping and borehole systems for industrial and household use.";

$sc = new BrandItem();
$sc->categoryName = "Canvases, Tarpaulins and Bakkie Covers";
$sc->logoUrl = "https://starkland.co.zw/assets/img/starkland-logo.png";
$sc->aboutLink = "https://starkland.co.zw/about-us";
$sc->description = "We have been in this business for more than 4 years and we are one of the leading manufacturers and dealer of Tarpaulins, Tents, Water Tanks and Oil Tanks in the SADC region.";

$mc = new BrandItem();
$mc->categoryName = "Chemicals for multiple industries";
$mc->logoUrl = "https://cdn.shopify.com/s/files/1/0724/7981/products/19-091-01_b36c47b5-0995-4fd3-83e2-23c520d87df5_1024x1024.jpg?v=1550250752";
$mc->aboutLink = "http://clinic.africahealing.org/marimira-chemicals/about-us";
$mc->description = "Marimira Chemicals is Zimbabwe’s leading supplier of industrial, agricultural, domestic, mining, automotive and health chemicals. However, we are not limited to supplying chemicals only, we also provide chemical outsourcing services.";

$mg = new BrandItem();
$mg->categoryName = "Shipping, Port Clearing & Forwarding]";
$mg->logoUrl = "http://martgreen.co.zw/assets/images/logo.png";
$mg->aboutLink = "http://martgreen.co.zw/about.php";
$mg->description = "The leading customs clearance, freight forwarding & logistics partner, providing World Class Supply Chain Solutions to our clients, worldwide.";


$gc = new BrandItem();
$gc->categoryName = "";
$gc->logoUrl = "";
$gc->aboutLink = "";
$gc->description = "";

$brands = array($gc,$sc,$mc);