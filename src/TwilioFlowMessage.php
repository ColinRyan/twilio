<?php


namespace NotificationChannels\Twilio;

class TwilioFlowMessage extends TwilioMessage
{
    public $flow = null;
    public $from = null;

    public function flow(String $flow = '')
    {
        $this->flow = $flow;
        return $this;
    }

    public function getFrom()
    {
        if ($this->from) {
            return $this->from;
        }
    }
}
