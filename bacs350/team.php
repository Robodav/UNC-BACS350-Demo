<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'dvandiver';
    
    $page_title = "Project Team";
    
    $content = '
        <h2>Project Team</h2>
        
        <table class="table table-hover">
            <th>Name</th>
            <th>Email</th>
            <th>Domain</th>
            <th>Github</th>
            <th>Issues</th>
            <tr>
                <td>Matthew Bradow</td>
                <td>brad8259@bears.unco.edu</td>
                <td><a href="https://matthewbradowwebdesign.com/bacs350/">Domain</a></td>
                <td><a href="https://github.com/matthew-bradow/BACS350">Github</a></td>
                <td><a href="https://github.com/matthew-bradow/BACS350/issues">Issues</a></td>
                <td>Unknown</td>
            </tr>
            <tr>
                <td>Devin Panikkar</td>
                <td>devin.panikkar@unco.edu</td>
                <td><a href="https://devin-panikkar.com/bacs350/">Domain</a></td>
                <td><a href="https://github.com/dkpanikkar/UNC-BACS350-2019-Fall">Github</a></td>
                <td><a href="https://github.com/dkpanikkar/UNC-BACS350-2019-Fall/issues">Issues</a></td>
            </tr>
            <tr>
                <td>Kevin Ritter</td>
                <td>ritt9966@bears.unco.edu</td>
                <td><a href="https://galifreyanwriter.com/bacs350/">Domain</a></td>
                <td><a href="https://github.com/KevinBRitter/bacs350Public">Github</a></td>
                <td><a href="https://github.com/KevinBRitter/bacs350Public/issues">Issues</a></td>
            </tr>
            <tr>
                <td>David Vandiver</td>
                <td>vand2653@bears.unco.edu</td>
                <td><a href="https://dvandiver.com/bacs350/">Domain</a></td>
                <td><a href="https://github.com/Robodav/UNC-BACS350-Demo">Github</a></td>
                <td><a href="https://github.com/Robodav/UNC-BACS350-Demo/issues">Issues</a></td>
            </tr>
        </table>

    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
