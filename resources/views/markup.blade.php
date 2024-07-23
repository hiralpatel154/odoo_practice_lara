<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Odoo Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="m-5">Laravel</h1>
        <p>Customer:{{$customer['name']}}</p>
        <div class="row">
            <!-- Oil Free -->
            <div class="col-md-6">
                <div class="box-1" id="oilFree">
                    <h5 class="card-title">Oil Free</h5>
                            <table class="table" id="tableOilFree">
                                <thead>
                                    <tr>
                                        <th scope="col">From Price</th>
                                        <th scope="col">To Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($markups as $mup)
                                    @if($mup->food_type == 'OilFree')
                                        <tr class="tr-oilfree-row">
                                            <td>
                                                <input type="number" name="from_price[]" id="fromPrice" class="from_price" value="{{ $mup->from_price }}">
                                            </td>
                                            <td>
                                                <input type="number" name="to_price[]" id="toPrice" class="to_price" value="{{ $mup->to_price }}">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-danger delete-oil-free">Delete</a>
                                            </td>
                                        </tr>
                                        @endif
                                @endforeach
                                </tbody>
                            </table>
                        
                </div>
                <a href="#" id="addOilFree" class="btn btn-warning">Add</a>
            </div>
            <!-- Oilly -->
            <div class="col-md-6">
                <div class="box-2">
                    <h5 class="card-title">Oilly</h5>
                    @foreach($markups as $mup)
                        @if($mup->food_type == 'Oilly')
                        <!-- Oilly -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">From Price</th>
                                    <th scope="col">To Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-oilly-row">
                                    <td>
                                        <input type="number" name="ol_from_price[]" id="olFromPrice" class="ol_from_price" value="{{$mup->from_price}}">
                                    </td>
                                    <td>
                                        <input type="number" name="ol_to_price[]" id="olToPrice" class="ol_to_price" value="{{$mup->to_price}}">
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger delete-oilly">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <a href="{{route('update_oil_free')}}" class="btn btn-info">Update Markup</a>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        // Oil Free
        deleteRow();
        function deleteRow(){
            if($('.tr-oilfree-row').length >=2){
                $('.delete-oil-free').css('display','block');
            }else{
                $('.delete-oil-free').css('display','none')
            }
        }
        $(document).on('click','#addOilFree', function(){
            var $cloned = $('#tableOilFree').find('tbody tr:last').clone();
            $('#tableOilFree tbody').append($cloned);
            $cloned.find('#fromPrice').val('');
            $cloned.find('#toPrice').val('');
            deleteRow();
        });
        $(document).on('click','.delete-oil-free', function () {
            $(this).closest('tr').remove();
            deleteRow();
        });
    });
</script>