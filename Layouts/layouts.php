<?php

class layouts {
    public function heading() {
        echo "Welcome to BBIT DevOps!";
    }
    public function welcome() {
        echo "<p>This is a new semester.</p>";
    }
    public function footer($conf){
        echo "<footer>
        Copyright &copy; " . date("Y") . " " . $conf['site_name'] . "
        <br>Contact us at <a href='mailto:{$conf['email']}'>{$conf['email']}</a></footer>";
    }
} 
