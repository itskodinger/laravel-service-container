<?php 

namespace App\Kodinger;

use Illuminate\Contracts\Logging\Log;

class Slack implements Log {

    public function alert($message, array $contextual = []) {
        return $message . ' from Slack Class!';
    }

}