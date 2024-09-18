<?php 
  // titles
  $home_page_title = "Home page";
  $doc_page_title = "Doctors page";
  $single_page_title = "Single page";
  $reg_page_title = "Register page";
  $account_page_title = "My account";
  // menu and logo part
  $logo = "images/logo.png";
  $menu_items = [
    "Home" => "index.php",
    "Our doctors" => "doctors.php",
    "Register" => "register.php"
  ];
	// Carousel part
	$home_slider_images = ["images/vinir.jpg","images/2.jpg","images/3.jpg"];

	$home_carusel_descs = ["Create your HOLLYWOOD SMILE","Teeth in 1 day All_on_6","Start straightening your teeth today"];

	
	$is_active = "active";
	$is_current = true;
	$is_reverse = "";

	$buttons = '';
	$j = 0;

	for ($i=0; $i<3; $i++) { 
    	if($i!=0) {
	      $is_active = "";
	      $is_current = false;
    	}
    	$buttons.= "<button type='button' data-bs-target='#carouselExampleDark' data-bs-slide-to='".$i."' class='".$is_active."' aria-current='".$is_current."'  
		aria-label=' Slide ".$j++."'>
		</button>";
  }

  // main part
  $h1_text = "Dentistry, Implantation, Aesthetic medicine";
  $about_title = "About Us";
  $about_desc1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $about_desc2 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $service_title = "Our Services";


  $services_titles = ["Implantation","Opalescence Boost Whitening","Zoom4 whitening"];

  $services_descs = ["Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.","Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum."];

  $services_imgs = ["images/implantation.png","images/opal.jpg","images/zoom4.png"];
  // doctors part
  $doctor1 = [
    "id" => 0,
    "name" => "Doctor name",
    "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
    "image" => "images/doctor1.png",
    "education" => "2016-2021 - studied at the Faculty of Dentistry of YSU Mkhitar Heratsi, qualified as a dentist. 2021-2023 - Received a postgraduate education at the residency of the Faculty of Dentistry of YSU.She is qualified as a family dentist.",
    "work_experience" => "In 2020-2021, he completed professional practice at the MaryClinic dental clinic. Since 2021, he has been working at the MaryClinic dental clinic as a therapist-dentist."
  ];
  $doctor2 = [
    "id" => 1,
    "name" => "Doctor name",
    "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
    "image" => "images/doctor2.png",
    "education" => "2016-2021 - studied at the Faculty of Dentistry of YSU Mkhitar Heratsi, qualified as a dentist. 2021-2023 - Received a postgraduate education at the residency of the Faculty of Dentistry of YSU.She is qualified as a family dentist.",
    "work_experience" => "In 2020-2021, he completed professional practice at the MaryClinic dental clinic. Since 2021, he has been working at the MaryClinic dental clinic as a therapist-dentist."
  ];
  $doctor3 = [
    "id" => 2,
    "name" => "Doctor name",
    "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
    "image" => "images/doctor3.png",
    "education" => "2016-2021 - studied at the Faculty of Dentistry of YSU Mkhitar Heratsi, qualified as a dentist. 2021-2023 - Received a postgraduate education at the residency of the Faculty of Dentistry of YSU.She is qualified as a family dentist.",
    "work_experience" => "In 2020-2021, he completed professional practice at the MaryClinic dental clinic. Since 2021, he has been working at the MaryClinic dental clinic as a therapist-dentist."
  ];
  $doctor4 = [
    "id" => 3,
    "name" => "Doctor name",
    "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
    "image" => "images/doctor4.jpg",
    "education" => "2016-2021 - studied at the Faculty of Dentistry of YSU Mkhitar Heratsi, qualified as a dentist. 2021-2023 - Received a postgraduate education at the residency of the Faculty of Dentistry of YSU.She is qualified as a family dentist.",
    "work_experience" => "In 2020-2021, he completed professional practice at the MaryClinic dental clinic. Since 2021, he has been working at the MaryClinic dental clinic as a therapist-dentist."
  ];
  $doctor5 = [
    "id" => 4,
    "name" => "Doctor name",
    "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
    "image" => "images/doctor5.jpg",
    "education" => "2016-2021 - studied at the Faculty of Dentistry of YSU Mkhitar Heratsi, qualified as a dentist. 2021-2023 - Received a postgraduate education at the residency of the Faculty of Dentistry of YSU.She is qualified as a family dentist.",
    "work_experience" => "In 2020-2021, he completed professional practice at the MaryClinic dental clinic. Since 2021, he has been working at the MaryClinic dental clinic as a therapist-dentist."
  ];
  $doctor6 = [
    "id" => 5,
    "name" => "Doctor name",
    "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
    "image" => "images/doctor6.png",
    "education" => "2016-2021 - studied at the Faculty of Dentistry of YSU Mkhitar Heratsi, qualified as a dentist. 2021-2023 - Received a postgraduate education at the residency of the Faculty of Dentistry of YSU.She is qualified as a family dentist.",
    "work_experience" => "In 2020-2021, he completed professional practice at the MaryClinic dental clinic. Since 2021, he has been working at the MaryClinic dental clinic as a therapist-dentist."
  ];

  $doctors = [$doctor1,$doctor2,$doctor3,$doctor4,$doctor5,$doctor6];
  // Months
  $months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

  $user_img = "images/user.png";
  $more_text = "Read more";
?>