<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Odoo Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="container">
        <table class="table table-hover table-bordered m-4">
            <thead>
                <th>CID</th>
                <th>Name</th>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>
                        {{$customer->id}}
                    </td>
                    <td>
                        {{$customer->name}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="markup.php" type="button" class="btn btn-warning">Add Markup</a>
    </div>
</body>