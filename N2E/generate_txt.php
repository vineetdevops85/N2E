<?php
if (isset($_POST['submit'])) {
    $siteID = $_POST['siteid'];
    $alarmText = $_POST['alarm'];

    // Split the alarm text into lines
    $alarms = explode("\n", $alarmText);

    // Create the content for the .txt file
    $content = "";

    foreach ($alarms as $index => $alarm) {
        // Extract the alarm code and message
        $parts = explode(':', $alarm);
        $code = trim($parts[0]);
        $message = trim($parts[1]);

        // Determine the FieldReplaceableUnit value based on the code
        switch ($code) {
            case '900101':
                $fru = '1';
                break;
            case '900102':
                $fru = '2';
                break;
            case '900103':
                $fru = '3';
                    break;
            case '900104':
                $fru = '4';
                break;
            case '900105':
                $fru = '5';
                break;
            case '900106':
                $fru = '6';
                break;
            case '900107':
                $fru = '7';
                break;
            case '900108':
                $fru = '8';
                break;
            case '900109':
                $fru = '9';
                break;
            case '900110':
                $fru = '10';
                break;
            case '900111':
                $fru = '11';
                break;
            case '900112':
                $fru = '12';
                break;
            case '900113':
                $fru = '13';
                break;
            case '900114':
                $fru = '14';
                break;
            case '900116':
                $fru = '16';
                break;
            case '900117':
                $fru = '17';
                break;            
            default:
                $fru = '1'; // Default value
                break;
        }

        // Append to the content
        $content .= "cmedit set SubNetwork=ONRM_ROOT_MO,MeContext=$siteID,ManagedElement=$siteID,Equipment=1,FieldReplaceableUnit=SAU-1,AlarmPort=$fru userlabel=\"$message\"\n";
    }

    // Generate the file name with the siteID
    $fileName = $siteID . '_External_Alarm.txt';

    // Set headers to force download with the named file
    header('Content-Type: text/plain');
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Output the content
    echo $content;
    exit;
} else {
    // Redirect if accessed directly
    header('Location: index.php');
    exit;
}
?>
