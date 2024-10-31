<?php

use App\Models\Topic;

if (!function_exists('nextTopic')) {
    function nextTopic($topicId) {

        $topic = Topic::find($topicId);

        $nextTopic = Topic::where("skill_id",$topic->skill_id)->where("id",">",$topic->id)->orderBy("id","asc")->first();



        $nextTopicId = null;

        if($nextTopic){
            $nextTopicId=$nextTopic->id;
        }

        return $nextTopicId;
    }
}


if (!function_exists('prevTopic')) {
    function prevTopic($topicId) {

        $topic = Topic::find($topicId);

        $prevTopic = Topic::where("skill_id",$topic->skill_id)->where("id","<",$topic->id)->orderBy("id","desc")->first();




        $prevTopicId = null;

        if($prevTopic){
            $prevTopicId=$prevTopic->id;
        }

        return $prevTopicId;
    }
}
