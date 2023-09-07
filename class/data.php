

<?php

// create a class for my data

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
        $this->slack_name = $slack_name;
        $this->track = $track;
        $this->current_day = date('l');
        $this->utc = gmdate('Y-m-d H:i:s');
        $this->github_file_url = "1 for now";
        $this->github_repo_url = "2 for now";
        $this->status_code = 200;
    }



    public function getItem() { 

        $data_christian = new stdClass;

        $data_christian->slack_name = $this->slack_name;
        $data_christian->current_day = $this->current_day;
        $data_christian->utc = $this->utc;
        $data_christian->track = $this->track;
        $data_christian->github_file_url = $this->github_file_url;
        $data_christian->github_repo_url = $this->github_repo_url;
        $data_christian->status_code = $this->status_code;


        return $data_christian;

    }


}


