<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@extends('layouts.app')

@section('content')
    <div id="container3">

        <div class="row">
            <img
                src="https://d1bg94bbsh66ji.cloudfront.net/en/wow/plugins/discourse-blizzard-themes/images/logos/wow/logo-small-wow.png"
                width="50" height="50" class="d-inline-block" alt="" loading="lazy" style="margin-left: 30px">
            <h2 id="category" style="font-weight: bold;
    margin-left: 5px;
    line-height: 1.8;">{{strtoupper(str_replace("-"," ",$category))}}</h2>
            <h5 id="subcategory" style=" margin-left: 30px;
    margin-right: 20px;
    line-height: 3.1;">{{str_replace("-"," ",$subcategory)}} </h5>
            <a class="btn btn-primary" href="{{ route('articles.create',['category' =>$category, 'subcategory' =>$subcategory ]) }}" role="button"
               style="border:solid; border-color: #00aeff#00aeff;align-self: start; margin-left: auto;margin-right: 30px">NEW
                TOPIC</a>
        </div>


        <table id="topicsTable" class="table table-hover">
            <thead style="border-bottom:solid; border-color: mediumslateblue">
            <tr>
                <th scope="col"></th>
                <th scope="col" style="width: 50%">Topic</th>
                <th scope="col">Author</th>
                <th scope="col">Date</th>
            </tr>
            </thead>

            <tbody>
            </tbody>
        </table>

    </div>
@endsection

<script type="text/javascript">

    $(document).ready(function () {
        fetchRecords();
    });

    function fetchRecords() {

        $.ajax({
            url: '<?php echo url('http://localhost/blog/public/article/topicsAjax')?>',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                var len = 0;
                $('#userTable tbody').empty(); // Empty <tbody>
                if (response['data'] != null) {

                    len = response['data'].length;
                }

                if (len > 0) {
                    for (var i = 0; i < len; i++) {

                        var title = response['data'][i].title;
                        var createdAt = response['data'][i].created_at;
                        var res = createdAt.substring(0, 10);
                        var author = response['data'][i].username;
                        var id = response['data'][i].id;

                        var url = '{{ route("articles.topic", ['id' => ':id' ] ) }}';
                        url = url.replace(':id', id);

                        var tr_str = "<tr style=\"transform: rotate(0);\"> " +
                            "<th scope=\"row\"><a href=\"" + url + "\"  class=\"stretched-link\"></a></th>" +
                            "<td >" + title + "</td>" +
                            "<td >" + author + "</td>" +
                            "<td >" + res + "</td>" +
                            "</tr>";

                        $("#topicsTable tbody").append(tr_str);
                    }
                } else {
                    var tr_str = "<tr>" +
                        "<td align='center' colspan='4'>No record found.</td>" +
                        "</tr>";

                    $("#topicsTable tbody").append(tr_str);
                }

            }
        });
    }

</script>
