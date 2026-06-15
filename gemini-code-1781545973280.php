<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if any services were selected
    if (!empty($_POST['services'])) {
        // Sanitize each item chosen from the array loop
        $selected_services = array_map('htmlspecialchars', $_POST['services']);
        
        // Turn array items into a single clean string for your emails or database
        $services_string = implode(", ", $selected_services);
        
        // Example output: "nails, eyelashes, massage"
        echo "You booked: " . $services_string;
    } else {
        echo "Please select at least one service.";
    }
}
?>