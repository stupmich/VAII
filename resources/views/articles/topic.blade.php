<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@extends('layouts.app')

@section('content')
    <div id="container3">

        <div id="containerForumWrap">
                <div id="containerForumUser">
                    <p id="userName"></p>
                </div>
                <div id="containerForumText">
                    <p id="text"></p>
                </div>

        </div>

    </div>
@endsection


<script type="text/javascript">

    $(document).ready(function(){
        fetchRecords();
        fetchName();
    });

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

                    if (response['data'] != null) {
                        var text = response['data'][id-1].text;
                        var tr_str = text;

                        $("#text").append(tr_str);
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
                    console.log(response['data']);
                    if (response['data'] != null) {
                        var text = response['data'].name;
                        var faction = response['data'].faction;
                        var realmList = response['data'].realm;

                        var tr_str = text + faction + realmList;

                        $("#userName").append(tr_str);
                    } else {
                        var tr_str = "<tr>" +
                            "<td align='center' colspan='4'>No record found.</td>" +
                            "</tr>";

                        $("#userName").append(tr_str);

                    }
                }
            });
    }

</script>
