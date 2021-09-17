<?php 

namespace Sonnys\Application;

/**
 * A Bird can fly.
 */
class Bird {
    // A bird flaps its wings
    public function fly() {
        // Since galloping and flying are complicated operations, they are assumed to require several lines of non-trivial code.  
        // The details of these algorithms are irrelevant to this question. You may represent them in your code using comments.

        // flying code here
        syslog(LOG_INFO, __CLASS__ . ' is flying.');        
    }

}
