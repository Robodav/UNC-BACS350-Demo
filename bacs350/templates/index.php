<?php
    
    // Bring in rendering functions
    require_once 'views.php';


    // Display the page content
    $demo = '<p>' . render_button('Other Demos', '..') . '</p>';

    $skills   = render_card("Skills", render_skills());
    $projects = render_card("Projects", render_projects());

    $content = "$demo $skills $projects";


    // Create main part of page content
    $settings = array(
        "site_title" => "dvandiver",
        "page_title" => "Templates", 
        "logo"       => "../images/David-Vandiver.jpg",
        "style"      => '../unc.css',
        "content"    => $content);

    echo render_page($settings);

?>
