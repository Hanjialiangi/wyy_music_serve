<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    private $imageRepository;
    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * 获取轮播图
     */
    public function getFigure()
    {
        return $this->imageRepository->getFigure();
    }

    /**
     * 获取歌单列表
     */
    public function getSongList()
    {
        return $this->imageRepository->getSongList();
    }

    /**
     * 获取私人定制
     */
    public function getPersonalSend()
    {
        return $this->imageRepository->getPersonalSend();
    }

    /**
     * 获取推荐mv
     */
    public  function getRecommendedMv()
    {
        return $this->imageRepository->getRecommendedMv();
    }
}