<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;

use Yii;
use yii\mongodb\Query;
/**
 * Description of CArt
 *
 * @author hdq
 */
class CArtMmjpg {
    const PAGE_SIZE = 20;
    //put your code here
    //{ 
    //"_id" : "124bcbb001075083bf453985c05e7144", 
    //"span" : "2016-12-03", 
    //"title" : "頭髮微卷清凉mm意境清纯写真", 
    //"img_dir" : [ 	"/root/download/spider/derilu/artlist/10/124bcbb001075083bf453985c05e7144/f63039bec7fc589a221.jpg", 	"/root/download/spider/derilu/artlist/10/124bcbb001075083bf453985c05e7144/f63039bec7fc589a222.jpg", 	"/root/download/spider/derilu/artlist/10/124bcbb001075083bf453985c05e7144/f63039bec7fc589a223.jpg", 	"/root/download/spider/derilu/artlist/10/124bcbb001075083bf453985c05e7144/f63039bec7fc589a224.jpg", 	"/root/download/spider/derilu/artlist/10/124bcbb001075083bf453985c05e7144/f63039bec7fc589a225.jpg", 	"/root/download/spider/derilu/artlist/10/124bcbb001075083bf453985c05e7144/f63039bec7fc589a226.jpg" ], 
    //"img_list" : [ 	"http://k1.yinjia888.com/4/20160315/f63039bec7fc589a221.jpg", 	"http://k1.yinjia888.com/4/20160315/f63039bec7fc589a222.jpg", 	"http://k1.yinjia888.com/4/20160315/f63039bec7fc589a223.jpg", "http://k1.yinjia888.com/4/20160315/f63039bec7fc589a224.jpg", 	"http://k1.yinjia888.com/4/20160315/f63039bec7fc589a225.jpg", 	"http://k1.yinjia888.com/4/20160315/f63039bec7fc589a226.jpg" ], 
    //"href" : "/arthtml/72647.html", 
    //"time" : "2016-12-04 05:27:55", 
    //"pic_url" : "http://derilu.com/arthtml/72647.html" 
    //}
    /**
     * 查询某一个分页的列表
     * @param type $page
     * @return boolean
     */
    public function queryMongo($page = 1) {
        try{
            $connection = Yii::$app->mongodb;
            $mongodb = $connection->getDatabase('mmjpg');
            //$filter = [];
            $skip = intval($page-1) * self::PAGE_SIZE;
            $query = new Query();
            // compose the query
            $query->select(['_id','title','span'])
                ->from('mmjpg')->offset($skip)->limit(self::PAGE_SIZE);
            // execute the query
            $rows = $query->all($mongodb);
            //var_dump($rows);
            return $rows;
        } catch (Exception $ex) {
            //throw $ex;
            return FALSE;
        }
    }
    /**
     * 查询总共有多少个分页
     * @return type
     */
    public function queryCount() {
        try{
            $connection = Yii::$app->mongodb;
            $mongodb = $connection->getDatabase('mmjpg');
            //$filter = [];
            //$skip = intval($page) * self::PAGE_SIZE;
            $query = new Query();
            // compose the query
            $count = $query->from('mmjpg')->count('*', $mongodb);
            // execute the query
            //$rows = $query->all($mongodb);
            //var_dump($count);
            return ceil($count/self::PAGE_SIZE);
        } catch (Exception $ex) {

        }
    }
    /**
     * 查询某个主题的图片数据
     * @param type $id
     * @return boolean
     */
    public function queryDetail($id = '') {
        try{
            $connection = Yii::$app->mongodb;
            $mongodb = $connection->getDatabase('mmjpg');
            $filter = ['_id'=>$id];
            //$limit = intval($page) * self::PAGE_SIZE;
            $query = new Query();
            // compose the query
            $query->select(['_id','title','span','img_dir'])
                ->from('mmjpg')
                ->filterWhere($filter);
            // execute the query
            $row = $query->one($mongodb);
            //var_dump($rows);
            return $row;
        } catch (Exception $ex) {
            //throw $ex;
            return FALSE;
        }
    }
}
