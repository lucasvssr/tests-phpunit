<?php

declare(strict_types=1);

namespace Time\TimestampVersion;

class CurrentTime
{
    /**
     * @return string
     */
    public function getTime(): string
    {
        return date('H', $this->getTimestamp());
    }

    /**
     * @return string
     */
    public function getTimeOfDay(): string
    {
        $time = $this->getTime();
        $night = ['00','01','02','03','04','05'];
        $morning = ['06','07','08','09','10','11'];
        $noon = ['12','13','14','15','16','17'];
        $evening = ['18','19','20','21','22','23'];

        if (in_array($time, $night)) {
            return "Night";
        } elseif (in_array($time, $morning)) {
            return "Morning";
        } elseif (in_array($time, $noon)) {
            return "Noon";
        } elseif (in_array($time, $evening)) {
            return "Evening";
        }
        return "Time not Found";
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return time();
    }
}
