<?php
   
   require_once '../views.php';
   
   // render_log_list -- Create a bullet list in HTML
   function render_log($log) {
      $text = '<h3>Application History</h3><ul>';
      foreach ($log as $row) {
         $text .= '<li>' . $row['date'] . ', ' . $row['text'] . '</li>';
      }
      $text .= '</ul>';
      return $text;     
   }
?>