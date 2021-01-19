<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
@extends('layouts.app')

@section('content')
    <div id="container3">
        <div class="row">
            <img
                src="https://d1bg94bbsh66ji.cloudfront.net/en/wow/plugins/discourse-blizzard-themes/images/logos/wow/logo-small-wow.png"
                width="50" height="50" class="d-inline-block" alt="" loading="lazy" style="margin-left: 30px">
            <h2 id="topic_title" class="forumHeader"></h2>
        </div>

        <div id="containerForumWrap">
            <div id="containerForumUser">
                <p id="img"></p>
                <p id="userName" class="usernameForum"></p>
                <p id="faction" class="infoForum"></p>
                <p id="realmlist" class="infoForum"></p>
            </div>
            <div id="containerForumText">
                <p id="text" class="textForum"></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div id="commentsnames" style="width: 20%;">

                </div>
                <div id="comments" style="width: 80%;">

                </div>
            </div>
        </div>

        @can('store', \App\Models\Comment::class)
            <div id="containerReplyForum">
                <h2 style="font-weight: bold;
        margin-left: 5%;
        line-height: 1.8;">Reply to topic</h2>
                <form action="{{route('comment.store' ,['id' => $id])  }}"
                      enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                                         <textarea class="form-control" id="reply" name="reply"
                                                   placeholder="Write your reply here..."
                                                   style="resize: none; height: 200px;width: 90%;margin-left: 5%;margin-right: 5%" required></textarea>
                        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 2%">Send</button>
                    </div>

                </form>
            </div>
        @endcan


    </div>
@endsection


<script type="text/javascript">

    $(document).ready(function () {
        fetchall();
    });

    function fetchall() {
        fetchName();
        fetchRecords();
        fetchCommentNames();
        fetchComments();
    }

    function fetchRecords() {

        url = window.location.href;
        var id = url.split("/", 8).pop();
        var urlstr = 'http://localhost/blog/public/article/topicAjax/' + id;

        $.ajax(
            {
                url: urlstr,
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    $('#text').empty(); // Empty <tbody>
                    $('#topic_title').empty();
                    console.log(response['data']);
                    if (response['data'] != null) {
                        var text = response['data'][0].text;
                        var topicTitle = response['data'][0].title;
                        var tr_str = text;

                        $("#text").append(tr_str);
                        $("#topic_title").append(topicTitle);

                    } else {
                        var tr_str = "<tr>" +
                            "<td align='center' colspan='4'>No record found.</td>" +
                            "</tr>";

                        $("#text").append(tr_str);

                    }
                }
            });
    }

    function fetchName() {

        url = window.location.href;
        var id = url.split("/", 8).pop();
        var urlstr = 'http://localhost/blog/public/article/topicUserAjax/' + id;
        $.ajax(
            {
                url: urlstr,
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    $('#userName').empty(); // Empty <tbody>

                    if (response['data'] != null) {
                        var text = response['data'].name;
                        var faction = response['data'].faction;
                        var realmList = response['data'].realm;
                        var img = "/blog/public/" + response['data'].avatar;

                        $("#img").append("<img src=\"" + img + "\" class=\"imageUserForum\" alt=\"...\">")

                        $("#userName").append(text);
                        $("#faction").append(faction);
                        $("#realmlist").append(realmList);

                    }
                }
            });
    }

    function fetchComments() {

        url = window.location.href;
        var id = url.split("/", 8).pop();
        var urlstr = 'http://localhost/blog/public/article/commentsAjax/' + id;

        $.ajax(
            {
                url: urlstr,
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }
                    if (len > 0) {
                        for (var i = 0; i < len; i++) {
                            var text = response['data'][i].text;

                            $("#comments").append("<div id=\"containerForumWrap\">\n" +
                                "            <div id=\"containerForumText2\">\n" +
                                "                <p id=\"text\" class=\"textForum\"> " + text + "</p>\n" +
                                "            </div>\n" +
                                "        </div>"
                            );
                        }
                    }
                }
            });
    }


    function fetchCommentNames() {

        url = window.location.href;
        var id = url.split("/", 8).pop();
        var urlstr = 'http://localhost/blog/public/article/commentsUserAjax/' + id;

        $.ajax(
            {
                url: urlstr,
                type: 'GET',
                dataType: 'json',
                success: function (response) {

                    if (response['data'] != null) {
                        if (response['data'] != null) {

                            len = response['data'].length;
                        }
                        if (len > 0) {
                            for (var i = 0; i < len; i++) {
                                var name = response['data'][i].name;
                                var faction = response['data'][i].faction;
                                var realmList = response['data'][i].realm;
                                var img = "/blog/public/" + response['data'][i].avatar;

                                $("#commentsnames").append("        <div id=\"containerForumWrap\">\n" +
                                    "            <div id=\"containerForumUser2\">\n" +
                                    "                <img src=\" " + img + " \" class=\"imageUserForum\">\n" +
                                    "                <p id=\"userName\" class=\"usernameForum\">" + name + "</p>\n" +
                                    "                <p id=\"faction\" class=\"infoForum\">" + faction + "</p>\n" +
                                    "                <p id=\"realmlist\" class=\"infoForum\">" + realmList + "</p>\n" +
                                    "            </div>\n" +
                                    "        </div>"
                                );
                            }
                        }

                    }
                }
            });
    }

</script>
