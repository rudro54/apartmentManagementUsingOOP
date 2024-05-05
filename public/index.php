<?php
use app\Classes\LuxuryApartment;
use app\Classes\Owner;
use app\Classes\StandardApartment;

include 'autoloader.php';


$standardApartment = new StandardApartment("501", 1800, 2);
$luxuryApartment = new LuxuryApartment("502", 3000, 3, ["Swimming Pool", "Gym", "Parking"]);

$standardApartment->setBalcony(True);
$standardApartment->calculateRent();

$ownerOne = new Owner("Robin", $standardApartment);
$ownerTwo = new Owner("Zayed", $luxuryApartment);


echo "Standard Apartment Details : \n";

$standardApartment->getApartmentDetails();


echo "Luxury Apartment Details : \n";

$luxuryApartment->getApartmentDetails();
echo "Amenities :" . $luxuryApartment->getAmenities() . "\n";


echo "Owner Details : \n";

$ownerOne->displayOwnerDetails();
$ownerTwo->displayOwnerDetails();


