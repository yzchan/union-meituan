<?php

namespace MeituanUnion\request\traits;

trait CityIdTrait
{
    public $cityId = 0;             // 2022年4月新增城市ID 目前仅优选业务线单品推广使用

    /**
     * @param int $cityId
     * @return $this
     */
    public function setCityId(int $cityId): self
    {
        $this->cityId = $cityId;
        return $this;
    }
}
