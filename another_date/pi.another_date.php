<?php
/**
 * Another Date
 * Display and format another date
 */
class Plugin_another_date extends Plugin
{
    /**
     * Display another date with a given format
     * 
     * @return mixed
     */
    public function index()
    {
        // fetch parameters
        $when    = $this->fetchParam('when', time(), null, false, false);  // defaults to now
        $format  = $this->fetchParam('format', Config::getDateFormat(), null, false, false);
        
        // resolve the date
        $resolved_date = Date::resolve($when);
        
        // if the resolved date is false
        if ($resolved_date === false) {
            // log a warning
            $this->log->warn('Couldn’t parse `' . $when . '` as a date.');
            
            // and then display nothing
            return '';
        }
        
        // we're good, return the date        
        return Date::format($format, $when);
    }
}