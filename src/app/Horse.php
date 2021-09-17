<?php 

namespace Sonnys\Application;

//	A Horse gallops.
class Horse {

    // A horse running is about the same as galloping
    public function gallop() {
        // Since galloping and flying are complicated operations, they are assumed to require several lines of non-trivial code.  
        // The details of these algorithms are irrelevant to this question. You may represent them in your code using comments.

        // galloping code here
        syslog(LOG_INFO, __CLASS__ . ' is galloping.');        
    }
}
