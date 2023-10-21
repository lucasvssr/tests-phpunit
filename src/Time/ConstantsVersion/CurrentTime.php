<?php

declare(strict_types=1);

namespace Time\ConstantsVersion;

class CurrentTime
{
    public const NIGHT = 1;
    public const MORNING = 2;
    public const NOON = 3;
    public const EVENING = 4;

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
    public function getTimeOfDay(): int
    {
        $time = $this->getTime();
        $night = ['00','01','02','03','04','05'];
        $morning = ['06','07','08','09','10','11'];
        $noon = ['12','13','14','15','16','17'];
        $evening = ['18','19','20','21','22','23'];

        if (in_array($time, $night)) {
            return self::NIGHT;
        } elseif (in_array($time, $morning)) {
            return self::MORNING;
        } elseif (in_array($time, $noon)) {
            return self::NOON;
        } elseif (in_array($time, $evening)) {
            return self::EVENING;
        }
        return 0;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return time();
    }
}
