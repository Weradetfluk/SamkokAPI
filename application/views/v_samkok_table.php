<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samkok</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- As a link -->
    <nav class="navbar bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="#">Samkok</a>
        </div>
    </nav>


    <div class="container text-center">

        <div class="layout mt-5" id="layout">

        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $.ajax({
                type: 'post',
                //path ตาม ที่ php เลย
                url: '<?php echo base_url('SAM_controller/get_data'); ?>',
                dataType: 'json',
                data: {
                    id: 3,
                },
                success: function() {

                },
                error: function() {
                    alert('ajax get data not working');
                }
            }).then(function(json_data) {
                console.log(json_data[0]);

                set_layout_page(json_data[0]);

            });

        });

        function set_layout_page(data){

            html = '';

            html += '<img src="' + data.pic + '">';

            html += '<h1 class="mt-3">' + data.name + '</h1>';

            html += '<h5 class="mt-3">' + data.description + '</h5>';

            $('#layout').html(html);

        }
 
    </script>

</body>

</html>