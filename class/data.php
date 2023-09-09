<?php

// create a class for my data
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json");

class Christian {

    public $slack_name;
    public $track;
    public $current_day;
    public $utc;
    public $github_file_url;
    public $github_repo_url;
    public $status_code;

    public function setItem($slack_name, $track)
    {
        // Get the current UTC time
        $currentTimeUTC = gmdate('Y-m-d H:i:s');

        // Get the current UTC timestamp
        $currentTimeStamp = strtotime($currentTimeUTC);

        // Get the current UTC timestamp +/- 2 seconds
        $allowedTimeRange = 2; // You can adjust this value as needed
        $minTimestamp = $currentTimeStamp - $allowedTimeRange;
        $maxTimestamp = $currentTimeStamp + $allowedTimeRange;

        // Get the current UTC time within the allowed range
        $currentTimeWithinRange = gmdate('Y-m-d\TH:i:s\Z', rand($minTimestamp, $maxTimestamp));

        $this->slack_name = $slack_name;
        $this->track = $track;
        $this->current_day = date('l');
        $this->utc = $currentTimeWithinRange;
        $this->github_file_url = "https://github.com/GiliKing/stage-one-backend/blob/master/api.php";
        $this->github_repo_url = "https://github.com/GiliKing/stage-one-backend/";
        $this->status_code = 200;
    }



    public function getItem() { 

        $data_christian = new stdClass;

        $data_christian->slack_name = $this->slack_name;
        $data_christian->current_day = $this->current_day;
        $data_christian->utc_time = $this->utc;
        $data_christian->track = $this->track;
        $data_christian->github_file_url = $this->github_file_url;
        $data_christian->github_repo_url = $this->github_repo_url;
        $data_christian->status_code = $this->status_code;


        return $data_christian;

    }


}


