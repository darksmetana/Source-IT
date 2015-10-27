<?php
$mysqli = false;
function connectDB() {
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "root", "sourceit");
    $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB () {
    global $mysqli;
    $mysqli->close();
}

class News {
    public function saveNews() {

    }

    public function getNews() {

    }
}

class RssNews {
    public function buildRss() {

    }

    public function getRss() {
        
    }
}
?>