<?php


namespace App\Repositories;
use App\Models\Figure;
use App\Models\SongList;
use App\Models\PersonalSend;
use App\Models\RecommendedMv;

use Czim\Repository\BaseRepository;

class ImageRepository extends BaseRepository
{
    public function model()
    {
        return Figure::class;SongList::class;
    }

    /**
     * 获取轮播图
     */
    public function getFigure()
    {
       $result = Figure::where('is_delete','0')->get();
       return $result;
    }

    /**
     * 获取歌单列表
     */
    public function getSongList()
    {
        $result = SongList::where('is_delete','0')->get();
        return $result;
    }

    /**
     * 获取私人定制
     */
    public function getPersonalSend()
    {
       $result = PersonalSend::where('is_delete','0')->get();
       return $result;
    }

    /**
     * 获取推荐mv
     */
    public  function getRecommendedMv()
    {
        $result = RecommendedMv::where('is_delete','0')->get();
        return $result;
    }
}